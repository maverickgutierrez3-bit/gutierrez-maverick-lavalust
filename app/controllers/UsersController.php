<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UsersController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->call->model('Users_model');
    }
    public function index() {
        $data['users'] = $this->Users_model->get_all_users();
        $this->call->view('users_view', $data);
    }
}