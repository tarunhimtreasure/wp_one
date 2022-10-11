<?php

    register_nav_menus(  // registering a new menu for custom theme.
        array('main_menu' => 'Main Menu') // passing menu 'key' and 'value' using array.
    );

    add_theme_support ( 
        'post-thumbnails'   // adds custom theme supports     
    );

    add_theme_support(
        'custom-header' // insert logo in header / gives header option in 'appearence' menu 
    )

?>