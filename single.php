<?php get_header(); ?>
<?php if(has_post_thumbnail() ) { the_post_thumbnail('full'); } ?>
<div class="post-header-image">
	<h2><?php the_title(); ?></h2>
</div>
<div class="site-container">
		<div class="left-sidebar">
			<div class="id-card">
					<img class="id-card-image" src="/wp-content/themes/bensandersdotmev4/images/id-card-image.jpg">
				<div class="id-card-content">
						<img src="/wp-content/themes/bensandersdotmev4/images/me.png">
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
		<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
			<div class="post">
				<div class="post-header">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>" alt="blog_post"><?php the_title(); ?></a>
				</div>
				<div class="post-content">
				
					<p><?php the_content() ?></p>
				</div>
				<small><?php the_time('F jS, Y') ?> by <?php the_author() ?> </small>
			</div>
			<?php endwhile; ?>

			<?php endif; ?>
				<div class="disqus-comments">
					<?php comments_template(); ?>
				</div>
			</div>
		</div>
			
<?php get_footer(); ?>