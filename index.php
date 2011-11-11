<?php get_header(); ?>
<div id="headline" class="leftcontent roundall" >
	<?php 
	$my_id = 241;
	$headline = get_post($my_id);
	?>
	<div class="post roundtop" >
		<?php echo get_the_post_thumbnail($headline->ID, 'large'); ?>
		<div class="title" ><h2 class="headline" ><a href="<?php the_permalink() ?>" class="white" rel="bookmark" title="<?php echo $headline->post_title; ?>" ><?php echo $headline->post_title; ?></a></h2></div>
		<div class="excerpt" ><?php echo $headline->post_excerpt; ?></div>
	</div>
	<div class="meta roundbot" >
		<ul>
			<li class="alignleft" ><img src="<?php echo bloginfo('template_url'); ?>/images/icons/date.gif" style="margin-right:5px" class="alignleft"/><?php echo mysql2date('j F Y', $headline->post_date);?></li>
			<li class="alignleft" ><img src="<?php echo bloginfo('template_url'); ?>/images/icons/author.gif" style="margin-right:5px" class="alignleft"/> posted by <a href="<?php echo get_option('home'); ?>/author/<?php the_author_meta('user_nicename', $headline->post_author); ?>" class="green" ><?php the_author_meta( 'display_name', $headline->post_author ); ?></a></li>
			<li class="alignleft" style="border:none" ><img src="<?php echo bloginfo('template_url'); ?>/images/icons/comments.png" style="margin-right:5px" class="alignleft"/>
				<?php 
					$cc = $headline->comment_count;
					if ($cc == 0) echo 'no responses';
					else if ($cc == 1) echo '1 responses';
					else if ($cc > 1) echo $cc.' responses';
				?>
			</li>
		</ul>
	</div>
</div>
<div id="featured" class="roundall" >
	<div class="top featured roundtop" ><h2 class="toptitle featured" >Featured Posts</h2><span style="margin-left:80px" >Selected Few</span></div>
	<div class="content" >
	<?php 
	$args = array( 'numberposts' => 5, 'category' => 14 );
	$cat_posts = get_posts($args);
	$decrz = 5;
	$incrz = 1;
	?>
		<ul>
			<?php foreach($cat_posts as $post) : setup_postdata($post); ?>
			<li id="feature_<?php echo $incrz; ?>" class="slidingcontent" style="z-index:<?php echo $decrz; ?>" >
				<a href="<?php the_permalink() ?>" class="orange" rel="bookmark" title="<?php the_title(); ?>" >
				<?php echo get_the_post_thumbnail($page->ID, 'medium' ); ?>
				<h2 class="posttitle" ><?php the_title(); ?></h2>
				<span><?php the_time('j F Y') ?> | <?php comments_number( 'no responses', '1 response', '% responses' ); ?></span>
				</a>
			</li>
			<?php 
			$decrz--;
			$incrz++;
			endforeach; ?>
		</ul>
	</div>
	
</div>

