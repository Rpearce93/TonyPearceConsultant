<?php
/**
 * Template name: Contact
 * The template for displaying the contact page
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package designamite
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <?php
      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'contact' );

      endwhile; // End of the loop.
      ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
