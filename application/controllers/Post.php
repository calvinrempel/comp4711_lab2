<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends Application {
    
	public function id( $post_index )
	{
            $post = $this->posts->post( $post_index );
            $post = $post[0];
            
            $this->data = array_merge( $this->data, $post );
            $this->data[ 'menubar' ] = build_menu_bar( $this->choices, 'post' );
            $this->data[ 'pagebody' ] = 'post';
            $this->render();
	}
}
