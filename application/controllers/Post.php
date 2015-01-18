<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * The Post Controller displays the "post" page view.
 * 
 * The post contents are pulled from the Posts model where the post id is
 * retrieved from the url.
 * 
 * This controller does not have an index method!
 */
class Post extends Application {
    
        /*
         * The individual post page for the Post controller.
         * Shows the contents of a post in the "post" view.
         * 
         * @param $post_index the id of the post to display.
         */
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
