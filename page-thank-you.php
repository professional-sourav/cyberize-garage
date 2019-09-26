<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cyberize
 */

get_header();
?>
	<style type="text/css">
		#general-page-header {
			width: 100vw;
			height: 200px;
			background-color: black;
			background-image: url('<?php the_field('general_page_header_image', 'option') ?>');
			background-size: cover;
			background-position: top center;
		}
	</style>

	<section id="general-page-header">
		<!-- <img class="img-fluid" src="/wp-content/uploads/2018/02/general-page-header-2400x300.jpg"> -->
	</section>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">

			<section class="error-404 not-found">
				<header class="page-header text-center">
					<h1 class="page-title"><?php esc_html_e( 'THANK YOU!', 'cyberize' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content text-center">

					<p><?php esc_html_e( 'Trust that your dream garage is on its way!', 'cyberize' ); ?></p>
					<p>Please check your email for further messages.</p>
					
					<div class="text-center mt-5">
						<img class="img-fluid" src="/wp-content/uploads/2019/06/thank-you-check-art.png">
					</div>

					<div class="social mt-5 col-md-2 col-sm-5 col-6 mx-auto">
						
						<?php echo do_shortcode( '[Sassy_Social_Share title=""]' );  ?>

					</div>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
