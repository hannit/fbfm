<?php 
get_header(); 
the_post();
?>
    </div>
    <div class="content" id='main'>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="intro-item text-item">
                        <h1><span><?php  the_title(); ?></span></h1>
                        <?php the_content();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('parts/socials');?>
    <?php get_footer(); ?>