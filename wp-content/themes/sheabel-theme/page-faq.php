<?php /* Template Name: faq */?>
<?php get_header(); ?>

    <!-- faq -->

    <section id="about">
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
         </div>
    <?php
        endwhile;
        endif;
    ?>
            

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    <!-- start Accordion -->

                    <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <?php echo get_theme_mod('faq_question1', 'Are you running out of land for burials?');?>
                            </button>
                        </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                        <?php echo get_theme_mod('faq_answer1', 'No. Sheabel Pet Cemetery has more than adequate land for burials well into the future.');?>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <?php echo get_theme_mod('faq_question2', ' Do you only bury dogs?');?>
                            </button>
                        </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                        <?php echo get_theme_mod('faq_answer2', 'Although dogs and cats are the most prevalent species of animals attended to at Sheabel Pet Cemetery, other pets, including birds, reptiles are among those represented.');?>
                            
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">          
                            <?php echo get_theme_mod('faq_question3', ' What Should I do if my pet dies at home?');?>
                           
                            </button>
                        </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                        <?php echo get_theme_mod('faq_answer3', 'Until decisions and preparations can be made, place your pet in the coldest part of your home.  Put plastic down and then newspaper or a blanket to place your pet on.  Cover with another towel or blanket.');?>
                        </div>
                        </div>
                    </div>
                    </div>

                    <!-- end Accordion -->
                    </div>
                </div>
            </div>

        </div>

    </div>
    

    </section>



<?php get_footer(); ?>