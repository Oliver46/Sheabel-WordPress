<?php /* Template Name: contact */?>
<?php get_header(); ?>   
   <!-- contact -->

   <section id="contact" style="background-image:url('<?php echo get_template_directory_uri() . "/image/history_sheabel_bg.png" ?>')">
        
        <div class="wrapper-container">

        <?php if(have_posts()) :
            while(have_posts()) :
                the_post();
        ?>
     
            <div class="container row-one">
                <div class="row">
                    <div class="page-title">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>

                <div class="row">
                    <div class="content">
                        <div class="content_title_wrapper">
                            <h3 class="white"><?php the_content();?>
                            </h3>
                        </div>
                    </div>
                    
                </div>
            </div>
         <?php
         endwhile;
          endif;
          ?>
            <div class="container-fluid row-two-white">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-lg">
                            <div class="box-blue">
                                <div class="service-title">
                                    <h3>Contact <?php echo get_theme_mod('contact_heading', 'Rick Szaks'); ?></h3>
                                </div>
                                <div class="service-content">
                                    <p><span>Phone:</span> <?php echo get_theme_mod('contact_phone', '(859)221-2222'); ?></p>
                                    <p><span>Mail:</span> <?php echo get_theme_mod('contact_mail', 'P.O.Box 23593'); ?><br> <?php echo get_theme_mod('contact_city', 'Lexington'); ?> <?php echo get_theme_mod('contact_state', 'Ky'); ?> <?php echo get_theme_mod('contact_mail_zip_code', '40523'); ?></p>
                                    <p><span>Address: </span> <?php echo get_theme_mod('contact_address', '5950 Cedarcreek Ln'); ?><br><?php echo get_theme_mod('contact_city', 'Lexington, Ky'); ?> <?php echo get_theme_mod('contact_city_zip_code', '40515'); ?></p>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div> 
        </div>
             

    </section>    

    <div class="acf-map">

    <?php
        while(have_posts()) {
            the_post();
            $mapLocation = get_field('map');
            //print_r( $mapLocation);
    ?>
            <div class="marker" data-lat="<?php echo $mapLocation['lat'] ?>" data-lng="<?php echo $mapLocation['lng']; ?>">
            <h3 style="color:red"><?php the_title();?></h3>
            <h6 style="color:black"><?php echo $mapLocation['address']; ?> </h6>
            </div>
    <?php 
        }
    ?>
    </div>

  
<?php get_footer(); ?>