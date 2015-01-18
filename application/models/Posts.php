<?php

/**
 * Posts are news posts that are stored in a database. The class provides
 * methods for getting a single post, all posts, or the most popular posts.
 */
class Posts extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    
    /**
     * Get the details of the post with the given id. No error checking is
     * done to ensure the ID is an existing Post ID
     */
    function post( $id ) {
        $query = $this->db->get_where( 'posts', array( "id" => $id ) );
        return $this->format( $query->result_array() );
    }
    
    /**
     * Retrieve all posts from the database from newest to oldest.
     */
    function all() {
        $this->db->order_by( 'timestamp', 'desc' );
        $query = $this->db->get( 'posts' );
        return $this->format( $query->result_array() );
    }
    
    /**
     * Dummy function for retrieving the most popular posts. Currently behaves
     * exactly like "all"
     */
    function most_popular() {
        return $this->all();
    }
    
    /**
     * Format database results to the expected output.
     * Converts datetime timestamp to year, month, day array elements.
     */
    private function format( $posts ) {
        $retval = array();
        
        foreach( $posts as $post ) {
            $time = strtotime( $post['timestamp'] );
            $post[ 'year' ] = date( 'Y', $time );
            $post[ 'month' ] = date( 'F', $time );
            $post[ 'day' ] = date( 'd', $time );
            
            $retval[] = $post;
        }
        
        return $retval;
    }
}

