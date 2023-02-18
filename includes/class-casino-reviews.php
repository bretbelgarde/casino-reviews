<?php

class CasinoReviews {
    /* Static propert for Singleton Instace */
    static $instance = false;

    private function __construct() {
        
    }

    public static function getInstance() {
        if (!self::$instance) self::$instance = new self;
        
        return self::$instance;
    }
}