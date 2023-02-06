jQuery(document).ready(function($) {
    $('.category-list a').click(function(e) {
      e.preventDefault();
      var category = $(this).data('category');
      $.ajax({
        url: wpApiSettings.root + 'wp/v2/posts?categories=' + category,
        method: 'GET',
        beforeSend: function ( xhr ) {
          xhr.setRequestHeader( 'X-WP-Nonce', wpApiSettings.nonce );
        },
        success: function(data) {
          var posts = '';
          data.forEach(function(post) {
            posts += '<div class="post">';
            posts += '<h2><a href="' + post.link + '">' + post.title.rendered + '</a></h2>';
            posts += '<p class="category-name">' + post.categories + '</p>';
            posts += '<img src="' + post.featured_image_src + '" />';
            posts += '<p>' + post.excerpt.rendered + '</p>';
            posts += '</div>';
          });
          $('.posts').html(posts);
        }
      });
    });
  });