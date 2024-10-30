<?php
/*
Plugin Name: Metal Share Button
Plugin URI: http://sarequl.me/wp/plugin/metalshare
Description: This Plugin for Social Share. Fancy Metal Social Share button.
Author: Sarequl
Version: 2.2.0
Author URI: http://sarequl.me/
*/



function metalstyle() {
    wp_register_style( 'metalfont', 'https://fonts.googleapis.com/css?family=Lobster' );
    wp_enqueue_style( 'metalfont' );
    wp_register_style( 'metal-css',  plugin_dir_url( __FILE__ ) . 'css/style.css' );
    wp_enqueue_style( 'metal-css' );
}
add_action( 'wp_enqueue_scripts', 'metalstyle' );



add_filter( 'the_content' , 'fancymetalshare');



 function fancymetalshare ($fancycontent) {
     ?>
        <?php echo $fancycontent; ?>
        <div class="button-area">
        <div class="share-button">
            
            <ul>
                <li><a href="http://facebook.com/share.php?u=<?php the_permalink();?>" target="_blank"><img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'metal-social-share/images/facebook.png'; ?>" alt="Facebook" /></a></li>
                
                <li><a href="https://twitter.com/share?text=<?php the_title();?>" target="_blank"><img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'metal-social-share/images/twitter.png'; ?>" alt="Twitter" /></a></li>
                
                <li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'metal-social-share/images/google-plus.png'; ?>" alt="Google+" /></a></li>
                
                
                <li><a href="https://www.linkedin.com/cws/share?url=<?php the_permalink();?>" target="_blank"><img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'metal-social-share/images/linkedin.png'; ?>" alt="Linkedin" /></a></li>
                
                <li><a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink();?>" target="_blank"><img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'metal-social-share/images/pintrest.png'; ?>" alt="Pintrest" /></a></li>
                
                
            </ul>
        
        </div>
    </div>

     <?php
 }



?>