<?php get_header();?>
<div class="page">
	<div class="row">
		<div class="col-md-3 col-sm-3">
			<div class="page_title"><?php the_category(); ?></div>
		</div>
		<div class="col-md-9 col-sm-9">
			<div class="mianbaoxie">
				<?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();//面包屑导航?>
			</div>
			<div class="page_content">
		        <?php if(have_posts()) : ?>
		            <?php while(have_posts()):the_post();?>
		            	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		            	<?php the_content();?>
		        <?php endwhile;endif; ?>
	        </div>
	    </div>
    </div>
</div>
<?php get_footer();?>