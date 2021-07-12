<?php
/*
Author: Beaver Coffee
Author URI: https://beaver.coffee
Description: Hide after wpcf7mailsent DOM event.
Domain Path:
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Network: true
Plugin Name: BC CF7 Submission
Plugin URI: https://github.com/beavercoffee/bc-cf7-submission
Requires at least: 5.7
Requires PHP: 5.6
Text Domain: bc-cf7-submission
Version: 1.7.9.2
*/

if(defined('ABSPATH')){
    require_once(plugin_dir_path(__FILE__) . 'classes/class-bc-cf7-submission.php');
    BC_CF7_Submission::get_instance(__FILE__);
}
