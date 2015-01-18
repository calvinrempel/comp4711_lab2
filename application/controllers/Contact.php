<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * The Contact Controller displays the "contact" page view.
 */
class Contact extends Application {
    
	public function index()
	{
            $this->data[ 'menubar' ] = build_menu_bar( $this->choices, 'contact' );
            $this->data[ 'pagebody' ] = 'contact';
            $this->render();
	}
}
