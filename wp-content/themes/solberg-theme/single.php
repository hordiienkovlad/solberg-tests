<?php get_header(); ?>
<main class="wrap">
  <section class="content-area content-full-width">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="article-full">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="category-name"><?php the_category(', '); ?></p>
        <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail( 'post-thumbnail', array( 'class' => 'post-thumbnail' ) );
            }
        ?>
        <p><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
      </article>
<?php endwhile; else : ?>
      <article>
        <p><?php __('Sorry, no posts were found!'); ?></p>
      </article>
<?php endif; ?>
  </section>
</main>
<?php get_footer(); ?>