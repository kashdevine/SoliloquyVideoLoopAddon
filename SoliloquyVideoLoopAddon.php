<?php
/**
 * Plugin Name:       Soliloquy Video Loop Addon
 * Description:       Adds the looping functionality to a Soliloquy Video
 * Version:           1.00.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            IDX Broker
 * Author URI:        https://idxbroker.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */


function activateAddon()
{
    flush_rewrite_rules(); 
};

function deactivateAddon(){
    flush_rewrite_rules(); 
}

function addAddOnJS(){
    echo '
    <script>
    document.addEventListener("onload", function (){
        let vid = document.getElementById("10562-homepagevideo-holder_html5");
        vid.loop = true;
    });
    </script>
    ';
}

add_action('wp_body_open', 'addAddOnJS');

register_activation_hook( __FILE__, 'activateAddon' );
register_deactivation_hook( __FILE__, 'deactivateAddon' );
register_uninstall_hook(__FILE__, 'pluginprefix_function_to_run');