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
						<?php
							$i=1;
							while(have_posts()):the_post();
						?>
							<?php
							if ($i==1)
							{
								if (has_post_thumbnail()){ ?>
							    <div class="item active">
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
										<?php the_post_thumbnail(array(1100,267,false)); $i++;?>
									</a>
									<div class="carousel-caption">
										<!--这里书写图片的配文，会居中的-->
									</div>
							    </div>
							<?php }?>
						<?php
							}elseif ($i>1&&$i<=3){
						?>
							<?php
								if (has_post_thumbnail()){ ?>
							    <div class="item">
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
										<?php the_post_thumbnail(array(1100,267,false)); $i++;?>
									</a>
									<div class="carousel-caption">
										<!--这里书写图片的配文，会居中的-->
									</div>
							    </div>
							<?php }?>
						<?php }else { break; }
						endwhile;?>
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
					</div>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
		<div class="row">
			<!--下面是向左滚动代码-->
			<div id="colee_left" style="overflow:hidden;width:1100px;" class="shadow">
				<table cellpadding="0" cellspacing="0" border="0">
					<tr><td id="colee_left1" valign="top" align="center">
						<table cellpadding="2" cellspacing="0" border="0">
							<tr align="center">
							<?php
							    $post_id = 75; // 文章ID，可以在WP后台找到
							    $soContent=get_post($post_id)->post_content;
							    all_img($soContent);
							?>
							</tr>
						</table>
					</td>
					<td id="colee_left2" valign="top"></td>
					</tr>
				</table>
			</div>
			<script>
				//使用div时，请保证colee_left2与colee_left1是在同一行上.
				var speed=30//速度数值越大速度越慢
				var colee_left2=document.getElementById("colee_left2");
				var colee_left1=document.getElementById("colee_left1");
				var colee_left=document.getElementById("colee_left");
				colee_left2.innerHTML=colee_left1.innerHTML
				function Marquee3(){
				if(colee_left2.offsetWidth-colee_left.scrollLeft<=0)//offsetWidth 是对象的可见宽度
				colee_left.scrollLeft-=colee_left1.offsetWidth//scrollWidth 是对象的实际内容的宽，不包边线宽度
				else{
				colee_left.scrollLeft++
				}
				}
				var MyMar3=setInterval(Marquee3,speed)
				colee_left.onmouseover=function() {clearInterval(MyMar3)}
				colee_left.onmouseout=function() {MyMar3=setInterval(Marquee3,speed)}
			</script>
			<!--向左滚动代码结束-->
		</div>
<?php get_footer();?>