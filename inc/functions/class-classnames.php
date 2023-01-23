<?php
/**
 * Class Functions
 *
 * @package Tetloose-Theme
 **/

/**
 * Generate class names and attach to container or font
 **/
class ClassNames {
    /**
     * Public function Constructor
     *
     * @param array $container container array.
     * @param array $font font array.
     **/
    public function __construct( $container = [], $font = [] ) {
        $this->container = $container;
        $this->font = $font;
    }

    /**
     * Public function Container
     **/
    public function container() {
        return implode( ' ', preg_replace( '/,+/', ',', $this->container ) );
    }

    /**
     * Public function font
     **/
    public function font() {
        return implode( ' ', preg_replace( '/,+/', ',', $this->font ) );
    }
}

/**
 * Image class to handle images
 **/
class Image {
    /**
     * Public function constructor
     *
     * @param array $prefix prefix array.
     * @param array $sizes sizes array.
     * @param array $container container array.
     **/
    public function __construct( $prefix = [], $sizes = [], $container = [] ) {
        $this->prefix = $prefix;
        $this->sizes = $sizes;
        $this->container = $container;
    }

    /**
     * Public function prefix
     **/
    public function prefix() {
        return implode( ' ', preg_replace( '/,+/', ',', $this->prefix ) );
    }

    /**
     * Public function sizes
     **/
    public function sizes() {
        return implode( ' ', preg_replace( '/,+/', ',', $this->sizes ) );
    }

    /**
     * Public function container
     **/
    public function container() {
        return implode( ' ', preg_replace( '/,+/', ',', $this->container ) );
    }
}

/**
 * Button class for creating buttons
 **/
class Btn {
    /**
     * Public function constructor
     *
     * @param btn   $btn btn.
     * @param style $style style.
     **/
    public function __construct( $btn, $style ) {
        $this->btn = $btn;
        $this->style = $style;
    }

    /**
     * Public function title
     **/
    public function title() {
        return $this->btn['title'] ? $this->btn['title'] : '';
    }

    /**
     * Public function url
     **/
    public function url() {
        return $this->btn['url'] ? $this->btn['url'] : '';
    }

    /**
     * Public function target
     **/
    public function target() {
        return $this->btn['target'] ? $this->btn['target'] : '';
    }

    /**
     * Public function style
     **/
    public function style() {
        return $this->style ? 'btn__inside ' . $this->style : 'btn__inside';
    }
}
