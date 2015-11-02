<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?> <?php wp_title('-'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
	<div class="top-bar">
		<div class="top-bar-inner">
			<div class="navbar">
					<li><a href="<?php echo get_settings('home'); ?>">Home</a></li>
					<li><?php wp_list_pages('sort_column=menu_order&title_li='); ?></li>
				</ul>
			</div>
			<div class="search-field">
				<input type="search"><button>Search</button>
			</div>
		</div>
	</div>