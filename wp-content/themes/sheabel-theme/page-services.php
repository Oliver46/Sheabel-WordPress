<?php /* Template Name: services */?>
<?php get_header(); ?>
<!-- services -->
<section id="services" style="background-image:url('<?php $pageBackground = get_field('page_background_image'); echo $pageBackground['sizes']['pageBackground'] ?>">   

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
                  <img src="<?php echo get_theme_mod('gallery_img1', get_bloginfo('template_url') . '/image/sheabel_gallery_img1.png');?>">
                  <span class="caption"><?php echo get_theme_mod('gallery_text1', 'Sheabel');?></span>
                </div>
                <div class="box-gallery">
                  <img src="<?php echo get_theme_mod('gallery_img2', get_bloginfo('template_url') . '/image/sheabel_gallery_img2.png');?>">
                  <span class="caption"><?php echo get_theme_mod('gallery_text2', 'Pet');?></span>
                </div>
                <div class="box-gallery">
                  <img src="<?php echo get_theme_mod('gallery_img3', get_bloginfo('template_url') . '/image/sheabel_gallery_img3.png');?>">
                  <span class="caption"><?php echo get_theme_mod('gallery_text3', 'Cemetery');?></span>
                </div>
                <div class="box-gallery">
                  <img src="<?php echo get_theme_mod('gallery_img4', get_bloginfo('template_url') . '/image/sheabel_gallery_img4.png');?>">
                  <span class="caption"><?php echo get_theme_mod('gallery_text4', 'Kentucky');?></span>
                </div>
              </div>
        </div>
    </div>

</div>
</section>
<?php get_footer(); ?>