<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/main.min.css" />
    <title><?php bloginfo('name'); ?></title>
</head>

<body>
<!--      NAVBAR      -->
<nav class="my-navbar">
    <a href="#" class="navbar-logo">
        <img src="<?php bloginfo('template_directory') ?>/img/Logo.svg" alt="Logo" />
    </a>
    <div class="navbar-links">
		<?php
		$args = array(
			'theme_location'=>'',
			'menu'=>'',
			'container' => 'ul',
			'container_class'=>'text-links',
			'container_id'=>'',
			'menu_class'=>'text-links',
			'menu_id'=>'',
			'echo'=>true,
			'fallback_cb'=>'wp_page_menu',
			'before'=>'',
			'after'=>'',
			'link_before'=>'',
			'link_after'=>'',
			'items_wrap'=>'<ul id = "%1$s" class="%2$s">%3$s</ul>',
			'depth'=>0,
			'walker'=>''
		);
		wp_nav_menu($args);

		?>
        <ul class="icon-links">
            <li>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </li>
            <li>
                <a href="#"><i class="fab fa-skype"></i></a>
            </li>
            <li>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </li>
        </ul>
    </div>
</nav>