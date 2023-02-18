<?php

class CasinoReviews {
    /* Static propert for Singleton Instace */
    static $instance = false;

    /** 
     * Constructor
     * 
     * @return void
     */
    private function __construct() {
       add_shortcode('crdisplay', [$this, 'cr_display']);
    }

    /**
     * Returns existing instance or creates new one
     * 
     * @return CasinoReviews
     */
    public static function getInstance() {
        if (!self::$instance) self::$instance = new self;
        
        return self::$instance;
    }

    /**
     * cr_display shortcode
     * 
     * @return string
     * */
    public function cr_display($attr) {
        $key = sanitize_key($attr['key']);
        return "KEY = {$key}";
    }
}