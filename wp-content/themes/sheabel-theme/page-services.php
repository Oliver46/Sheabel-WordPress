<?php /* Template Name: services */?>
<?php get_header(); ?>
<!-- services -->
<section id="services" style="background-image:url('<?php echo get_template_directory_uri() . "/image/history_sheabel_bg.png" ?>')">   

<div class="wrapper-container">

<?php 
if(have_posts()) :
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
                    <h3 class="white"><?php the_content(); ?>
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

                <div class="col-lg mr-lg-2 mb-2">
                   <div class="box-blue">
                       <div class="bell">
                        <i class="fa fa-bell fa-3x"></i>
                       </div>
                       <div class="service-title">
                           <h3><?php echo get_theme_mod('basic_service_title', 'Basic Service'); ?></h3>
                       </div>
                       <div class="service-content">
                            <?php echo get_theme_mod('basic_service_content', ''); ?>
                       </div>
                   </div>
                </div>

                <div class="col-lg ml-lg-2 mb-2">
                    <div class="box-blue">
                        <div class="bell">
                         <i class="fa fa-bell fa-3x"></i>
                        </div>
                        <div class="service-title">
                            <h3><?php echo get_theme_mod('extra_service_title', 'Extra Service'); ?></h3>
                        </div>
                        <div class="service-content">
                            <?php echo get_theme_mod('extra_service_content', ''); ?>
                        </div>
                    </div>
                 </div>

            </div>
        </div>
    </div> 

</div>

</section>    

<section id="gallery">
<div class="container row-one">
    <div class="row">
        <div class="page-title">
            <h1>Gallery</h1>
        </div>
    </div>
    <div class="row">
        <div class="gallery-container">
            <div class="container-gallery">
                <div class="box-gallery">
                  <img src="https://img1.wsimg.com/isteam/ip/08a9676f-7925-41c8-b34e-20623acdee4f/IMG_4037-0001.JPG/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:1300,h:800">
                  <span class="caption">Sheabel</span>
                </div>
                <div class="box-gallery">
                  <img src="https://img1.wsimg.com/isteam/ip/08a9676f-7925-41c8-b34e-20623acdee4f/IMG_4049-0001.JPG/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:1300,h:800">
                  <span class="caption">Pet</span>
                </div>
                <div class="box-gallery">
                  <img src="https://img1.wsimg.com/isteam/ip/08a9676f-7925-41c8-b34e-20623acdee4f/IMG_4044.JPG/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:1300,h:800">
                  <span class="caption">Cemetery</span>
                </div>
                <div class="box-gallery">
                  <img src="https://img1.wsimg.com/isteam/ip/08a9676f-7925-41c8-b34e-20623acdee4f/IMG_4041.JPG/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:1300,h:800">
                  <span class="caption">Kentucky</span>
                </div>
              </div>
        </div>
    </div>
</div>
</section>
<?php get_footer(); ?>