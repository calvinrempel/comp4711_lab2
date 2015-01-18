<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends Application {
    
        const ALL_POSTS_BODY_LENGTH = 200;
        const SIDEBAR_POSTS_BODY_LENGTH = 100;
    
	public function index()
	{
            $posts = $this->posts->all();
            $featured_posts = $this->posts->most_popular();
            
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
            
            $this->data[ 'menubar' ] = build_menu_bar( $this->choices, 'news' );
            $this->data[ 'pagebody' ] = 'news';
            $this->render();
	}
}
