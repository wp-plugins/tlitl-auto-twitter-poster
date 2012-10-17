<?php
echo "";
?>
    <style title="text/css">
        .twitter-mimic, .twitter-mimic tr, .twitter-mimic th, .twitter-mimic td, .twitter-mimic h3, .twitter-mimic p {
            margin: 0;
            padding: 0;
        }
        .twitter-mimic h3 {
            width: 400px;
            font-size: 20px; 
            color: #333;
        }
        .twitter-mimic p {
            margin-top: -5px;
            font-size: 24px;
            color: #ccc;
            width: 85px;
            text-align: right;
        }
    </style>
       <div class="wrap">
        <h2>tli.tl Twitterer</h2>
        <form method="post" action="options.php">
        <?php wp_nonce_field('update-options'); ?>
            <table id="twitter-setting-form" class="form-table">


<tr><td nowrap="nowrap"><h2><a href="http://tli.tl/webmasters" target="_blank">How To Get the following Parameters ?</a></h2></td></tr>            

<tr><td nowrap="nowrap">
<object width="450" height="230">
<param name="movie" value="http://www.youtube.com/v/U-eIlkI0tLA?hd=1&hl=en&fs=1&color1=0xa4a4a4&color2=0xa4a4a4&border=1"></param>
<param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param>
<embed src="http://www.youtube.com/v/U-eIlkI0tLA?hd=1&hl=en&fs=1&color1=0xa4a4a4&color2=0xa4a4a4&border=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="450" height="230"></embed>
</object>
</td></tr>            

<tr><td><hr align="center" size="2px" style="color: red;" /></td></tr>                
            
                <tr>
                    <th scope="row"><label for="tli.tl_apikey"><?php echo __('TLI.TL APIKey');?></label></th>
                    <td><input type="text" class="regular-text" name="wp_post_to_twitter_twitter_tlitlapikey" id="tli.tl_apikey" value="<?php echo $apikey;?>" /></td>
                </tr>                                            
                
<tr><td><hr align="center" size="2px" style="color: red;" /></td></tr>                
                
                <tr>
                    <th scope="row"><label for="twitter_consumer_key"><?php echo __('Twitter consumer key');?></label></th>
                    <td><input type="text" class="regular-text" name="wp_post_to_twitter_twitter_consumer_key" id="twitter_consumer_key" value="<?php echo $consumer_key;?>" /></td>
                </tr>

                <tr>
                    <th scope="row"><label for="twitter_consumer_secret"><?php echo __('Twitter consumer secret');?></label></th>
                    <td><input type="text" class="regular-text" name="wp_post_to_twitter_twitter_consumer_secret" id="twitter_consumer_secret" value="<?php echo $consumer_secret;?>" /></td>
                </tr>
                
                
                <tr>
                    <th scope="row"><label for="twitter_access_token"><?php echo __('Twitter access token');?></label></th>
                    <td><input type="text" class="regular-text" name="wp_post_to_twitter_twitter_access_token" id="twitter_consumer_key" value="<?php echo $access_token;?>" /></td>
                </tr>                                
                
                <tr>
                    <th scope="row"><label for="twitter_access_token_secret"><?php echo __('Twitter access token secret');?></label></th>
                    <td><input type="text" class="regular-text" name="wp_post_to_twitter_twitter_access_token_secret" id="twitter_access_token_secret" value="<?php echo $access_token_secret;?>" /></td>
                </tr>                

<tr><td><hr align="center" size="2px" style="color: red;" /></td></tr>                

                <tr>
                    <th scope="row"><label for="twitter_prefix"><?php echo __('Tweet Prefix');?></label></th>
                    <td><input type="text" class="regular-text" name="wp_post_to_twitter_twitter_prefix" id="twitter_prefix" value="<?php echo $prefix;?>" /></td>
                </tr>                
                                

            </table>
            	<input type="hidden" name="action" value="update" />
                
            	<input type="hidden" name="page_options" 
                value="wp_post_to_twitter_twitter_tlitlapikey,
                wp_post_to_twitter_twitter_consumer_key,
                wp_post_to_twitter_twitter_consumer_secret,
                wp_post_to_twitter_twitter_access_token,
                wp_post_to_twitter_twitter_access_token_secret,
                wp_post_to_twitter_twitter_prefix" />
                
                <p class="submit"><input type="submit" name="update" value="<?php echo __('Save Changes');?>" /></p>
            </form>

            
<hr align="center" size="2px" style="color: red;" />
<h3>Follow TLI.TL on FB To Learn more about how to earn $$ from this plugin ? :)</h3>
<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Ftakefastnotes.com%2F&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=80&amp;appId=377343122345655" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe><hr align="center" size="2px" style="color: red;" />            
            
<br />
<b>**</b> If you got that error [ <b>Error Reported, We are sorry for that !</b> ]:-<br />
<b>-</b> that means that your blog is overloading our system by posting too many posts in a short time [less than 1 sec] and it has been added to our black list.<br />
<b>-</b> if you want to be unbanned, send me your account email and site IP and tell me that you was banned and a pomise to fix what was overloading us. :)<br />
        <b>**</b> My email is [ mohandez@hotmail.com ]

<br /><br />  
            
        </div>