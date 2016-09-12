<?php
/**
 * The template for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty_Sixteen 1.0
 */

get_header(); ?>

<section class="single-page" >
		
	<div class="main-content single">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part('content', the_post_thumbnail(), get_post_format()); ?>
			<div class="back"><a href="<?php echo site_url('/blog/') ?>"><span>&larr;  Back to posts</span></a></div>
			<?php comments_template(); ?>
		<?php endwhile; ?>
	</div>
		
	<?php get_sidebar(); ?>
	
		<div class="back desktop"><a href="<?php echo site_url('/blog/') ?>"> <span>&larr;Back to posts</span></a></div>

</section>
<footer>
	<?php get_footer(); ?>
</footer>
