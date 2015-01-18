<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Features extends Application {
    
	public function index()
	{
            $this->data[ 'menubar' ] = build_menu_bar( $this->choices, 'features' );
            $this->data[ 'pagebody' ] = 'features';
            $this->render();
	}
}
