add_menu_page() function is used to add a plugin page as admin panel
add_theme_page() function is used for Appearance
add_management_page() function is used for tools
add_options_page() is used for settings


 add_menu_page( 
   'Page_title', //Shows plugin name in task bar
   'Menu_title', // It is the text that display in Admin Panel
   'manage_options', //Capability | It requires to display plugin menu in Admin panel
   'custom_plugin', //Menu Slug | It display as page name in URL
   'custom_function2'); //Callable function | it is used to wrap up design of the page
   Icon url | we can add an icon for the plugin as 5th argument


   There are two steps to add RESOURCES files in custom_plugin
   1. Create files.
   2. Register/add files in plugin.

   There are two steps t0 add CSS files in plugin
   1. Create files separately.
   2. Register files in plugin.

   To add CSS files in plugin, we use two build in funtions
   1. add_action
   2. wp_enqueue_style()

   Now add js files in plugin with 2 steps:
   1. Create files with functionality.
   2. Register Files in plugin.

   To link Jquery/Javacript files in plugin, we use two build in functions
   1. add_action()
   2. wp_enqueue_script()