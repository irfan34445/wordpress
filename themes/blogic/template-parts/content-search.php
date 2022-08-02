<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blogic
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-item post-grid">
		<div class="post-item-image">
			<?php blogic_post_thumbnail(); ?>
		</div>
		<div class="post-item-content">
			<div class="entry-cat">
				<?php the_category( '', '', get_the_ID() ); ?>
			</div>
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<ul class="entry-meta">
					<li class="post-author"> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></li>
					<li class="post-date"> <span class="line"></span><?php echo esc_html( get_the_date() ); ?></li>
				</ul>
			<?php endif; ?>
			<div class="post-content">
				<?php the_excerpt(); ?>
			</div><!-- post-content -->
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
