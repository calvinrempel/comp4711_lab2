<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * The About Controller displays the "about" page view.
 */
class About extends Application {
    
        /*
         * The index page for the About controller.
         * Shows the "about" view.
         */
	public function index()
	{
            $this->data[ 'menubar' ] = build_menu_bar( $this->choices, 'about' );
            $this->data[ 'pagebody' ] = 'about';
            $this->render();
	}
}
