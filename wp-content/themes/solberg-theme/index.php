<?php get_header(); ?>
<main class="wrap">
  <section class="content-area content-thin">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="post">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="category-name"><?php the_category(', '); ?></p>
        <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail( 'post-thumbnail', array( 'class' => 'post-thumbnail' ) );
            }
        ?>
        <p><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
    </div>
<?php endwhile; else : ?>
      <article>
        <p><?php __('Sorry, no posts were found!'); ?></p>
      </article>
<?php endif; ?> 
  </section><?php  get_sidebar(); ?>

  <?php
    $pagination_args = array(
        'prev_text'          => __('Previous'),
        'next_text'          => __('Next'),
        'type'               => 'list',
        'mid_size'           => 1
    );
    echo paginate_links( $pagination_args );
?>
</main>
<?php get_footer(); ?>