<?php // @codingStandardsIgnoreLine
/**
 * GuinRank SEO Plugin.
 *
 * @package      GuinRank
 * @copyright    Copyright (C) 2020-2022, GuinRank - support@guinrank.com
 * @link         https://www.guinrank.com
 * @since        0.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       GuinRank SEO
 * Version:           1.0.0
 * Plugin URI:        https://www.gunrank.com/?af=WP
 * Description:       Create Content That Google Wants to Rank, The Ultimate SEO Content Optimization Tool, A professional toolkit for Content Kings.
 * Author:            GuinRank
 * Author URI:        https://www.guinrank.com
 * License:           GPL v3
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       guinrank
 * Domain Path:       /
 */


 //Inject GuinRank JS fILE TO Integration with GuinRank Extensions
 //GuinRank Extensions link=> https://chrome.google.com/webstore/detail/guinrank-seo/ljmjlgpdkdjifcjichoaadpjdfklmnhk
function guinrank_enqueue($hook) {
    // Only add to the post admin page.
    if ('post.php' == $hook || 'post-new.php' == $hook ) {
      wp_enqueue_script('guinrank_inject_script', plugin_dir_url(__FILE__) . 'Assets/JS/Editor.min.js');
    }
    else
    {
        return;
    }
}

add_action('admin_enqueue_scripts', 'guinrank_enqueue');



 ?>