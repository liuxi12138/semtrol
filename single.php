<?php get_header();?>
<div class="main_width" id="single">
	<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
			<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php //the_content(); ?><?php all_img($post->post_content);?>
	<?php endif; ?>
</div>

<?php get_footer();?>