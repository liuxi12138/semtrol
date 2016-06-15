<div class="right">
				<div class="sidebar shadow">
					<div class="right_title">
						<p><span class="glyphicon glyphicon-exclamation-sign"></span>最新动态</p>
					</div>
			        <ul>
			            <?php
			                $posts = get_posts('numberposts=6&orderby=post_date');
			                foreach($posts as $post) {
			                    setup_postdata($post);
			                    echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
			                }
			                $post = $posts[0];
			            ?>
			        </ul>
				</div>
		<div class="sidebar shadow">
		    <?php if ( !function_exists('dynamic_sidebar') 
		                        || !dynamic_sidebar('First_sidebar') ) : ?>
		    <div class="right_title">
		        <p>分类目录</p>
		    </div>
		        <ul>
		            <?php wp_list_categories('depth=1&title_li=&orderby=id&show_count=0&hide_empty=1&child_of=0'); ?>
		        </ul>
		    <?php endif; ?>
		</div>
		<div class="sidebar shadow">
		    <?php if ( !function_exists('dynamic_sidebar') 
		                            || !dynamic_sidebar('Third_sidebar') ) : ?> 
			    <div class="right_title">
			        <p>标签云</p>
			    </div>
		        <p><?php wp_tag_cloud('smallest=8&largest=22'); ?></p>
		    <?php endif; ?>
		        
		    <?php if ( !function_exists('dynamic_sidebar') 
		                        || !dynamic_sidebar('Fourth_sidebar') ) : ?>
		</div>
		<div class="sidebar shadow">                    
			    <div class="right_title">
			        <p>文章存档</p>
			    </div>
		        <ul>
		            <?php wp_get_archives('limit=10'); ?>
		        </ul>
		    <?php endif; ?>
		</div>
</div>