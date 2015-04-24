(function($) {
  $(document).ready(
    function()
    {
      /** Handlebars Template: Display an individual mailing list post. */
      var post_template = Handlebars.compile($('#post-template').html());

      /**
       * Backbone Model: Post
       *   Models an individual mailing list post.
       */
      var PostModel = Backbone.Model.extend({
          defaults: {
            id: 0,
            subject: '',
            author: '',
            message_date: '',
            body: ''
            },
          url: function() {
              return '/dist/asset/ml/' + this.id + '.json';
            }
        });
      var post_model = new PostModel();

      /**
       * Backbone View: Individual Mailing List Post
       *   Listens for the Post model to change and renders
       *   the content appropriately.
       */
      var PostView = Backbone.View.extend({
          el: 'div#post',
          initialize: function() {
              this.listenTo(this.model, "change", this.render);
            },
          render: function() {
              this.$el.html(post_template(this.model.toJSON()));
            }
        });
      var post_view = new PostView({model: post_model});

      /**
       * Backbone View: Navigation Panel
       *   Determines what message has been selected and
       *   refreshes the Post model accordingly.
       */
      var NavigationView = Backbone.View.extend({
          el: 'ul#navigation',
          events: {
            'click a': 'select'
            },
          select: function(pEvent) {
              var selected = $(pEvent.target);
              this.$('li').removeClass('active');
              selected.parent().addClass('active');
              this.model.set('id', selected.attr('data-id'), {silent: true});
              this.model.fetch();
              return false;
            }
        });
      var navigation_view = new NavigationView({model: post_model});
      /** Click the first item in the navigation on page load. */
      $('ul#navigation a:first').click();

      $('a[rel=tooltip]').tooltip({html: true});
    });
})(jQuery);