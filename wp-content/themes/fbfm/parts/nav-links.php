<li <?php if (is_front_page()) echo 'class="active"'; ?>><a href="<?php bloginfo('url') ?>">Homepage</a></li>
<li  <?php if (is_page(6)) echo 'class="active"'; ?>><a class="first" href="<?php bloginfo('url') ?>/about/">Concept</a></li>
<li><a href="javascript:void(0)" data-toggle="modal" data-target="#contact-modal">Contact</a></li>
<li <?php if (is_page(15)) echo 'class="active"'; ?>><a href="<?php bloginfo('url') ?>/players/">Clubs</a></li>
<li  <?php if (is_page(63)) echo 'class="active"'; ?>><a href="<?php bloginfo('url') ?>/fans/">Fans</a></li>
<li <?php if (is_singular('player')) echo 'class="active"'; ?>><a href="<?php bloginfo('url') ?>/player/nadav-bason/">Demo</a></li>
<li <?php if (is_page(7)) echo 'class="active"'; ?>><a href="<?php the_permalink(7); ?>">Privacy Policy</a></li>
<li <?php if (is_page(162)) echo 'class="active"'; ?>><a href="<?php the_permalink(162); ?>">Terms</a></li>
<li><a class="last" href="#">My Account</a></li>