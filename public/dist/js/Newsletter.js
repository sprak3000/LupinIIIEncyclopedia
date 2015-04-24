(function($) {
  $(document).ready(
    function()
    {
      var issue = $('#newsletter-content').attr('data-issue');
      $.getJSON('/dist/asset/newsletter/' + issue + '.json', function (data) {
        var section_template = Handlebars.compile($('#newsletter-section-template').html());
        $('#newsletter-content').append(section_template(data));
      });
    });
})(jQuery);