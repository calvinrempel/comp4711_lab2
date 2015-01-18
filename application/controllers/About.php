<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Application {
    
	public function index()
	{
            $this->data[ 'menubar' ] = build_menu_bar( $this->choices, 'about' );
            $this->data[ 'pagebody' ] = 'about';
            $this->render();
	}
}
