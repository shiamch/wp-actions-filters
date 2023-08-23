<?php
/**
 * Plugin Name: Action & Filter Demo Plugin
 * Description: A WordPress plugin to demonstrate actions and filters.
 * Version: 1.0.0
 * Author: Shiam Chowdhury
 */

namespace ActionFilterDemo;

class Plugin {
    public function __construct() {
        // Add actions
        add_action('init', array($this, 'init_action'));
        add_action('custom_action', array($this, 'custom_action'));

        // Add filters
        add_filter('the_content', array($this, 'the_content_filter'));
        add_filter('custom_filter', array($this, 'custom_filter'));
    }

    // Built-in action hook 'init'
    public function init_action() {
        error_log('Built-in action hook "init" was triggered.');
    }

    // Custom action hook 'custom_action'
    public function custom_action() {
        error_log('Custom action hook "custom_action" was triggered.');
    }

    // Built-in filter hook 'the_content'
    public function the_content_filter($content) {
        $modified_content = $content . '<p>This is a built-in filter hook example hello.</p>';
        return $modified_content;
    }

    // Custom filter hook 'custom_filter'
    public function custom_filter($data) {
        $modified_data = $data . ' This is a custom filter hook example. ';
        return $modified_data;
    }
}

// Instantiate the plugin class
$plugin = new Plugin();

//write these code in theme's php file to test custom filter
//$original_data = 'This is some original data.';
//$modified_data = apply_filters('custom_filter', $original_data);
//echo $modified_data;