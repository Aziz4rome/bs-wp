<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php the_title(); ?></title>
	<link rel="pingback" media="all" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php get_template_directory_url(); ?>/css/style.css">
	<script type="text/javascript" src="<?php get_template_directory_url(); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php get_template_directory_url(); ?>/js/custom.js"></script>
	<?php wp_head(); ?>
</head>
<body>
<section class="b-header">
	<header class="header">
		<div class="logo-wrap">
			<a href="<?php echo home_url(); ?>" class="logo"><?php the_title(); ?><span class="rlogo">.</span></a>
		</div>
		<div class="header-menu-wrap">
			<nav class="menu">
				<ul class="menu-list">
					<li><a href="#">home</a></li>
					<li><a href="#">blog</a></li>
					<li><a href="#">about</a></li>
					<li><a href="#" class="current-page-link">contacts</a></li>
					<span class="current-page"></span>
				</ul>
			</nav>
			<ul class="menu-social-list">
				<li><a href="#" class="vk"><a href="#" class="vk vk-hover"></a></li>
				<li><a href="#" class="fb"><a href="#" class="fb fb-hover"></a></li>
				<li><a href="#" class="tw"><a href="#" class="tw tw-hover"></a></li>
				<li><a href="#" class="g"><a href="#" class="g g-hover"></a></li>
				<li><a href="#" class="search"><a href="#" class="search search-hover"></a></li>
			</ul>
			<div class="search-form-wrap">
			<?php get_search_form(); ?>				
			</div>
		</div>
	</header>
</section>