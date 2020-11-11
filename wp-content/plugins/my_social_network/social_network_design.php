<?php settings_errors(); ?>
<?php
$facebook_icon = get_option( 'facebook_icon' ); //get_option() Retrieves an option value based on an option name.
$facebook_link = get_option( 'facebook_link' );

$twitter_icon = get_option( 'twitter_icon' );
$twitter_link = get_option( 'twitter_link' );

$instragram_icon = get_option( 'instagram_icon' );
$instragram_link = get_option( 'instagram_link' );

$pinterest_icon = get_option( 'pinterest_icon' );
$pinterest_link = get_option( 'pinterest_link' );

//echo "facebook:". $facebook_icon . "<br>";
//echo "twitter:".$twitter_icon . "<br>";
//echo "instagram:" . $instragram_icon;
?>
<div class="socialNetWork">
    <div>
        <h1>Social Network Plugin</h1>
    </div>  
        <div class="social-network-container">
            <div class="social-form">
                <form action="options.php" method="post"> <!-- options.php -> Update db | you can't access to that page -->
                <?php settings_fields( 'sn-settings-group'); ?><!-- unit name settings-group -->
                <?php do_settings_sections('sn_settings_social_links'); ?>
                <?php submit_button(); ?>
                </form>
            </div>
        
            <div class="social-icons">
                <div class="social-icons-item"><?php if($facebook_icon == 'yes') {?><a href="<?php echo $facebook_link; ?>" target="_blank"><i class='fab fa-facebook-f fa-3x'></i></a><?php }?></div>
                <div class="social-icons-item"><?php if($twitter_icon == 'yes') {?><a href="<?php echo $twitter_link; ?>" target="_blank"><i class='fab fa-twitter fa-3x'></i></a><?php }?></div>
                <div class="social-icons-item"><?php if($instragram_icon == 'yes') {?><a href="<?php echo $instragram_link; ?>" target="_blank"><i class='fab fa-instagram fa-3x'></i></a><?php }?></div>
                <div class="social-icons-item"><?php if($pinterest_icon == 'yes') {?><a href="<?php echo $pinterest_link; ?>" target="_blank"><i class="fab fa-pinterest fa-3x"></i></a><?php }?></div>

                <?php
                    
                ?>
            </div>
        </div>
        

</div>