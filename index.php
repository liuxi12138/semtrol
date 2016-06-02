<?php
if($_GET['tpl']=="die")
	die($template);
?>
<?php get_header();?>
		<div class="row top">
			<div class="main_width">
				<div class="col-sm-6">
					<div style="width:376px;height:105px;">
						<img src="<?php echo bloginfo(template_url);?>/images/logo.jpg" alt="">
					</div>
				</div>
				<div class="col-sm-6">
					<input type="text" placeholder="请输入关键词搜索">
					<input type="submit" value="搜索">
				</div>
			</div>
		</div>
		<div class="row nav_style">
			<ul class="text-center">
				<li><a href="">首页</a></li>
				<li><a href="">公司简介</a></li>
				<li><a href="">产品中心</a></li>
				<li><a href="">应用</a></li>
				<li><a href="">资料下载</a></li>
				<li><a href="">关于我们</a></li>
			</ul>
			
                <?php if(have_posts()) : ?>
                    <?php if ( is_home() && ! is_front_page() ) : ?>
                    <!-- code -->
                <?php endif;endif; ?>
		</div>
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
				</div>
				<div class="right shadow">
					<div class="right_title">
						<p><span class="glyphicon glyphicon-exclamation-sign"></span>最新动态</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row phone_number text-center">
			<div class="main_width">
				<div class="col-md-6"><span class="glyphicon glyphicon-earphone"></span>0533-2781869</div>
				<div class="col-md-6"><span class="glyphicon glyphicon-earphone"></span>13864345076</div>
			</div>
		</div>
<?php get_footer();?>