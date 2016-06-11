<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title><?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title();
    } elseif (is_search() ) {
        echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo '页面未找到!';
    } else {
        wp_title('',true);
    } ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
	<script type="text/javascript" src="<?php echo bloginfo(template_url);?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo bloginfo(template_url);?>/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo(template_url);?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo(template_url);?>/style.css">
	<?php wp_head();?>
</head>
<body>
		<div class="row top">
			<div class="main_width">
				<div class="col-sm-6">
					<div style="width:376px;height:105px;">
						<img width="376" height="105" src="<?php echo bloginfo(template_url);?>/images/logo.jpg" alt="">
					</div>
				</div>
				<div class="col-sm-6">
					<?php include(TEMPLATEPATH.'/searchform.php');?>
				</div>
			</div>
		</div>
		<div class="row nav_style">
			<?php wp_nav_menu( array( 'menu' => 'mymenu', 'depth' => 1) );?>
		</div>