<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UsersController extends Controller {

    public function __construct() {
        parent::__construct();
        // I-load ang Users_model
        $this->call->model('Users_model');
    }

    public function index() {
        // Kunin ang records mula sa model
        $data['users'] = $this->Users_model->get_all_users();
        
        // I-pass ang data sa view
        $this->call->view('users_view', $data);
    }
}