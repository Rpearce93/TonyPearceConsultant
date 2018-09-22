<?php
/**
 * Template part for displaying page content in page-home.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package designamite
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="container">
    <header class="entry-header">

    </header><!-- .entry-header -->

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

  <?php get_template_part( 'template-parts/service-page-info'); ?>

</article><!-- #post-<?php the_ID(); ?> -->