<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends Application {
    
	public function index()
	{
            $this->data[ 'menubar' ] = build_menu_bar( $this->choices, 'post' );
            $this->data[ 'pagebody' ] = 'post';
            $this->render();
	}
}
