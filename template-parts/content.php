<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Niche_Magic
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			if ( !is_single() && has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			the_post_thumbnail();
			};
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( is_single() && 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php niche_magic_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<?php
		if( is_single() ) {
			echo '<div class="entry-content">';
					the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'niche-magic' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'niche-magic' ),
						'after'  => '</div>',
					) );
			echo '</div><!-- .entry-content -->';
		} else 
			the_excerpt();
		
	?>

	<?php if(!is_single()){
		echo '<footer class="entry-footer">
						<span>By ';   
							echo $author = get_the_author();  
			echo '</span>
		</footer><!-- .entry-footer -->';
	}
	?>
</article><!-- #post-## -->
