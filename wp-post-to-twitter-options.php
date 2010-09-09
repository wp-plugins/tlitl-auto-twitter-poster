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
            
<tr><td nowrap="nowrap"><h2>TLI.TL Parameters <a href="http://tli.tl/embed_us.php?show=wp&show2=tlitl_par" target="_blank">How to get this?</a></h2></td></tr>            
            
                <tr>
                    <th scope="row"><label for="tli.tl_apikey"><?php echo __('TLI.TL APIKey');?></label></th>
                    <td><input type="text" class="regular-text" name="wp_post_to_twitter_twitter_tlitlapikey" id="tli.tl_apikey" value="<?php echo $apikey;?>" /></td>
                </tr>                                            
                
<tr><td><hr align="center" size="2px" style="color: red;" /></td></tr>                
                
<tr><td nowrap="nowrap"><h2>Twitter Parameters <a href="http://tli.tl/embed_us.php?show=wp&show2=tw_par" target="_blank">How to get this?</a> </h2></td></tr>            
                
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

<tr><td nowrap="nowrap"><h2>Tweet Parameters <a href="http://tli.tl/images/wp3-twitter_post.jpg" target="_blank">what is this?</a></h2></td></tr>                            
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

            
<br /><br />
<b>**</b> If you got that error [ <b>Error Reported, We are sorry for that !</b> ]:-<br />
<b>-</b> that means that your blog is overloading our system by posting too many posts in asort time and it has been added to our black list.<br />
<b>-</b> if you want to be unbanned, send me your site's url and tell me that you was banned and a pomise to fix what was overloading us.<br />
        <b>**</b> My email is [ mohandez@hotmail.com ]


            <br /><br /><br />
<b>
<font color="red">
NOTE: tli.tl system upgrading has completed, every user should have an API key so that he can use the system.<br />
Please register an account <a href="http://tli.tl/register.php" target="_blank"> here </a> and get Your API.<br />
</font>
</b>

            
        </div>