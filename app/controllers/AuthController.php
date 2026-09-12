<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->model('UserModel');
    }

    public function login()
    {
        // kung naka-login na, diretso na sa products
        if ($this->session->has_userdata('user_id')) {
            redirect('products');
        }

        $data['error'] = $this->session->flashdata('error');
        $this->call->view('auth/login', $data);
    }

    public function authenticate()
    {
        $username = trim($this->io->post('username'));
        $password = $this->io->post('password');

        $user = $this->UserModel->find_by_username($username);

        if ($user && password_verify($password, $user->password)) {
            $this->session->set_userdata([
                'user_id'  => $user->id,
                'username' => $user->username,
            ]);
            redirect('products');
        } else {
            $this->session->set_flashdata('error', 'Invalid username or password.');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}