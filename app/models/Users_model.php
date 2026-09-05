<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Users_model extends Model {

    public function __construct() {
        parent::__construct();
        // I-load ang database
        $this->call->database();
    }

    public function get_all_users() {
        // Kunin ang lahat ng rows sa 'users' table
        return $this->db->table('users')->get_all();
    }
}