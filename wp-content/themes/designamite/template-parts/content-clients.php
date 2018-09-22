<?php
/**
 * Template part for displaying page content in page-clients.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package designamite
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php get_template_part( 'template-parts/googlemap'); ?>

  <div class="container">

    <div class="entry-content">
      <?php
        the_content();
        wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'designamite' ),
          'after'  => '</div>',
        ) );
      ?>
    </div>
  </div><!-- .entry-content -->



</article><!-- #post-<?php the_ID(); ?> -->

