<html class="no-js">

<head>
<?php wp_head(); ?> 
	<meta charset="utf-8">
	<title>Hotel Bijou</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- CSS -->
	<link rel="icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-bijou.png" style="width: 30px; height: 30px;">
	<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/global.css'>
	<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/content/resort/css/structure.css'>
	<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/content/resort/css/resort.css'>
	<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/content/resort/css/custom.css'>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slider.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/resort.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/structure.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css">
</head>

<div class="btn-whatsapp">
	<a href="https://api.whatsapp.com/send?phone=584146643524" target="_blank">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/what.svg" alt="">
	</a>
</div>

<body class="color-custom style-simple button-stroke layout-full-width if-zoom if-border-hide header-classic header-fw minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-right menuo-no-borders mobile-tb-hide mobile-side-slide mobile-mini-mr-ll mobile-header-mini tr-header tr-menu be-reg-2088">
	<div id="Wrapper">
		<div id="Header_wrapper">
<?php if (is_home()) :?> 
			<header class="header__main navbar-me container-fluid">
				<div class="logo">
						<a href="<?php bloginfo('url') ?>">
						<div class="logos">
						<img alt="Bijou" class="img-navbar"  src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-bijou.svg">
            <img alt="Bijou" class="none-a" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-bijou.svg" >
					</div>
				</a>
				</div>
				<button class="responsive-menu-btn">
					<svg class="open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
						<path d="M14.000002 15.99999c-3.3137 0-6 2.68619-6 6 0 3.31359 2.6863 6 6 6h71.999996c3.3137 0 6-2.68641 6-6 0-3.31381-2.6863-6-6-6zm0 28.00003c-3.3137 0-6 2.6862-6 6 0 3.3136 2.6863 6 6 6h71.999996c3.3137 0 6-2.6864 6-6 0-3.3138-2.6863-6-6-6zm0 28c-3.3137 0-6 2.6862-6 6 0 3.3136 2.6863 6 6 6h71.999996c3.3137 0 6-2.6864 6-6 0-3.3138-2.6863-6-6-6z"
						 style="text-indent:0;text-transform:none;block-progression:tb" overflow="visible" color="#000" />
					</svg>

					<svg class="close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20">
						<path d="M14.7 1.3c-.4-.4-1-.4-1.4 0L8 6.6 2.7 1.3c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4L6.6 8l-5.3 5.3c-.4.4-.4 1 0 1.4.2.2.4.3.7.3s.5-.1.7-.3L8 9.4l5.3 5.3c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4L9.4 8l5.3-5.3c.4-.4.4-1 0-1.4z"
						/>
					</svg>
				</button>
				<nav class="nav__menu">
					<div class="nav-item">

						<a href="#habitaciones">Habitaciones</a>

					</div>
					<div class="nav-item">
						<a href="#services">Servicios</a>
					</div>
					<div class="nav-item">
						<a href="#gallery">Galería</a>
					</div>
					<div class="nav-item">
						<a href="#salones">Salones</a>
					</div>
					<div class="nav-item">
						<a href="#eventos">Eventos</a>
					</div>
					<div class="nav-item">
						<a href="#footer">Contáctos</a>
					</div>
					<div class="nav-item">
						<div class="cont-minicarro">
							<span id="items-minicarro"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
						</div>
							<?php if( is_cart() && WC()->cart->cart_contents_count == 0){ $url_carro = get_permalink(wc_get_page_id('shop')); }else{ $url_carro = get_permalink(wc_get_page_id('cart')); } ?>
								<a href="<?php echo $url_carro; ?>" title="">
									<i class="fa fa-shopping-bag" aria-hidden="true"></i>
								</a>
					</div>
			
					<div class="nav-item">
						<a type="button" class="btn-general "data-toggle="modal" data-target="#exampleModal" href="#openModal">Reservar</a>
					</div>
				</nav>
			</header>
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Reserva</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<section class="booking-section">
											<div class=" booking animated fadeIn" style="visibility: visible; animation-delay: 1.5s; animation-name: fadeIn;">
												<div class=" container">
													<?php echo do_shortcode ('[hotel_booking]'); ?>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
						</div>
</div>
				<?php else: ?>
							<header class="header__main fixed-me back container-fluid">
				<div class="logo">
						<a href="<?php bloginfo('url') ?>">
						<div class="logos log">
						<img alt="Bijou" class="img-navbar"  src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-bijou.svg">
            <img alt="Bijou" class="none-a" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-bijou.svg" >
					</div>
				</a>
				</div>
				<button class="responsive-menu-btn">
					<svg class="open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
						<path d="M14.000002 15.99999c-3.3137 0-6 2.68619-6 6 0 3.31359 2.6863 6 6 6h71.999996c3.3137 0 6-2.68641 6-6 0-3.31381-2.6863-6-6-6zm0 28.00003c-3.3137 0-6 2.6862-6 6 0 3.3136 2.6863 6 6 6h71.999996c3.3137 0 6-2.6864 6-6 0-3.3138-2.6863-6-6-6zm0 28c-3.3137 0-6 2.6862-6 6 0 3.3136 2.6863 6 6 6h71.999996c3.3137 0 6-2.6864 6-6 0-3.3138-2.6863-6-6-6z"
						 style="text-indent:0;text-transform:none;block-progression:tb" overflow="visible" color="#000" />
					</svg>

					<svg class="close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20">
						<path d="M14.7 1.3c-.4-.4-1-.4-1.4 0L8 6.6 2.7 1.3c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4L6.6 8l-5.3 5.3c-.4.4-.4 1 0 1.4.2.2.4.3.7.3s.5-.1.7-.3L8 9.4l5.3 5.3c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4L9.4 8l5.3-5.3c.4-.4.4-1 0-1.4z"
						/>
					</svg>
				</button>
				<nav class="nav__menu">
					<div class="nav-item">

						<a href="<?php bloginfo('url') ?>#habitaciones">Habitaciones</a>

					</div>
					<div class="nav-item">
						<a href="<?php bloginfo('url') ?>#services">Servicios</a>
					</div>
					<div class="nav-item">
						<a href="<?php bloginfo('url') ?>#gallery">Galería</a>
					</div>
					<div class="nav-item">
						<a href="<?php bloginfo('url') ?>#salones">Salones</a>
					</div>
					<div class="nav-item">
						<a href="<?php bloginfo('url') ?>#eventos">Eventos</a>
					</div>
					<div class="nav-item">
						<a href="<?php bloginfo('url') ?>#footer">Contáctos</a>
					</div>
					<div class="nav-item">
						<div class="cont-minicarro">
							<span id="items-minicarro"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
						</div>
							<?php if( is_cart() && WC()->cart->cart_contents_count == 0){ $url_carro = get_permalink(wc_get_page_id('shop')); }else{ $url_carro = get_permalink(wc_get_page_id('cart')); } ?>
								<a href="<?php echo $url_carro; ?>" title="">
									<i class="fa fa-shopping-bag" aria-hidden="true"></i>
								</a>
					</div>
			
					<div class="nav-item">
						<a type="button" class="btn-general "data-toggle="modal" data-target="#exampleModal" href="#openModal">Reservar</a>
					</div>
				</nav>
			</header>
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Reserva</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<section class="booking-section">
											<div class=" booking animated fadeIn" style="visibility: visible; animation-delay: 1.5s; animation-name: fadeIn;">
												<div class=" container">
													<?php echo do_shortcode ('[hotel_booking]'); ?>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
						</div>
				</div>
				<?php endif; ?>

