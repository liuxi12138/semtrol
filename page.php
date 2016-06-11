<?php get_header();?>
<div class="row">
	<div class="page">
			<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
				<h2 class="grid"><?php the_title(); ?></h2>
				<div class="grid">
					<?php the_content(); ?>
					<?php comments_template(); ?>
				</div>
				<?php else : ?>
				<div class="grid">
					没有找到你想要的页面！
				</div>
			<?php endif; ?>
	</div>
</div>
<?php get_footer();?>