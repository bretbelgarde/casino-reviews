<?php

class CasinoReviews {
    /* Static propert for Singleton Instace */
    static $instance = false;
    private $http;

    /** 
     * Constructor
     * 
     * @return void
     */
    private function __construct() {
        $this->http = new WP_Http;

        add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);

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
     * @return void
     */
    public function cr_display($atts = []) {
        $key = sanitize_key($atts['key']);
        $reviews = $this->get_reviews($key);

        return $this->cr_tmpl($reviews);
    }

    /** 
     * Shortcode template loading function  
     * 
     * @return void
     * */
    public function cr_tmpl($reviews) {
        ob_start();
        include CR_PLUGIN_DIR . 'includes/cr-tmpl.php';
        $template = ob_get_contents();
        ob_end_clean();

        return $template;
    }

    /**
     * Enqueue CSS and JS files
     * 
     * @return void
     */
    public function enqueue_scripts() {
        wp_register_style('crstyles', plugins_url('/css/cr-style.css', CR_PLUGIN_FILE));
        wp_enqueue_style('crstyles');

        wp_enqueue_script('crfa', '//kit.fontawesome.com/41d1b2c95d.js');
        
    }
    /**
     * takes toplist key and returns data for that key
     * returns a string in the case of an error
     * 
     * @return array|string 
     */
    private function get_reviews($key) {
        $results = $this->http->request(CR_ENDPOINT_URL);

        // WP_Http returns an error object for some failures
        if ($results instanceof WP_Error) {
            return "Request Failed: {$results->errors['http_request_failed'][0]}";
        }

        // Check for success on the http request
        if ($results["response"]["code"] != 200) {
            return "Request Failed: {$results["response"]['code']}-{$results["response"]['message']}";
        }

        $body = json_decode($results['body'], true);
        $reviews = $body[CR_ENDPOINT_KEY][$key];

        // Sort reviews by position
        usort($reviews, function($prev, $curr){
            return $prev <=> $curr;
        });

         return $reviews;
    }
}