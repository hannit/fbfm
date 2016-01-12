    <div class="footer_menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 cleafix">
                    <ul class="list-inline pull-left menu-links">
                        <?php get_template_part('parts/nav-links' );?>
                    </ul>
                    <ul class="list-inline pull-right">
                        <li>
                            <a href="#"><img src="<?php  echo get_stylesheet_directory_uri()?>/images/webnews_logo.png"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyrights">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 cleafix">
                    <span>&copy; Copyright - All Rights Reserved To Football Fan Marketplace (FBFM)</span>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('parts/login-popup' );?>
    <?php get_template_part('parts/registration-popup' ); ?>
    <?php get_template_part('parts/contact-popup' ); ?>

    <div class="visible-xs responsive-helper"></div>
    <?php wp_footer(); ?>
</body>

</html>
