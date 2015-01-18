<?php

class Application extends CI_Controller {
    
    protected $data = array();
    protected $id;
    protected $choices = array(
        'Home'      => '/',
        'Features'  => 'features',
        'News'      => 'news',
        'About'     => 'about',
        'Contact'   => 'contact'
    );
    
    function __construct() {
        parent::__construct();
        $this->data = array();
        $this->data[ 'pagetitle' ] = "COMP 4711 - Lab2";
    }
    
    function render() {
        $this->data[ 'content' ] = $this->parser->parse( $this->data[ 'pagebody'],
                                                         $this->data,
                                                         true );
        $this->data[ 'data' ] = &$this->data;
        $this->parser->parse( '_template', $this->data );
    }
}
