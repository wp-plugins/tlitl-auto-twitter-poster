<?php
require_once dirname (__FILE__ . '/twitter.php');
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
        <h2>TLI.TL Twitterer</h2>
        <form method="post" action="options.php">
        <?php wp_nonce_field('update-options'); ?>
            <table id="twitter-setting-form" class="form-table">
                <tr>
                    <th scope="row"><label for="twitter_username"><?=__('Twitter Username');?></label></th>
                    <td><input type="text" class="regular-text" name="wp_post_to_twitter_twitter_username" id="twitter_username" value="<?=$user;?>" /></td>
                </tr>
                <tr>
                    <th scope="row"><label for="twitter_password"><?=__('Twitter Password');?></label></th>
                    <td><input type="password" class="regular-text" name="wp_post_to_twitter_twitter_password" id="twitter_password" value="<?=$pass;?>" /></td>
                </tr>
                <tr>
                    <th scope="row"><label for="twitter_prefix"><?=__('Tweet Prefix');?></label></th>
                    <td><input type="text" class="regular-text" name="wp_post_to_twitter_twitter_prefix" id="twitter_prefix" value="<?=$prefix;?>" /></td>
                </tr>                
            </table>
            	<input type="hidden" name="action" value="update" />
            	<input type="hidden" name="page_options" value="wp_post_to_twitter_twitter_username,wp_post_to_twitter_twitter_password,wp_post_to_twitter_twitter_prefix" />
                <p class="submit"><input type="submit" name="update" value="<?=__('Save Changes');?>" /></p>
            </form>

            
<br /><br />
<b>**</b> If you got that error [ <b>Error Reported, We are sorry for that !</b> ]:-<br />
<b>-</b> that means that your blog is overloading our system by posting too many posts in asort time and it has been added to our black list.<br />
<b>-</b> if you want to be unbanned, send me your site's url and tell me that you was banned and a pomise to fix what was overloading us.<br />
        <b>**</b> My email is [ mohandez@hotmail.com ]


            <br /><br /><br />
<b>
<font color="red">
NOTE: TLI.TL system upgrading has completed, every user should have an API key so that he can use the system.<br />
Please register an account <a href="http://tli.tl/register.php" target="_blank"> here </a> and get Your API.<br />
<br />
Please wait another update for this plugin very soon. The current Plugin version wont work after the next update.
<br /><br />
Thank you
<br />
Abdallah Khashaba
<br />
TLI.TL Administrator
</font>
</b>

            
        </div>