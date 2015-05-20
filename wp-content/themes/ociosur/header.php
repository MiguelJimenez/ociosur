<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
	
	<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />

	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="<?php bloginfo('template_url')?>/js/jquery.slides.min.js"></script>
	<script src="<?php bloginfo('template_url')?>/js/arriba.js"></script>

<script>
    $(function(){
      $("#slideshow").slidesjs({
        height: 300,
        navigation:false
      });
    });
  </script>
  <?php wp_head();?>
</head>
<body>
	<span class="ir-arriba icon-chevron-up"></span>
	<header>
		<div id="logo"><p>OcioSur</p><span>Visita Andalucía</span></div>
		<nav>
			<?php wp_nav_menu(
			 array(
			 'container' => false,
			 'items_wrap' => '<ul id="menu-top">%3$s</ul>',
			 'theme_location' => 'menu'
			 )); ?>
		</nav>
	</header>

	 