<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
    $enable_vc = get_post_meta(get_the_ID(), '_wpb_vc_js_status', true);
    if(!$enable_vc ) {
    ?>
    <header class="entry-header">
		<?php if (!is_front_page()) {the_title( '<h1 class="entry-title">', '</h1>' );}  ?>
	</header><!-- .entry-header -->
    <?php } ?>

	<!-- Carsoule Start-->
	<div id="carouselExampleIndicators" class="<?php  is_front_page() ? print('carousel slide')  : print('d-none')  ?>" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="ownit-overlay-left">
					<ul>
					<li>
						Provide comfortable homes to support influx of Talent into Silicon Valley		
					</li>
					<li>
						Incentivize Homeowners to optimize space & be financially independent
					</li>	
					<li>
						Promote Green ADU builders
					</li>
					<li>
						Support Community by providing affordable housing to distinguished teachers
					</li>
	
					</ul>
				</div>
				<img class="d-block w-100" src="http://datapakt.com/wp-content/uploads/2019/01/01.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
			<div class="ownit-overlay-right"></div>
			<img class="d-block w-100" src="http://datapakt.com/wp-content/uploads/2019/01/02.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
			<div class="ownit-overlay-left"></div>
			<img class="d-block w-100" src="http://datapakt.com/wp-content/uploads/2019/01/03.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
			<div class="ownit-overlay-left"></div>
			<img class="d-block w-100" src="http://datapakt.com/wp-content/uploads/2019/01/04.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
			<div class="ownit-overlay-right"></div>
			<img class="d-block w-100" src="http://datapakt.com/wp-content/uploads/2019/01/05.jpg" alt="Third slide">
			</div>
			<div class="carousel-item">
			<div class="ownit-overlay-left"></div>
			<img class="d-block w-100" src="http://datapakt.com/wp-content/uploads/2019/01/06.jpg" alt="Third slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a> 
	</div>
	<!-- Carsoule End -->

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() && !$enable_vc ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'wp-bootstrap-starter' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
