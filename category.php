<?php get_header();?>
<div class="page">
	<div class="row">
		<div class="col-md-3 col-sm-3">
			<div class="page_title"><?php the_category(); ?></div>
			<div class="page_lianxi">联系我们</div>
			<div class="page_lianxi_content">
				<ul>
					<li><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>山东塞米机电设计有限公司</li>
					<li><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>0533-2781869</li>
					<li><span class="glyphicon glyphicon-user" aria-hidden="true"></span>13864345076</li>
					<li><span class="glyphicon glyphicon-home"></span>地点：山东省淄博市XXX</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>邮编：255049</li>
				</ul>
			</div>
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