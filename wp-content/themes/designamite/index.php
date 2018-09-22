<?php
/**
 * The main template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package designamite
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="wrapper">
				<div class="grid">
					<div class="grid__col grid__col--2-of-3">
						<?php
						if ( have_posts() ) :

							if ( is_home() && ! is_front_page() ) : ?>

							<?php
							endif;

							/* Start the Loop */
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content' );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; ?>
					</div>

					<div class="grid__col grid__col--1-of-3"></div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
