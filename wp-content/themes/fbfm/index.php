<?php 
get_header(); 
the_post();
?>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="header-inner">
                        <div class="headline-lg">
                            <img class="img-responsive center-block" src="<?php  echo get_stylesheet_directory_uri()?>/images/header_headline.jpg">
                        </div>
                        <div class="headline-small">
                            <span class="stroke hidden-sm hidden-xs"></span>
                            <span class="text"><em><?php the_field('subtitle') ?></em></span>
                            <span class="stroke hidden-sm hidden-xs"></span>
                        </div>
                        <div class="header-text clearfix">
                            <p><?php the_field('description') ?></p>
                        </div>
                        <div class="fans avatars-stack hidden-xs pull-right">
                            <div class="fan-wrapper avatars-stack-wrapper first">
                                <img class="mask img-responsive" src="<?php  echo get_stylesheet_directory_uri()?>/images/avatars/fan2.jpg" width="300" height="445" data-mask="<?php  echo get_stylesheet_directory_uri()?>/images/mask-shape.png">
                                <img class="mask-layer img-responsive" src="<?php  echo get_stylesheet_directory_uri()?>/images/mask-shape-layer-fan.png">
                                <div class="player-info">
                                    <div class="player-name">Tomer .B</div>
                                    <div class="player-roll">FOOTBALL FAN</div>
                                </div>
                            </div>
                            <div class="fan-wrapper avatars-stack-wrapper last">
                                <img class="mask img-responsive" src="<?php  echo get_stylesheet_directory_uri()?>/images/avatars/fan1.jpg" width="300" height="445" data-mask="<?php  echo get_stylesheet_directory_uri()?>/images/mask-shape.png">
                                <img class="mask-layer img-responsive" src="<?php  echo get_stylesheet_directory_uri()?>/images/mask-shape-layer-fan.png">
                                <div class="player-info">
                                    <div class="player-name">Nadav .B</div>
                                    <div class="player-roll">FOOTBALL FAN</div>
                                </div>
                            </div>
                        </div>
                        <div class="players avatars-stack hidden-xs pull-left">
                            <div class="player-wrapper avatars-stack-wrapper first">
                                <img class="mask img-responsive" src="<?php  echo get_stylesheet_directory_uri()?>/images/avatars/fan4.jpg" width="300" height="445" data-mask="<?php  echo get_stylesheet_directory_uri()?>/images/mask-shape.png">
                                <img class="mask-layer img-responsive" src="<?php  echo get_stylesheet_directory_uri()?>/images/mask-shape-layer-player.png">
                                <div class="player-info">
                                    <div class="player-name">Gil .R</div>
                                    <div class="player-roll">BUY PLAYER CARD</div>
                                </div>
                            </div>
                            <div class="player-wrapper avatars-stack-wrapper last">
                                <img class="mask img-responsive" src="<?php  echo get_stylesheet_directory_uri()?>/images/avatars/fan3.jpg" width="300" height="445" data-mask="<?php  echo get_stylesheet_directory_uri()?>/images/mask-shape.png">
                                <img class="mask-layer img-responsive" src="<?php  echo get_stylesheet_directory_uri()?>/images/mask-shape-layer-player.png">
                                <div class="player-info">
                                    <div class="player-name">Jhon .D</div>
                                    <div class="player-roll">BUY PLAYER CARD</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-side-text side-text-left">
            <div class="side-text-title skew">
                <div class="side-text-inner">
                    <img class="polygon_icon" src="<?php  echo get_stylesheet_directory_uri()?>/images/polygon_icon.png">
                    <span>FBFM Players Community</span>
                </div>
            </div>
            <div class="side-text-body skew">
                <div class="side-text-inner">
                    <?php the_field('left_popup'); ?>
                </div>
            </div>
            <div class="side-text-bottom skew">
                <div class="side-text-inner">
                    <?php the_field('left_bottom'); ?>
                </div>
            </div>
        </div>
        <div class="header-side-text side-text-right">
            <div class="side-text-title skew">
                <div class="side-text-inner">
                    <img class="polygon_icon" src="<?php  echo get_stylesheet_directory_uri()?>/images/polygon_icon.png">
                    <span>FBFM Fans Community</span>
                </div>
            </div>
            <div class="side-text-body skew">
                <div class="side-text-inner">
                    <?php the_field('right_popup'); ?>
                </div>
            </div>
            <div class="side-text-bottom skew">
                <div class="side-text-inner">
                    <?php the_field('right_popup_bottom'); ?>                    
                </div>
            </div>
        </div>
        <div class="header-control-wrapper clearfix">
            <div class="header-control header-control-left text-center pull-left">
                <a class="show-header-box show-left" href="javascript:void(0)">
                    <span>JOIN AS A PLAYER</span>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
            <div class="header-control header-control-right text-center pull-right">
                <a class="show-header-box show-right" href="javascript:void(0)">
                    <i class="fa fa-angle-left"></i>
                    <span>JOIN AS A FAN</span>
                </a>
            </div>
        </div>
    </div>
    <div class="gary-bg content">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="news-ticker text-item">
                        <h3>Transfer News:</h3>
                        <div class="news-slider">
                            <ul>
                                <li>
                                    <p>Joey Barton in talks with Nottingham Forest as Henri Lansbury closes in on new deal</p>
                                    <a class="small" href="javascript:void(0)">(05 Jun, 2015 | 07:35)</a>
                                    <p class="note">Joey Barton has yet to agree a deal with Nottingham Forest. The free agent midfielder has held talks with several clubs but Forest are tied by their Financial Fair Play restrictions.</p>
                                </li>
                                <li>Another slide</li>
                                <li>My last slide</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="welcome-item text-item">
                        <h3>Be a part of the next football generation:</h3>
                        <p>Youth Players are the future of the game, in today’s global football field players are being spotted while young and agile. Think you are the next generation Pele? Allow agents, clubs and fans to discover and endorse you.</p>
                        <p class="note">Preconditions: Youth Player, Meet the conditions Stipulated by FIFA and UEFA, plays for four years.</p>
                    </div>
                    <a class="btn-slant green-bg invert" href="#">Join As A Youth Player</a>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="intro-item text-item">
                        <h3>The Challenge</h3>
                        <?php the_field('the_challange') ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="social">
                    <p class="note">Stay Connected:</p>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><img src="<?php  echo get_stylesheet_directory_uri()?>/images/social/facebook.jpg"></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php  echo get_stylesheet_directory_uri()?>/images/social/twitter.jpg"></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php  echo get_stylesheet_directory_uri()?>/images/social/youtube.jpg"></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php  echo get_stylesheet_directory_uri()?>/images/social/google_plus.jpg"></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php  echo get_stylesheet_directory_uri()?>/images/social/linkedin.jpg"></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php  echo get_stylesheet_directory_uri()?>/images/social/email.jpg"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>