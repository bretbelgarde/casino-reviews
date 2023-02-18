<?php

/**
 * Casino Reviews
 * 
 * @author Bret Belgarde
 * @version 0.0.1
 * 
 * @wordpress-plugin
 * Plugin Name: Casino Reviews
 * Description: Casino Review Plugin
 * Version: 0.0.1
 * Author: Bret Belgarde
 */

if (!defined('ABSPATH')) exit;

//Plugin Constants
define('CR_PLUGIN_FILE', __FILE__);
define('CR_PLUGIN_DIR',  plugin_dir_path(CR_PLUGIN_FILE));

// Casino Review Data Endpoint
define('CR_ENDPOINT_URL', 'http://mock.test/get');
define('CR_ENDPOINT_KEY', 'toplists');

// Class Loader
if (!class_exists('CasinoReviews')) {
    require_once CR_PLUGIN_DIR . 'includes/class-casino-reviews.php';
}

$casino_reviews = CasinoReviews::getInstance();