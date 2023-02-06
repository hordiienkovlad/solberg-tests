<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
  <aside id="primary-sidebar category-list" class="primary-sidebar widget-area" role="complementary">
    <ul>
        <?php
            $categories = get_categories( array(
                'orderby' => 'name',
                'order'   => 'ASC'
            ) );
            foreach( $categories as $category ) {
                echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a></li>';
            }
        ?>
    </ul>
  </aside>
<?php endif; ?>