<?php get_header();?>
<div class="main_width">
<?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?>
        <?php if(have_posts()) : ?>
            <?php while(have_posts()):the_post();?>
            	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            	<?php the_content();?>
        <?php endwhile;endif; ?>
</div>
<?php get_footer();?>