<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * The Features Controller displays the "features" page view.
 */
class Features extends Application {
    
        /*
         * The index page for the Features controller.
         * Shows the "features" view.
         */
	public function index()
	{
            $this->data[ 'menubar' ] = build_menu_bar( $this->choices, 'features' );
            $this->data[ 'pagebody' ] = 'features';
            $this->render();
	}
}
