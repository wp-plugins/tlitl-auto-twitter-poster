<?php
    /*
         Auto Twitterer
         Info for WordPress:
         ==============================================================================
         Plugin Name: tli.tl auto Twitter poster
         Plugin URI: http://tli.tl/webmasters
         Description: This Wordpress Twitter plugin posts updates from your blog to your twitter account when you create a fresh post, auto shorten URLs with tli.tl url shortener

        Installation        
        All you have to do is download, unzip, upload to your plugins folder and activate it from the plugins menu.

         Version: 3.4
         Author: kHaSHaBaWy
         Author URI: http://takefastnotes.com
    */
    
    function wp_post_to_twitter_install () {
        add_option ('wp_post_to_twitter_twitter_tlitlapikey', '');
        
        add_option ('wp_post_to_twitter_twitter_consumer_key', '');
        add_option ('wp_post_to_twitter_twitter_consumer_secret', '');
        add_option ('wp_post_to_twitter_twitter_access_token', '');
        add_option ('wp_post_to_twitter_twitter_access_token_secret', '');
        
        add_option ('wp_post_to_twitter_twitter_prefix', '');        
    }
    
    function wp_post_to_twitter_remove () {
        delete_option ('wp_post_to_twitter_twitter_tlitlapikey');
        
        delete_option ('wp_post_to_twitter_twitter_consumer_key');
        delete_option ('wp_post_to_twitter_twitter_consumer_secret');        
        delete_option ('wp_post_to_twitter_twitter_access_token');        
        delete_option ('wp_post_to_twitter_twitter_access_token_secret');        

        delete_option ('wp_post_to_twitter_twitter_prefix');
    }
        

//////////////////4
///////////////// tli.tl shortener
    function wp_post_to_twitter_shrink_url($l,$apikey){
    if($apikey){
        if(@file_get_contents("http://tli.tl/pages/other_sites_check_tli.tl.html") == "1"){
    $file = "http://tli.tl/apiwp/".$l."/".$apikey;
    $u = @file_get_contents($file);
        }
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
        
        $consumer_key = get_option ('wp_post_to_twitter_twitter_consumer_key');
        $consumer_secret = get_option ('wp_post_to_twitter_twitter_consumer_secret');
        $access_token = get_option ('wp_post_to_twitter_twitter_access_token');
        $access_token_secret = get_option ('wp_post_to_twitter_twitter_access_token_secret');        

        $prefix = get_option ('wp_post_to_twitter_twitter_prefix');
        require_once 'wp-post-to-twitter-options.php';
    }
    
    function wp_post_to_twitter_post_to_twitter($postID) {
        if (!wp_is_post_revision($postID)) {

            $apikey = get_option ('wp_post_to_twitter_twitter_tlitlapikey');

            $consumer_key = get_option ('wp_post_to_twitter_twitter_consumer_key');
            $consumer_secret = get_option ('wp_post_to_twitter_twitter_consumer_secret');
            $access_token = get_option ('wp_post_to_twitter_twitter_access_token');
            $access_token_secret = get_option ('wp_post_to_twitter_twitter_access_token_secret');        
        
            $prefix = get_option ('wp_post_to_twitter_twitter_prefix');
            
            $post = get_post ($postID);
            $str = '%s %s %s';
            $tweet = sprintf ($str, $prefix, substr($post->post_title,0,90), wp_post_to_twitter_shrink_url(get_permalink($postID),$apikey));
            if (strlen ($apikey) > 0 && strlen ($consumer_key) > 0) {

            // include class
            require_once('tw_connect/twitteroauth.php');
            // Creat Class Object
            $twitter = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);

            $twitter->post('statuses/update', array('status' => $tweet));        
            unset($tweet, $twitter);
                
            }else {
                // mmmmm :)
            }
        }
    }
    
    register_activation_hook(__FILE__, 'wp_post_to_twitter_install');
    register_deactivation_hook(__FILE__, 'wp_post_to_twitter_remove');
    add_action('admin_menu', 'wp_post_to_twitter_add_admin_page');
    add_action('publish_post', 'wp_post_to_twitter_post_to_twitter');

?>