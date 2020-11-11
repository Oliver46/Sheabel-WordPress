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
 
 
 


        

}
add_action('customize_register', 'sheabel_customize_register');



?>