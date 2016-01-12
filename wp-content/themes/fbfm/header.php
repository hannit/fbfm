<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="google-site-verification" content="1WAJWB9lYHmVoTOfRh1IRxm_6S4Qk0gItZrLN03MPs0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FBFM | Football Fan Marketplace</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="fakeLoader"></div>
    <!-- <img class="header-bg" src="<?php  echo get_stylesheet_directory_uri()?>/images/header_bg.jpg"> -->
    <div class="header">
        <div class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php bloginfo('url') ?>">
                        <img id="logo" class="img-responsive" src="<?php  echo get_stylesheet_directory_uri()?>/images/logo.png">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="main-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <?php get_template_part('parts/nav-links' );?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="controls-menu-wrapper">
            <div class="controls-menu clearfix">
                <div class="menu-item orange-bg first">
                    <a class="dark show-left" href="javascript:void(0)" data-toggle="modal" data-target="#contact-modal">
                        <span>JOIN AS A CLUB</span>
                    </a>
                </div>
                <div class="menu-item green-bg">
                    <a class="invert" href="javascript:void(0)" data-toggle="modal" data-target="#registration-modal">
                        <span>JOIN AS A FAN</span>
                    </a>
                </div>
                <div class="menu-item dark-light-bg helper hidden-xs">
                    <a class="invert" href="#">
                        <span>&nbsp;</span>
                    </a>
                </div>
                <div class="menu-item dark-light-bg last">
                    <a class="invert" href="javascript:void(0)" data-toggle="modal" data-target="#login-modal">
                        <span>SIGN IN</span>
                    </a>
                </div>
            </div>
        </div>
        