<div id="categories" >
	<div id="cat1" class="alignleft roundall" >
		<div class="top cats cat1 roundtop" ><h2 class="toptitle cats" ><a href="<?php echo esc_url( home_url() ); ?>/stories" class="grey" rel="bookmark" title="Story List">Stories</a></h2></div>
		<div class="content" >
		<?php 
		$args = array( 'numberposts' => 3, 'post_type' => 'stories');
		$cat_posts = get_posts($args);
		$decrz = 3;
		$incrz = 1;
		?>
			<ul>
				<?php foreach($cat_posts as $post) : setup_postdata($post); ?>
				<li id="stories_<?php echo $incrz; ?>" class="slidingcontent" style="z-index:<?php echo $decrz; ?>" >
					<a href="<?php the_permalink() ?>" class="orange" rel="bookmark" title="<?php the_title(); ?>" >
					<?php echo get_the_post_thumbnail($page->ID, 'medium' ); ?>
					<h2 class="posttitle" ><?php the_title(); ?></h2>
					<span><?php the_time('j F Y') ?> | <?php comments_number( 'no responses', '1 response', '% responses' ); ?></span>
					</a>
				</li>
				<?php 
				$decrz--;
				$incrz++;
				endforeach; ?>
			</ul>
		</div>
	</div>
	<div id="cat2" class="alignleft roundall" >
		<div class="top cats cat2 roundtop" ><h2 class="toptitle cats" ><a href="<?php echo esc_url( home_url() ); ?>/images" class="grey" rel="bookmark" title="Image Board">Images</a></h2></div>
		<div class="content" >
		<?php 
		$args = array( 'numberposts' => 3, 'post_type' => 'images');
		$cat_posts = get_posts($args);
		$decrz = 3;
		$incrz = 1;
		?>
			<ul>
				<?php foreach($cat_posts as $post) : setup_postdata($post); ?>
				<li id="images_<?php echo $incrz; ?>" class="slidingcontent" style="z-index:<?php echo $decrz; ?>" >
					<a href="<?php the_permalink() ?>" class="orange" rel="bookmark" title="<?php the_title(); ?>" >
					<?php echo get_the_post_thumbnail($page->ID, 'medium' ); ?>
					<h2 class="posttitle" ><?php the_title(); ?></h2>
					<span><?php the_time('j F Y') ?> | <?php comments_number( 'no responses', '1 response', '% responses' ); ?></span>
					</a>
				</li>
				<?php 
				$decrz--;
				$incrz++;
				endforeach; ?>
			</ul>
		</div>
	</div>
	<div id="cat3" class="alignleft roundall" >
		<div class="top cats cat3 roundtop" ><h2 class="toptitle cats" ><a href="<?php echo esc_url( home_url() ); ?>/themes" class="grey" rel="bookmark" title="Themes List">Themes</a></h2></div>
		<div class="content" >
		<?php 
		$category_id = get_cat_ID( 'Themes' );
		$args = array( 'numberposts' => 3, 'category' => $category_id);
		$cat_posts = get_posts($args);
		$decrz = 3;
		$incrz = 1;
		?>
			<ul>
				<?php foreach($cat_posts as $post) : setup_postdata($post); ?>
				<li id="themes_<?php echo $incrz; ?>" class="slidingcontent" style="z-index:<?php echo $decrz; ?>" >
					<a href="<?php the_permalink() ?>" class="orange" rel="bookmark" title="<?php the_title(); ?>" >
					<?php echo get_the_post_thumbnail($page->ID, 'medium' ); ?>
					<h2 class="posttitle" ><?php the_title(); ?></h2>
					<span><?php the_time('j F Y') ?> | <?php comments_number( 'no responses', '1 response', '% responses' ); ?></span>
					</a>
				</li>
				<?php 
				$decrz--;
				$incrz++;
				endforeach; ?>
			</ul>
		</div>
	</div>
	<div id="cat4" class="alignright roundall" >
		<?php 
		$category_id = get_cat_ID( 'Musics' );
		$category_link = get_category_link( $category_id );
		?>
		<div class="top cats cat4 roundtop" ><h2 class="toptitle cats" ><a href="<?php echo esc_url( home_url() ); ?>/musics" class="grey" rel="bookmark" title="Music Track">Musics</a></h2></div>
		<div class="content" >
		<?php 
		$category_id = get_cat_ID( 'Musics' );
		$args = array( 'numberposts' => 3, 'category' => $category_id);
		$cat_posts = get_posts($args);
		$decrz = 3;
		$incrz = 1;
		?>
			<ul>
				<?php foreach($cat_posts as $post) : setup_postdata($post); ?>
				<li id="musics_<?php echo $incrz; ?>" class="slidingcontent" style="z-index:<?php echo $decrz; ?>" >
					<a href="<?php the_permalink() ?>" class="orange" rel="bookmark" title="<?php the_title(); ?>" >
					<?php echo get_the_post_thumbnail($page->ID, 'medium' ); ?>
					<h2 class="posttitle" ><?php the_title(); ?></h2>
					<span><?php the_time('j F Y') ?> | <?php comments_number( 'no responses', '1 response', '% responses' ); ?></span>
					</a>
				</li>
				<?php 
				$decrz--;
				$incrz++;
				endforeach; ?>
			</ul>
		</div>
	</div>
</div>

<div id="news" class="leftcontent roundall" >
	<div class="top news roundtop" ><h2 class="toptitle news" >News</h2></div>
</div>
<?php get_footer(); ?>