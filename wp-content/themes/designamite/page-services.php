<?php
/**
 * Template name: Services
 * The template for displaying the services page
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package designamite
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <?php
      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'services' );

      endwhile; // End of the loop.
      ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
