<?php get_header();?>
<div class="row">
	<div class="page">
			<div class="col-md-3 col-sm-3">
				<?php //if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();面包屑导航?>
				<p class="page_title"><?php the_title(); ?></p>
			</div>
			<div class="col-md-9 col-sm-9">
			<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
				
				<div class="page_content">
					<?php the_content(); ?>
					<?php comments_template(); ?>
				</div>
				<?php else : ?>
				<div class="page_content">
					没有找到你想要的页面！
				</div>
			<?php endif; ?>
			</div>
	</div>
</div>
<?php get_footer();?>