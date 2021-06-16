<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="smed">
    <a href="#"><img src="http://localhost/wordpress4/wp-content/uploads/2021/06/logo-facebookpng-32255.png" height="30px" width="30px"></a>
    <a href="#"><img src="http://localhost/wordpress4/wp-content/uploads/2021/06/twitter.png" height="30px" width="30px"></a>
    <a href="#"><img src="http://localhost/wordpress4/wp-content/uploads/2021/06/5ecec78673e4440004f09e77.png" height="30px" width="30px"></a>
    <a href="http://localhost/wordpress4/cart/"><img src="http://localhost/wordpress4/wp-content/uploads/2021/06/cart.jpg" height="30px" width="30px"></a>
</div>

<div class="navbar">
  <a href="http://localhost/wordpress4/home/"><img src="http://localhost/wordpress4/wp-content/uploads/2021/06/TFF-logo.jpg" width= "30px" height="30px"></a>
  <a href="http://localhost/wordpress4/home/">HOME</a>
  <a href="http://localhost/wordpress4/contact/">CONTACT</a>
  <a href="http://localhost/wordpress4/about/">ABOUT</a>
  <a href="http://localhost/wordpress4/shop/">SHOP</a>
</div>