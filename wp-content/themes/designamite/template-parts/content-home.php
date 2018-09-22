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

    <div class="body-logo-wrapper">
      <a href="/"><img src="<?php echo get_template_directory_uri();?>/images/logo.png"></a>
    </div>

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

<?php get_template_part( 'template-parts/testimonials'); ?>
<?php get_template_part( 'template-parts/services'); ?>
