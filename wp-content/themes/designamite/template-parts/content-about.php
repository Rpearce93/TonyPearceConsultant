<?php
/**
 * Template part for displaying page content in page-home.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package designamite
 */

?>

<div class="dad-photo-wrapper">
  <img src="<?php echo get_template_directory_uri();?>/images/color-banner.jpg">
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="wrapper">
    <?php get_template_part( 'template-parts/about'); ?>
  </div>

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