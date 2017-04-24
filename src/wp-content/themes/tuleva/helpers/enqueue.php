<?php

class ThemeEnqueue {
    private function init() {
        add_action( 'wp_enqueue_scripts', array($this, 'enqueue_assets'), 12);
    }

    function __construct() {
        $this->init();
    }

    public function enqueue_assets() {
        $css_path = get_template_directory_uri() . '/css/';
        $js_path = get_template_directory_uri() . '/js/';

        $assets = [
            // CSS assets
            [
                'handle' => 'font-style',
                'src' => 'https://fonts.googleapis.com/css?family=Merriweather:400,400i,700,700i|Roboto:400,400i,500,500i,700,700i&amp;subset=latin-ext',
                'deps' => 'normalize',
                'ver' => '1.0.0',
                'media' => 'all',
                'enqueue' => true
            ],
            [
                'handle' => 'main-style',
                'src' => $css_path . 'main.css',
                'deps' => 'normalize',
                'ver' => '22042017',
                'media' => 'all',
                'enqueue' => true
            ],
            // JS assets
            [
                'handle' => 'jquery',
                'src' => $js_path . 'vendor/jquery-1.12.4.min.js',
                'ver' => '1.12.4',
                'js_in_header' => false,
                'enqueue' => true
            ],
            [
                'handle' => 'equalize',
                'src' => $js_path . 'vendor/equalize.min.js',
                'deps' => 'jquery',
                'ver' => '1.0.2',
                'js_in_header' => false,
                'enqueue' => true
            ],
            [
                'handle' => 'bootstrap',
                'src' => $js_path . 'vendor/bootstrap.min.js',
                'deps' => 'jquery',
                'ver' => '3.3.7',
                'js_in_header' => false,
                'enqueue' => true
            ],
            [
                'handle' => 'main-script',
                'src' => $js_path . 'main.js',
                'deps' => 'jquery',
                'ver' => '22042017',
                'js_in_header' => false,
                'enqueue' => true
            ]
        ];

        /* Get file that contains SimplyEnqueue class */
        require_once (get_template_directory() . '/lib/enqueue.php');

        // Deregisters jquery in case it was registered before
        wp_deregister_script('jquery');

        $enqueue = new SimplyEnqueue;
        $enqueue->register($assets);
        $enqueue->init_instance();
    }
}

new ThemeEnqueue;
