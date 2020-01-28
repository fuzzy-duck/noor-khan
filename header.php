<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(''); ?></title>
    <!-- jQuery 3.4.1 -->
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(). '/vendor/jquery.3.4.1.min.js'?>"></script>
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
    <!-- Owl CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/vendor/owl.carousel.min.css' ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/vendor/owl.theme.default.min.css' ?>">
    <!-- Chart.js -->
    <script src="<?php echo get_stylesheet_directory_uri(). '/vendor/chart.min.js' ?>"></script>
    <script src="<?php echo get_stylesheet_directory_uri(). '/vendor/chartjs-plugin-labels.min.js' ?>"></script>
    <!-- Nav.js -->
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(). '/js/nav.js' ?>"></script>
    <!-- Morse Game.js -->
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(). '/js/morse-game.js' ?>"></script>
    <!-- fancybox.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/vendor/jquery.fancybox.min.css' ?>">
    <!-- fancybox.js -->
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(). '/vendor/jquery.fancybox.min.js'?>"></script>
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/vendor/animate.min.css' ?>">
    <!-- AOS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/vendor/aos.css' ?>">

    <!-- Don't allow site to be landscape -->
    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
</head>
<body <?php body_class(); ?>>
