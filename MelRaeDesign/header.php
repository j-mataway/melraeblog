<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <?php
        wp_head()
        ?>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<?php 
                        if(function_exists('the_custom_logo')){
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id);
                        }
                        ?>
                      <img class = 'rounded'src="https://melraemakers.com/wp-content/uploads/2022/05/cropped-3-1.png" alt="logo">  



						<p>Welcome to MelRae Makers</p>
						<ul class="actions">
							<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="https://melraemakers.com/" class="logo">MelRae Makers</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
                    <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' =>   '<ul id="" class="links">%3$s</ul>'                  
                        )
                    )
                    ?>		
			
						<ul class="icons">
							<li><a href="https://www.facebook.com/MelRaeMakers/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/melraemakers/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="https://vm.tiktok.com/ZTds6hgdn/" class="icon brands fa-tiktok"><span class="label">Tiktok</span></a></li>
							<li><a href="https://melrae-design.myshopify.com/" class="icon brands fa-shopify"><span class="label">Shopify</span></a></li>
						</ul>
					</nav>

                  