<?php get_header(); ?>
<div class="site-container">
		<?php include 'sidebar_ad.php'; ?>
		<div class="left-sidebar">
			<div class="id-card">
					<img class="id-card-image" src="wp-content/themes/bensandersdotmev4/images/id-card-image.jpg">
				<div class="id-card-content">
						<img src="wp-content/themes/bensandersdotmev4/images/me.png">
					<div class="site-info">
						<h2><a href="<?php bloginfo('url'); ?>">Ben Sanders</a></h2>
						<small><a href="https://twitter.com/thebensanders" target="_blank">@TheBenSanders</a></small>
					</div>
				</div>
				<!-- <ol>
					<a href="https://www.patreon.com/thebensanders" target="_blank" title="Ben's Patreon!">
						<li><img src="sleepypatreon.png"></li>
					</a>
				</ol> -->
			</div>
		</div>
		<div class="right-sidebar">
		<!-- Wordpress Post Loop Begins -->
		<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
				<div class="post">
					<div class="post-header">
						<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" alt="blog_post"><?php the_title(); ?></a>
					</div>
					<div class="post-content">
					<?php 
						if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						} 
					?>
						<p><?php the_content() ?></p>
					</div>
					<div class="post-footer">
						<a href="#">Comments(10)</a>
					</div>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
				<div class="navigation">  
					<div id="view-more-posts" class="alignleft"><h2><?php previous_posts_link('&laquo; Previous Entries') ?></h2>
					</div>  
					<div id="view-more-posts" class="alignright"><h2><?php next_posts_link('Next Entries &raquo;') ?></h2>
					</div>
				</div>
				
			</div>
		</div>
	</div>
			<?php get_sidebar(); ?>
<?php get_footer(); ?>