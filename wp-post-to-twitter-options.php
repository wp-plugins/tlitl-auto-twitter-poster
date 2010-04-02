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
        </div>