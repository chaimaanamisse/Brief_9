<?php

/**
 * Plugin Name: footer
 * Description: 
 * Plugin URI: 
 * Author: Chaimaa Nmiyesse
 * Version: 3.0.8
 * Author URI: footer

*/

add_action('admin_menu', 'my_admin_menu');


function my_admin_menu () {
	
  add_menu_page('Footer Text title', 'Footer Settings', 'manage_options',
 'footer_setting_page', 'setting', 'dashicons-admin-links');

}

function footer_text_admin_page () {
  echo 'this is where we will edit the variable';
}

// mt_settings_page() displays the page content for the Test Settings submenu
function setting() {
    echo "<h2>" . __( 'Ajouter les liens des réseaux sociaux', 'menu-test' ) . "</h2>";
	include_once('plugin_config.php');
}

function pied_page() {
   echo "<footer id='main-footer' style='
   padding: center;
   background: #001524;
   color: white;
   height: 70px;
   display: flex;
   align-items: center;
   justify-content: space-between;
 '>
 <div class='footer_text' style='margin-left:18%; text-align: right;font-size: 17px;'>Droits d'auteur © 2021 | oraganica  </div>
 <div style='margin-right:18%;
 color:white;
 '>
 <a style='color:white; text-decoration: none;  padding: 5px;' href='".get_option('lien_face')."'>
 <i class='fab fa-facebook'></i>
   </a>
   <a style='color:white; text-decoration: none; padding: 5px;' href='".get_option('lien_insta')."'>
   <i class='fab fa-instagram'></i>
     </a>
 <a style='color:white; text-decoration: none;  padding: 5px;' href='".get_option('lien_twitter')."'>
 <i class='fab fa-twitter'></i>
   </a>
  
 </div>
  
 
</footer>";
}
add_action( 'wp_footer', 'pied_page' );


?>