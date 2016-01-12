<?php 
get_header(); 
the_post();
?>
    </div>
    <div class="content" id='main'>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="player-details">
                        <div class="intro clearfix">
                            <div class="number"><?php the_field('number') ?></div>
                            <div class="data">
                                <div class="name"><?php the_title(); ?></div>
                                <div class="club"><?php the_field('club'); ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <ul class="player-extra">
                                    <li><label>Birth Date</label> <?php the_field('birth_date') ?></li>
                                    <li><label>Nationality</label> <?php the_field('nationality') ?></li>
                                    <li><label>Position</label> <?php the_field('position') ?></li>
                                    <li><label>Player Value</label> <?php the_field('player_value') ?></li>
                                </ul>
                                <div class="invest-data">
                                    <label>Fans Invested So Far</label>
                                    <?php the_field('fans_invested'); ?> / <?php the_field('fans_available') ?> Available
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <?php the_post_thumbnail('player_image'); ?>
                                <a href='' class='buy_card'>Buy Player`s Card</a>
                            </div>
                        </div>
                        <div id="tabs">
                            <img src='<?php  echo get_stylesheet_directory_uri()?>/images/player-data-content.jpg' />
                        </div>
                     </div>
                </div>
            </div>
        </div>
        <div id="carousel">
            <div class="container">
                <p>Other Players You Might Find Interesting:</p>
                <img src='<?php  echo get_stylesheet_directory_uri()?>/images/carousel.png' />
            </div>
        </div>
    </div>
    <?php get_footer(); ?>