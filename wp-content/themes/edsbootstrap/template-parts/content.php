<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package edsBootstrap
 */
$showPost = get_theme_mod('edsbootstrap_theme_options_postshow', 'excerpt');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
	<?php if ( has_post_thumbnail() ) :?>
    <!-- Post Image -->
    <div class="image">
    	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );  ?>
        <a href="<?php echo esc_url($image[0]);?>" class="image-popup">
            <div class="gallery-image">
                <?php the_post_thumbnail();?>
            </div>
        </a>
    </div>
    <!-- /Post Image -->
     <?php endif;?>
	
		<?php
		if ( is_single() ) :
			the_title( '<h2 class="entry-title">', '</h2>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
         <!-- Post Metadata -->
            <ul class="list-inline meta">
                <?php edsbootstrap_posted_on(); ?>
                <?php edsbootstrap_entry_footer(); ?>
            </ul>
           <!-- /Post Metadata -->
		<?php
		endif; ?>
	<!-- .entry-header -->

	<div class="entry-content content">
		<?php
		if( $showPost == 'excerpt'):
			the_excerpt();
		else:
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'edsbootstrap' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		endif;
		/* translators: Pages. */
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'edsbootstrap' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
    <?php if($showPost == 'excerpt'): ?>
    <!-- Read More Button -->
        <div>
             <a href="<?php echo esc_url( get_permalink()); ?>" class="btn btn-theme"><?php esc_html_e('Continue Reading', 'edsbootstrap'); ?> <i class="fa fa-fw fa-angle-double-right"></i></a>
        </div>
    <!-- /Read More Button -->
	<?php endif; ?>
</article><!-- #post-## -->
