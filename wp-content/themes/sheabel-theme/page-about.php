<?php /* Template Name: about */?>
<?php get_header(); ?>

    <!-- about us -->

    <section id="about">

        <div class="container row-one">
    <?php if(have_posts()) :
        while(have_posts()) : 
            the_post();   
    ?>
            <div class="row">
                <div class="page-title">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
    <?php
        endwhile;
        endif;
    ?>
            
            <div class="row">
                <div class="col-lg-4">
 
                        <div class="about-columns">
                        <?php dynamic_sidebar('about-box0');?>
                        </div>
                    
                </div>
                <div class="col-lg-4">

                   
                        
                        <div class="about-columns">
                        <?php dynamic_sidebar('about-box2');?>
                        </div>
                    
                </div>
                <div class="col-lg-4">

                   
                        <div class="about-columns">
                        <?php dynamic_sidebar('about-box3');?>
                        </div>
                   
                </div>
            </div>

        </div>


    

    </section>

      <!-- History -->  
    <section id="history" style="background-image: url('<?php echo get_template_directory_uri() . "/image/history_sheabel_bg.png" ?>')">
    <div class="container-fluid history row-one">
        <div class="row">
            <div class="page-title">
                <h1>History</h1>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg">
                   
                    <div class="history-columns">
                        <?php dynamic_sidebar('history-box1');?>
                    </div>
                   
                </div>

                <div class="col-lg">
                    <div class="history-columns">
                        <?php dynamic_sidebar('history-box2');?>
                    </div>
                </div>
            </div> 
        </div>
    </section> 

<?php get_footer(); ?>