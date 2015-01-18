<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * The Welcome Controller displays the "home" page view.
 */
class Welcome extends Application {

	public function index() {
            // Display the home page
            $this->data[ 'menubar' ] = build_menu_bar( $this->choices, '/' );
            $this->data[ 'pagebody' ] = 'home';
            $this->render();
	}
}