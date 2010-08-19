<?php
    /*
         Auto Twitterer
         Info for WordPress:
         ==============================================================================
         Plugin Name: tli.tl auto Twitter poster
         Plugin URI: http://tli.tl/embed_us.php?show=wp
         Description: This Wordpress Twitter plugin posts updates from your blog to your twitter account when you create a fresh post, auto shorten URLs with tli.tl url shortener

        Installation        
        All you have to do is download, unzip, upload to your plugins folder and activate it from the plugins menu.

         Version: 2.1
         Author: kHaSHaBaWy
         Author URI: http://crazy-eng.com
    */
    require_once dirname (__FILE__) . '/twitter.php';    
    
    function wp_post_to_twitter_install () {
        add_option ('wp_post_to_twitter_twitter_tlitlapikey', '');
        add_option ('wp_post_to_twitter_twitter_username', '');
        add_option ('wp_post_to_twitter_twitter_password', '');
        add_option ('wp_post_to_twitter_twitter_prefix', '');        
    }
    
    function wp_post_to_twitter_remove () {
        delete_option ('wp_post_to_twitter_twitter_tlitlapikey');
        delete_option ('wp_post_to_twitter_twitter_username');
        delete_option ('wp_post_to_twitter_twitter_password');
        delete_option ('wp_post_to_twitter_twitter_prefix');
    }
        

//////////////////4
///////////////// tli.tl shortener
    function wp_post_to_twitter_shrink_url($l,$apikey){
    if($apikey){
    $file = "http://tli.tl/apiwp/".$l."/".$apikey;
    $u = @file_get_contents($file);
    }else{
    $u = $l;
    }
    return $u;
    }
///////////////// tli.tl shortener    
    
    function wp_post_to_twitter_add_admin_page () {
        add_options_page ('tli.tl Twitterer', 'tli.tl Twitterer', 8, __FILE__, 'wp_post_to_twitter_options');
    }
    
    function wp_post_to_twitter_options () {
        $apikey = get_option ('wp_post_to_twitter_twitter_tlitlapikey');
        $user = get_option ('wp_post_to_twitter_twitter_username');
        $pass = get_option ('wp_post_to_twitter_twitter_password');
        $prefix = get_option ('wp_post_to_twitter_twitter_prefix');
        require_once 'wp-post-to-twitter-options.php';
    }
    
    function wp_post_to_twitter_post_to_twitter($postID) {
        if (!wp_is_post_revision($postID)) {
            require_once dirname(__FILE__) . '/twitter.php';
            $apikey = get_option ('wp_post_to_twitter_twitter_tlitlapikey');
            $user = get_option ('wp_post_to_twitter_twitter_username');
            $pass = get_option ('wp_post_to_twitter_twitter_password');
            $prefix = get_option ('wp_post_to_twitter_twitter_prefix');
            
            $post = get_post ($postID);
            $str = '%s %s %s';
            $tweet = sprintf ($str, $prefix, substr($post->post_title,0,90), wp_post_to_twitter_shrink_url(get_permalink($postID),$apikey));
            if (strlen ($user) > 0 && strlen ($pass) > 0) {
                postToTwitter ($user, $pass, $tweet);
            }else {
                //Just chillax :)
            }
        }
    }
    
    register_activation_hook(__FILE__, 'wp_post_to_twitter_install');
    register_deactivation_hook(__FILE__, 'wp_post_to_twitter_remove');
    add_action('admin_menu', 'wp_post_to_twitter_add_admin_page');
    add_action('publish_post', 'wp_post_to_twitter_post_to_twitter');

?>