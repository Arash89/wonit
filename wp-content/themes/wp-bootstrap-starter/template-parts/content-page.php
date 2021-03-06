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
	<div id="carouselExampleIndicators" class="<?php  is_front_page() ? print('carousel slide')  : print('d-none')  ?>" data-interval="0" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
		</ol>
		<div class="carousel-inner ownit-carousel">
			<div class="carousel-item active ownit-Mortgage">
				<!-- Row start -->
				<div class="row benefit-cards">

					<div class="card">
						<!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
						<div class="card-body">
							<p class="card-text">No Extra Payments <span class="invisible">With Extra Payments​</span></p>
							<p class="card-text">$5,066.85 ​Monthly P&I Payment</p>
							<p> $5,066.85 including other</p>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">30 years ​pay-off time</li>
						</ul>
						<div class="card-body">
							<p class="card-text">$824,067.12</p>
							<p class="card-text">Interest Paid</p>
							<p class="card-text">7 years 8 months</p>
							<p class="card-text">Time Saved Making Extra Payments</p>
						</div>
					</div>

					<div class="card">
						<!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
						<div class="card-body">
							<p class="card-text">$1,000/month​ With Extra Payments​</p>
							<p class="card-text">$6.066.85​ Equivalent Monthly P&I Payment​</p>
							<p>$6.066.85 including other expenses​</p>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">22 years 4 months​ Pay-off time​</li>
						</ul>
						<div class="card-body">
							<p class="card-text">$824,067.12</p>
							<p class="card-text">Interest Paid</p>
							<p class="card-text">$226,528.53​</p>
							<p class="card-text">Total Intrest Savings with extra Payments​</p>
						</div>
					</div>

					<div class="card">
						<!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
						<div class="card-body">
							<p class="card-text">$2,000/month​ With Extra Payments​</p>
							<p class="card-text">$7.066.85​ Equivalent Monthly P&I Payment​</p>
							<p>$7.066.85 including other expenses​</p>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">18 years 1 months​ Pay-off time​</li>
						</ul>
						<div class="card-body">
							<p class="card-text">$824,067.12</p>
							<p class="card-text">Interest Paid</p>
							<p class="card-text">$343,530.31​</p>
							<p class="card-text">Total Intrest Savings with extra Payments​</p>
						</div>
					</div>

				</div>
				<!-- Row End -->
				<!-- <img class="d-block w-100" src="http://datapakt.com/wp-content/uploads/2019/01/07.jpg" alt="First slide"> -->
			</div>
			<div class="carousel-item">
			<div class="ownit-overlay-right">
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

			<img class="d-block w-100" src="http://datapakt.com/wp-content/uploads/2019/01/02.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
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
