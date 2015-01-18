<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * The Post Controller displays the "post" page view.
 * 
 * The post contents are pulled from the Posts model where the post id is
 * retrieved from the url.
 */
class Post extends Application {
    
	public function id( $post_index )
	{
            // Get the Post contents
            $post = $this->posts->post( $post_index );
            $post = $post[0];
            
            // Build the view and render it
            $this->data = array_merge( $this->data, $post );
            $this->data[ 'menubar' ] = build_menu_bar( $this->choices, 'post' );
            $this->data[ 'pagebody' ] = 'post';
            $this->render();
	}
}
