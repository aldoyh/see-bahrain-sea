import fs from "node:fs";
import path from "node:path";

const DEFAULT_IGNORES = new Set([
  ".git",
  "node_modules",
  "vendor",
  "dist",
  "build",
  "coverage",
  ".next",
  ".turbo",
]);

function statSafe(p) {
  try {
    return fs.statSync(p);
  } catch {
    return null;
  }
}

function existsDir(p) {
  const st = statSafe(p);
  return Boolean(st && st.isDirectory());
}

function readJsonSafe(p) {
  try {
    return JSON.parse(fs.readFileSync(p, "utf8"));
  } catch {
    return null;
  }
}

function readDirSafe(p) {
  try {
    return fs.readdirSync(p).filter((f) => !f.startsWith("."));
  } catch {
    return [];
  }
}

function findFilesRecursive(repoRoot, predicate, { maxFiles = 6000, maxDepth = 10 } = {}) {
  const results = [];
  const queue = [{ dir: repoRoot, depth: 0 }];
  let visited = 0;

  while (queue.length > 0) {
    const { dir, depth } = queue.shift();
    if (depth > maxDepth) continue;

    let entries;
    try {
      entries = fs.readdirSync(dir, { withFileTypes: true });
    } catch {
      continue;
    }

    for (const ent of entries) {
      const fullPath = path.join(dir, ent.name);
      if (ent.isDirectory()) {
        if (DEFAULT_IGNORES.has(ent.name)) continue;
        queue.push({ dir: fullPath, depth: depth + 1 });
        continue;
      }
      if (!ent.isFile()) continue;

      visited += 1;
      if (visited > maxFiles) return { results, truncated: true };
      if (predicate(fullPath)) results.push(fullPath);
    }
  }

  return { results, truncated: false };
}

function summarizeTheme(repoRoot, themeJsonPath) {
  const json = readJsonSafe(themeJsonPath);
  const rel = path.relative(repoRoot, themeJsonPath);
  const rootDir = path.dirname(rel);

  const templatesDir = path.join(repoRoot, rootDir, "templates");
  const partsDir = path.join(repoRoot, rootDir, "parts");
  const patternsDir = path.join(repoRoot, rootDir, "patterns");
  const stylesDir = path.join(repoRoot, rootDir, "styles");

  const templates = readDirSafe(templatesDir);
  const parts = readDirSafe(partsDir);
  const patterns = readDirSafe(patternsDir);
  const styleVariations = readDirSafe(stylesDir);

  const colorPalette = json?.settings?.color?.palette?.map((c) => ({
    name: c.name,
    slug: c.slug,
    color: c.color,
  })) || [];

  const fontSizes = json?.settings?.typography?.fontSizes?.map((f) => ({
    name: f.name,
    slug: f.slug,
    size: f.size,
  })) || [];

  const fluidTypography = Boolean(json?.settings?.typography?.fluid);
  const customCssInjected = Boolean(
    json?.styles?.css ||
    (json?.styles?.blocks && Object.values(json.styles.blocks).some((b) => b.css))
  );

  return {
    themeRoot: rootDir,
    themeJson: rel,
    version: typeof json?.version === "number" ? json.version : null,
    hasTemplates: templates.length > 0,
    templates,
    hasParts: parts.length > 0,
    parts,
    hasPatterns: patterns.length > 0,
    patterns,
    hasStyles: styleVariations.length > 0,
    styleVariations,
    colorPaletteCount: colorPalette.length,
    colorPalette,
    fontSizesCount: fontSizes.length,
    fontSizes,
    fluidTypography,
    customCssInjected,
    isBlockTheme: templates.length > 0 || parts.length > 0,
  };
}

function main() {
  const repoRoot = process.cwd();

  const { results: themeJsonFiles, truncated } = findFilesRecursive(
    repoRoot,
    (p) => path.basename(p) === "theme.json",
    {
      maxFiles: 8000,
      maxDepth: 12,
    }
  );

  const themes = themeJsonFiles.map((p) => summarizeTheme(repoRoot, p));

  const report = {
    tool: { name: "detect_block_themes", version: "0.2.0" },
    repoRoot,
    truncated,
    count: themes.length,
    themes,
  };

  process.stdout.write(`${JSON.stringify(report, null, 2)}\n`);
}

main();
