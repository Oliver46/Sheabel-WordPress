<footer>
        <div class="container">
            <div class="row text-center footer-left-side">
                <div class="col-lg copyright">
                  
                    <h5 class="uppercase">COPYRIGHT © 2016- <?php echo Date('Y')?><br><?php (bloginfo('description')); ?></h5>
                    <div class="footer-address">
                        <p><?php echo get_theme_mod('contact_address', '5950 Cedarcreek Ln'); ?><br>
                        <?php echo get_theme_mod('contact_city', '5950 Cedarcreek Ln'); ?> <?php echo get_theme_mod('contact_state', 'Kentucky'); ?> <?php echo get_theme_mod('contact_city_zip_code', '40515'); ?></p>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="footer-pages">
                        <?php
                             $defaults = array(
                            'theme_location' => 'footer_menu',
                            'items_wrap' => '<ul class="footer">%3$s</ul>',
                            );
                            wp_nav_menu( $defaults );
                        ?>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="social-network">
                    <?php
                          $facebookIcon = get_option( 'facebook_icon' );
                          $linkedIcon = get_option('instagram_icon');
                          $twitterIcon = get_option('twitter_icon');
                          $pinteresIcon = get_option('pinterest_icon');
                    ?>
                        <div class="social-icons">
                            <?php if($facebookIcon == 'yes') {?>
                            <a href="<?php echo get_option('facebook_link'); ?>" target="_blank"><i class="fa fa-facebook fa-3x"></i></a>
                            <?php } ?>
                        </div>
                        <div class="social-icons">
                            <?php if($linkedIcon == 'yes') {?>
                            <a href="<?php echo get_option('instagram_link'); ?>" target="_blank"><i class="fa fa-instagram fa-3x"></i></a>
                            <?php } ?>
                        </div>
                        <div class="social-icons">
                            <?php if($twitterIcon == 'yes') {?>
                            <a href="<?php echo get_option('twitter_link'); ?>" target="_blank"><i class="fa fa-twitter fa-3x"></i></a>
                            <?php } ?>
                        </div>
                        <div class="social-icons">
                            <?php if($pinteresIcon == 'yes') {?>
                            <a href="<?php echo get_option('pinterest_link'); ?>" target="_blank"><i class="fa fa-pinterest fa-3x"></i></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?> <!-- Display admin bar -->
   
</body>
</html>