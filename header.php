<!DOCTYPE html>
<html lang='ja'>
<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name'); wp_title(); ?></title>

	<meta name=viewport content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
	<div class="siteinfo">
	<div class="container">
		<h1>
			<a href="<?php echo home_url(); ?>">
				<?php bloginfo('name'); ?>
			</a>
		</h1>
		<p>
			<?php bloginfo('description'); ?>
		</p>
	</div>
	</div>
	<?php if( !is_front_page() ): ?>
		<?php if( get_header_image() ): ?>
		<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		<?php endif; ?>
	<?php endif; ?>
	<nav>
		<div class="container">
			<?php wp_nav_menu( 'theme_location=navigation' ); ?>
		</div>
	</nav>

</header>