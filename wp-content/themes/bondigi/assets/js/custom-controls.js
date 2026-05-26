(function(api) {

  api.sectionConstructor['bondigi-upsell'] = api.Section.extend({
      attachEvents: function() {},
      isContextuallyActive: function() {
          return true;
      }
  });

  const bondigi_section_lists = ['banner', 'service'];
  bondigi_section_lists.forEach(bondigi_homepage_scroll);

  function bondigi_homepage_scroll(item) {
      item = item.replace(/-/g, '_');
      wp.customize.section('bondigi_' + item + '_section', function(section) {
          section.expanded.bind(function(isExpanding) {
              wp.customize.previewer.send(item, { expanded: isExpanding });
          });
      });
  }
})(wp.customize);