<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends Application {
    
	public function index()
	{
            $this->data[ 'menubar' ] = build_menu_bar( $this->choices, 'news' );
            $this->data[ 'pagebody' ] = 'news';
            $this->render();
	}
}
