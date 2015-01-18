<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * The News Controller displays the "news" page view.
 * 
 * News posts are pulled from the Posts model to populate the view.
 */
class News extends Application {
    
        /*
         *  The length of the post body to show in the "all news" section.
         */
        const ALL_POSTS_BODY_LENGTH = 200;
        
        /*
         * The length of the post body to show in the "most popular" section.
         */
        const SIDEBAR_POSTS_BODY_LENGTH = 100;
    
        /*
         * The index page for the News controller.
         * Shows the "news" view with a list of all News posts as well as a
         * siebar containing the most popular posts.
         */
	public function index()
	{
            // Retrieve posts from the Posts model
            $posts = $this->posts->all();
            $featured_posts = $this->posts->most_popular();
            
            // Initialize post output html
            $this->data[ 'posts' ] = '';
            $this->data[ 'sidebar_posts' ] = '';
            
            // Create the "all posts" section
            foreach ( $posts as $post ) {
                $post[ 'body' ] = substr( $post[ 'body' ], 0, News::ALL_POSTS_BODY_LENGTH );
                $this->data[ 'posts' ] .= $this->parser->parse( '_post_snippet_template', (array) $post, true );
            }
            
            // Create the "most popular posts" section
            foreach ( $featured_posts as $post ) {
                $post[ 'body' ] = substr( $post[ 'body'], 0, News::SIDEBAR_POSTS_BODY_LENGTH );
                $this->data[ 'sidebar_posts' ] .= $this->parser->parse( '_post_sidebar_template', (array) $post, true );
            }
            
            // Setup the menu and view and render the page.
            $this->data[ 'menubar' ] = build_menu_bar( $this->choices, 'news' );
            $this->data[ 'pagebody' ] = 'news';
            $this->render();
	}
}
