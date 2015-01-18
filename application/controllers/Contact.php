<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * The Contact Controller displays the "contact" page view.
 */
class Contact extends Application {
    
        /*
         * The index page for the Contact controller.
         * Shows the "contact" view.
         */
	public function index()
	{
            $this->data[ 'menubar' ] = build_menu_bar( $this->choices, 'contact' );
            $this->data[ 'pagebody' ] = 'contact';
            $this->render();
	}
}
