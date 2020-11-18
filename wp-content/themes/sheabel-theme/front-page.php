
<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="main-image">
            <img src=<?php echo get_template_directory_uri(). "/image/SheabelPetCemetery.jpg"; ?>  class="img-fluid" alt="">
        </div>
    </div>
</div>

<?php
if(have_posts()) :
    while(have_posts()) :
        the_post();
?>
    <section id="home">
    <div class="container">
        <div class="row">
            <div class="page-title">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>

        <div class="row">
            <div class="content">
                <div class="content_title_wrapper">
                    <h3 class="black"><?php the_content(); ?>
                    </h3>
                </div>
            </div>
        </div>  

<?php 
    endwhile;
endif; ?>

        

    <div class="row">
        <div class="content">         
                <div class="content_content_wrapper">
                    <p><?php echo get_theme_mod('home_text', 'We know your pet is a very important part of your family and because of this, our goal is to make the cemetery a serene and beautiful place. We provide the quality service that your pet deserves because we understand that our pets are like children that fill our hearts with love and memories.'); ?></p>
                </div>
               
            </div>
            
        </div>
    </div>

    <div class="container-fluid row-two-blue">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg">
                   <div class="box">
                     <div class="box-title">
                         <h4>Opening Hours</h4>
                    </div>
                    <div class="box-content">
                        <table class="table">
                            <thead>
                                <tr>
                                  <th>Days</th><th>Hours</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Sunday</td><td><?php echo get_theme_mod('opening_hours_sunday', '08:00am - 06:00pm');?></td>  
                                </tr> 
                                <tr>
                                    <td>Monday</td><td><?php echo get_theme_mod('opening_hours_monday', '08:00am - 07:00pm');?></td>  
                                </tr>   
                                <tr>
                                    <td>Tuesday</td><td><?php echo get_theme_mod('opening_hours_tuesday', '08:00am - 07:00pm');?></td>
                                </tr>
                                <tr>
                                    <td>Wednesday</td><td><?php echo get_theme_mod('opening_hours_wednesday', '08:00am - 07:00pm');?></td>
                                </tr>
                                <tr>
                                    <td>Thursday</td><td><?php echo get_theme_mod('opening_hours_thursday', '08:00am - 07:00pm');?></td>
                                </tr>
                                <tr>
                                    <td>Friday</td><td><?php echo get_theme_mod('opening_hours_friday', '08:00am - 07:00pm');?></td>
                                </tr>
                                <tr>
                                    <td>Saturday</td><td><?php echo get_theme_mod('opening_hours_saturday', 'Closed');?></td>
                                </tr>
                                    
                            </tbody>    
                        </table>
                    </div>
                   </div>
                </div>
                <div class="col-lg">
                    <?php
                        //Grabs data from db
                        // $city = esc_attr( get_option( 'input_city' ));
                        // $url = esc_attr( get_option( 'input_url' ));
                        // $api = esc_attr( get_option( 'input_api_key' ));
                    ?>
                    <div class="box">
                        <div class="box-title">
                            <h4>Current Weather for <?php echo $city; ?></h4>
                       </div>
                       <div class="box-content">
                       <?php
                        $day = Date("l");
                        $date = Date("F j, Y")
                       ?>
                        <table class="table">
                            <thead>
                                <tr>
                                  <th id="day"><?php echo $day; ?></th><th id="date"><?php echo $date; ?></th>
                                </tr>
                            </thead>
                            <tbody id="showWeather">
                                <script>console.log(frontend_ajax_object);</script>
                            </tbody>
                        </table>    
                        </div>
                    </div>
                
                </div>
             </div>
        </div>
    </div>

</section>
<?php get_footer(); ?>