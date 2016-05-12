<?php namespace Laracasts\Flash;

interface SessionStore {

    /**
     * Flash a message to the session.
     *
     * @param $name
     * @param $data
     */
    public function flash($name, $data);
    
    /** 
     * Get data from session
     * 
     * @param $name
     */
    public function get($name);
} 