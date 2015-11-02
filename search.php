<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
<div class="content-container">
		<div id="content" class="slide-in">
			<?php
				global $query_string;

				$query_args = explode("&", $query_string);
				$search_query = array();

				foreach($query_args as $key => $string) {
					$query_split = explode("=", $string);
					$search_query[$query_split[0]] = urldecode($query_split[1]);
				} // foreach

				$search = new WP_Query($search_query);
			?>

			<?php
				global $wp_query;
				$total_results = $wp_query->found_posts;
			?>
		</div>
	</div>
</div>
			<?php get_sidebar(); ?>
<?php get_footer(); ?>