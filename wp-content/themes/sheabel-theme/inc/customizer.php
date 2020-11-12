<?php
//Theme Customizer | Settings
function sheabel_customize_register($wp_customize){
    //Home Section
    $wp_customize->add_section('home', array(
        'title' => __('Home', 'sheabel-theme'),
        'description' => sprintf(__('Options for Home', 'sheabel-theme')),
        'priority' => 130
    ));

    //Home Long Title
    $wp_customize->add_setting('home_text', array(
        'default' => _x('', 'sheabel-theme'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('home_text', array(
        'type' => 'textarea',
        'label' => __('Home Page Text', 'sheabel-theme'),
        'section' => 'home',
        'priority' => 1
    ));

    
    //Services Section
    $wp_customize->add_section('service', array(
            'title' => __('Services', 'sheabel-theme'),
            'description' => sprintf(__('Options for Services', 'sheabel-theme')),
            'priority' => 131
    ));
    

    //Basic Service title
    $wp_customize->add_setting('basic_service_title', array(
        'default' => _x('Basic Service', 'sheabel-theme'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('basic_service_title', array(
            'label' => __('Basic Service', 'sheabel-theme'),
            'section' => 'service',
            'priority' => 1
    ));

    //Basic Service Info
    $wp_customize->add_setting('basic_service_content', array(
            'default' => _x('', 'sheabel-theme'),
            'type' => 'theme_mod'
        ));
    $wp_customize->add_control('basic_service_content', array(
            'type' => 'textarea',
            'label' => __('Basic Service Information', 'sheabel-theme'),
            'section' => 'service',
            'priority' => 2
    ));

    //Extra Service title
    $wp_customize->add_setting('extra_service', array(
        'default' => _x('(859)221-2222', 'sheabel-theme'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('extra_service', array(
        'label' => __('Extra Service', 'sheabel-theme'),
        'section' => 'service',
        'priority' => 3
    ));

    //Extra Service Info
    $wp_customize->add_setting('extra_service_content', array(
            'default' => _x('', 'sheabel-theme'),
            'type' => 'theme_mod'
        ));
    $wp_customize->add_control('extra_service_content', array(
            'type' => 'textarea',
            'label' => __('Extra Service Information', 'sheabel-theme'),
            'section' => 'service',
            'priority' => 4
    ));

    //Contact Section
    $wp_customize->add_section('contact', array(
        'title' => __('Contact', 'sheabel-theme'),
        'description' => sprintf(__('Options for Contact', 'sheabel-theme')),
        'priority' => 132
    ));

    //Name
    $wp_customize->add_setting('contact_heading', array(
        'default' => _x('Rick Szaks', 'sheabel-theme'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('contact_heading', array(
        'label' => __('Name', 'sheabel-theme'),
        'section' => 'contact',
        'priority' => 1
    ));

    //Phone
    $wp_customize->add_setting('contact_phone', array(
        'default' => _x('(859)221-2222', 'sheabel-theme'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('contact_phone', array(
        'label' => __('Phone', 'sheabel-theme'),
        'section' => 'contact',
        'priority' => 2
    ));

    //Mail
    $wp_customize->add_setting('contact_mail', array(
        'default' => _x('P.O.Box 23593', 'sheabel-theme'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('contact_mail', array(
        'label' => __('Mail', 'sheabel-theme'),
        'section' => 'contact',
        'priority' => 3
    ));
    //Mail_Zip_code
    $wp_customize->add_setting('contact_mail_zip_code', array(
        'default' => _x('40523', 'sheabel-theme'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('contact_mail_zip_code', array(
        'label' => __('Mail Zip Code', 'sheabel-theme'),
        'section' => 'contact',
        'priority' => 4
    ));
    //Address
    $wp_customize->add_setting('contact_address', array(
        'default' => _x('5950 Cedarcreek Ln', 'sheabel-theme'),
        'type' => 'theme_mod'
    ));
    
    $wp_customize->add_control('contact_address', array(
            'label' => __('Address', 'sheabel-theme'),
            'section' => 'contact',
            'priority' => 5
    ));

    //City
    $wp_customize->add_setting('contact_city', array(
            'default' => _x('Lexington', 'sheabel-theme'),
            'type' => 'theme_mod'
    ));
        
    $wp_customize->add_control('contact_city', array(
                'label' => __('City', 'sheabel-theme'),
                'section' => 'contact',
                'priority' => 6
    ));
    //State
        $wp_customize->add_setting('contact_state', array(
            'default' => _x(' KY', 'sheabel-theme'),
            'type' => 'theme_mod'
    ));
        
    $wp_customize->add_control('contact_state', array(
                'label' => __('State', 'sheabel-theme'),
                'section' => 'contact',
                'priority' => 7
    ));

    //City_Zip_code
    $wp_customize->add_setting('contact_city_zip_code', array(
        'default' => _x('40515', 'sheabel-theme'),
        'type' => 'theme_mod'
    ));
    
    $wp_customize->add_control('contact_city_zip_code', array(
        'label' => __('City Zip Code', 'sheabel-theme'),
        'section' => 'contact',
        'priority' => 8
    ));


     //Opening hours Section
     $wp_customize->add_section('opening_hours', array(
        'title' => __('Opening Hours', 'sheabel-theme'),
        'description' => sprintf(__('Options for Opening Hours', 'sheabel-theme')),
        'priority' => 133
    ));

    //Sunday
    $wp_customize->add_setting('opening_hours_sunday', array(
            'default' => _x('08:00am - 06:00pm', 'sheabel-theme'),
            'type' => 'theme_mod'
    ));
    $wp_customize->add_control('opening_hours_sunday', array(
        'label' => __('Sunday', 'sheabel-theme'),
        'section' => 'opening_hours',
        'priority' => 1
    ));

    //Monday
    $wp_customize->add_setting('opening_hours_monday', array(
        'default' => _x('08:00am - 07:00pm', 'sheabel-theme'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('opening_hours_monday', array(
        'label' => __('Monday', 'sheabel-theme'),
        'section' => 'opening_hours',
        'priority' => 2
    ));

    //Tuesday
    $wp_customize->add_setting('opening_hours_tuesday', array(
        'default' => _x('08:00am - 07:00pm', 'sheabel-theme'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('opening_hours_tuesday', array(
        'label' => __('Tuesday', 'sheabel-theme'),
        'section' => 'opening_hours',
        'priority' => 3
    ));


    //Wednesday
    $wp_customize->add_setting('opening_hours_wednesday', array(
        'default' => _x('08:00am - 07:00pm', 'sheabel-theme'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('opening_hours_wednesday', array(
        'label' => __('Wednesday', 'sheabel-theme'),
        'section' => 'opening_hours',
        'priority' => 4
     ));


    //Thrusday
    $wp_customize->add_setting('opening_hours_thrusday', array(
        'default' => _x('08:00am - 07:00pm', 'sheabel-theme'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('opening_hours_thrusday', array(
        'label' => __('Thrusday', 'sheabel-theme'),
        'section' => 'opening_hours',
        'priority' => 5
    ));

    //Friday
    $wp_customize->add_setting('opening_hours_friday', array(
        'default' => _x('08:00am - 07:00pm', 'sheabel-theme'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('opening_hours_friday', array(
        'label' => __('Friday', 'sheabel-theme'),
        'section' => 'opening_hours',
        'priority' => 6
    ));

    //Saturday
    $wp_customize->add_setting('opening_hours_saturday', array(
            'default' => _x('08:00am - 07:00pm', 'sheabel-theme'),
            'type' => 'theme_mod'
    ));
    $wp_customize->add_control('opening_hours_saturday', array(
        'label' => __('Saturday', 'sheabel-theme'),
        'section' => 'opening_hours',
        'priority' => 7
    ));

        //Gallery Section
        $wp_customize->add_section('gallery', array(
            'title' => __('Gallery', 'sheabel-theme'),
            'description' => sprintf(__('Options for Home', 'sheabel-theme')),
            'priority' => 136
        ));
    
        //Gallery Image 1
        $wp_customize->add_setting('gallery_img1', array(
            'default' => _x(get_bloginfo('template_directory') . '/image/sheabel_gallery_img1.png', 'sheabel-theme'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gallery_img1', array(
            'label' => __('Image 1', 'sheabel-theme'),
            'section' => 'gallery',
            'settings' => 'gallery_img1',
            'priority' => 1
        )));

        //Image 1 Text
        $wp_customize->add_setting('gallery_text1', array(
            'default' => _x('Sheabel', 'sheabel-theme'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('gallery_text1', array(
            'label' => __('Text Image 1', 'sheabel-theme'),
            'section' => 'gallery',
            'priority' => 2
        ));

        //Gallery Image 2
        $wp_customize->add_setting('gallery_img2', array(
            'default' => _x(get_bloginfo('template_directory') . '/image/sheabel_gallery_img2.png', 'sheabel-theme'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gallery_img2', array(
            'label' => __('Image 2', 'sheabel-theme'),
            'section' => 'gallery',
            'settings' => 'gallery_img2',
            'priority' => 3
        )));

        //Image 2 Text
        $wp_customize->add_setting('gallery_text2', array(
            'default' => _x('Pet', 'sheabel-theme'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('gallery_text2', array(
            'label' => __('Text Image 2', 'sheabel-theme'),
            'section' => 'gallery',
            'priority' => 4
        ));

        //Gallery Image 3
        $wp_customize->add_setting('gallery_img3', array(
            'default' => _x(get_bloginfo('template_directory') . '/image/sheabel_gallery_img3.png', 'sheabel-theme'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gallery_img3', array(
            'label' => __('Image 3', 'sheabel-theme'),
            'section' => 'gallery',
            'settings' => 'gallery_img3',
            'priority' => 5
        )));

    

        //Image 3 Text
        $wp_customize->add_setting('gallery_text3', array(
            'default' => _x('Cemetery', 'sheabel-theme'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('gallery_text3', array(
            'label' => __('Text Image 3', 'sheabel-theme'),
            'section' => 'gallery',
            'priority' => 6
        ));

        //Gallery Image 4
        $wp_customize->add_setting('gallery_img4', array(
            'default' => _x(get_bloginfo('template_directory') . '/image/sheabel_gallery_img4.png', 'sheabel-theme'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gallery_img4', array(
            'label' => __('Image 4', 'sheabel-theme'),
            'section' => 'gallery',
            'settings' => 'gallery_img4',
            'priority' => 7
        )));

        //Image 4 Text
        $wp_customize->add_setting('gallery_text4', array(
            'default' => _x('Kentucky', 'sheabel-theme'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('gallery_text4', array(
            'label' => __('Text Image 4', 'sheabel-theme'),
            'section' => 'gallery',
            'priority' => 8
        ));

        //FAQ Section
        $wp_customize->add_section('faq', array(
            'title' => __('FAQ', 'sheabel-theme'),
            'description' => sprintf(__('Options for FAQ', 'sheabel-theme')),
            'priority' => 136
        ));

        //FAQ question #1
        $wp_customize->add_setting('faq_question1', array(
            'default' => _x('Are you running out of land for burials?', 'sheabel-theme'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('faq_question1', array(
            'label' => __('Question #1', 'sheabel-theme'),
            'section' => 'faq',
            'priority' => 1
        ));

        //FAQ answer #1
        $wp_customize->add_setting('faq_answer1', array(
            'default' => _x('No. Sheabel Pet Cemetery has more than adequate land for burials well into the future.', 'sheabel-theme'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('faq_answer1', array(
            'type' => 'textarea',
            'label' => __('Answer #1', 'sheabel-theme'),
            'section' => 'faq',
            'priority' => 2
        ));

        //FAQ question #2
        $wp_customize->add_setting('faq_question2', array(
            'default' => _x(' Do you only bury dogs?', 'sheabel-theme'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('faq_question2', array(
            'label' => __('Question #2', 'sheabel-theme'),
            'section' => 'faq',
            'priority' => 3
        ));

        //FAQ answer #2
        $wp_customize->add_setting('faq_answer2', array(
            'default' => _x('Although dogs and cats are the most prevalent species of animals attended to at Sheabel Pet Cemetery, other pets, including birds, reptiles are among those represented.', 'sheabel-theme'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('faq_answer2', array(
            'type' => 'textarea',
            'label' => __('Answer #2', 'sheabel-theme'),
            'section' => 'faq',
            'priority' => 4
        ));

        //FAQ question #3
        $wp_customize->add_setting('faq_question3', array(
            'default' => _x(' What Should I do if my pet dies at home? ', 'sheabel-theme'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('faq_question3', array(
            'label' => __('Question #3', 'sheabel-theme'),
            'section' => 'faq',
            'priority' => 5
        ));

        //FAQ answer #2
        $wp_customize->add_setting('faq_answer3', array(
            'default' => _x('Until decisions and preparations can be made, place your pet in the coldest part of your home.  Put plastic down and then newspaper or a blanket to place your pet on.  Cover with another towel or blanket.', 'sheabel-theme'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('faq_answer3', array(
            'type' => 'textarea',
            'label' => __('Answer #3', 'sheabel-theme'),
            'section' => 'faq',
            'priority' => 6
        ));

 
 
 
 


}
add_action('customize_register', 'sheabel_customize_register');



?>