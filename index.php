<?php
if($_GET['tpl']=="die")
	die($template);
?>
<?php get_header();?>
		<div class="row">
			<div style="width:1100px;">
				<div class="shadow">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					    <div class="item active">
					    	<img src="<?php echo bloginfo(template_url);?>/images/carousal.jpg" alt="...">
							<div class="carousel-caption">
								<!--这里书写图片的配文，会居中的-->
							</div>
					    </div>
					    <div class="item">
					    	<img src="<?php echo bloginfo(template_url);?>/images/carousal.jpg" alt="...">
							<div class="carousel-caption">
								<!--这里书写图片的配文，会居中的-->
							</div>
					    </div>
					    <div class="item">
					    	<img src="<?php echo bloginfo(template_url);?>/images/carousal.jpg" alt="...">
							<div class="carousel-caption">
								<!--这里书写图片的配文，会居中的-->
							</div>
					    </div>
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="main_width">
				<div class="left shadow">
					<div class="left_title">
						<p>产品展示</p>
					</div>
					<div style="width:100%;height:auto;">

		                <?php if(have_posts()) : ?>
		                    <?php while(have_posts()):the_post();?>
		                    	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		                    	<?php the_content();?>
		                <?php endwhile;endif; ?>
					</div>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
<?php get_footer();?>