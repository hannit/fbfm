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
                        <!-- <div class="fans avatars-stack hidden-xs pull-right">
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
                        </div> -->
                        <!-- <div class="players avatars-stack hidden-xs pull-left">
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
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="header-side-text side-text-left">
            <div class="side-text-title skew">
                <div class="side-text-inner">
                    <img class="polygon_icon" src="<?php  echo get_stylesheet_directory_uri()?>/images/polygon_icon.png">
                    <span>FBFM Clubs Community</span>
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
                <a class="show-header-box show-left" href="<?php the_permalink(15); ?>">
                    <span>JOIN AS A CLUB</span>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
            <div class="header-control header-control-right text-center pull-right">
                <a class="show-header-box show-right" href="<?php the_permalink(63); ?>">
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
                        <h3>FBFM News:</h3>
                        <?php news_slider(); ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="welcome-item text-item">
                        <?php the_field('the_challange') ?>
                    </div>
                    <a class="btn-slant green-bg invert" href="http://test.hannitcohen.co.il/fbfm/about/">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="intro-item text-item">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php get_template_part('parts/socials');?>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>