<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
	<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" size="15" placeholder="请输入关键词搜索">
	<input type="submit" id="searchsubmit" value="搜索">
</form>