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
<!-- 
    <div class="body-logo-wrapper">
      <a href="/"><img src="<?php echo get_template_directory_uri();?>/images/logo.png"></a>
    </div> -->

    <div class="entry-content">
      <?php
        the_content();
        wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'designamite' ),
          'after'  => '</div>',
        ) );
      ?>
    </div>

    <div class="about-content">
      <p>Tony Pearce is a very experienced dispute resolution solicitor. Tony is a full member of ACTAPS (the Association of Contentious Trust and Probate Specialists) and anaffiliate member of STEP (the Society of Trust and Estate Practitioners). He was formerly on the committee of the International Association of Maritime Security Professionals.</p>

      <p>He is now a member of the board of trustees of the diving diseases research and treatment charity DDRC Ltd which is a leading charity with an international reputation. Tony was a former Deputy District Judge and in 1994 qualified for admission as a solicitor and barrister in the High Court of New Zealand.</p>
    </div>

    <div class="hidden-block">
      <h3>About Tony</h3>
      <p>Having left school Tony attended an Armed Forces College. After service in Commando Forces he worked as a diver, an outward bound instructor and in sales for a “Blue Chip”​ company.</p>

      <p>Tony is a full member of the Association of Contentious Trust and Probate Specialists (www.actaps.com) and an affiliate member of the Society of Trust and Estate Practitioners (STEP). He was formerly on the Committee of the International Association of Maritime Security Professionals (IAMSP). He now serves on the Board of Trustees of the Diving Diseases Research Centre (DDRC Healthcare Ltd) a leading research and medical treatment charity.</p>

      <p>Tony and his wife share a passion for Italy, its food and people. An avid reader his studies cover a wide range of historical and current issues. A sports fan. Energetic, result orientated, and innovative. Tony has never lost his sense of adventure or willingness to work extremely hard in the interest of others.</p>

       
      <h3>Work History</h3>
      <p>Tony is a practical and very experienced dispute resolution Solicitor having worked in the legal profession for over 30 years.</p>

      <p>Tony has judicial experience as a Deputy District Judge (civil) on the South West Circuit. His private client practice usually involves him assist clients faced with complex disputes that are both factually and legally challenging. Tony’s approach to dispute resolution is both straightforward and simplistic – what is in the best interests of the client? He will advocate alternative dispute resolution where possible and feasible.</p>

      <p>Tony has recently presented a national webinar for a major provider of services to the legal profession and produces articles for leading legal training organisation. He has presented seminars to professional groups and organisations.</p>

      <p>In keeping with his desire to always improve and enhance his skills he qualified for admission as a solicitor and barrister in New Zealand and has studied Japanese language, customs and history.</p>
    </div>

    <a href="javascript:;" class="read-more">Read More</a>

  </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->

<?php get_template_part( 'template-parts/testimonials'); ?>
<?php get_template_part( 'template-parts/services'); ?>
<?php get_template_part( 'template-parts/contact'); ?>
