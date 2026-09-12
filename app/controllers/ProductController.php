<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        // Session-based authentication guard
        if (!$this->session->has_userdata('user_id')) {
            $this->session->set_flashdata('error', 'Please log in first.');
            redirect('login');
        }

        $this->call->model('ProductModel');
    }

    public function index()
    {
        $data['products'] = $this->ProductModel->get_all_products();
        $data['username'] = $this->session->userdata('username');
        $this->call->view('products/index', $data);
    }

    public function create()
    {
        if ($_POST) {
            $this->ProductModel->create_product([
                'product_name' => trim($this->io->post('product_name')),
                'description'  => trim($this->io->post('description')),
                'price'        => (float) $this->io->post('price'),
                'quantity'     => (int) $this->io->post('quantity'),
                'created_at'   => date('Y-m-d H:i:s'),
            ]);
            redirect('products');
        } else {
            $this->call->view('products/create');
        }
    }

    public function edit($id)
    {
        if ($_POST) {
            $this->ProductModel->update_product($id, [
                'product_name' => trim($this->io->post('product_name')),
                'description'  => trim($this->io->post('description')),
                'price'        => (float) $this->io->post('price'),
                'quantity'     => (int) $this->io->post('quantity'),
            ]);
            redirect('products');
        } else {
            $data['product'] = $this->ProductModel->get_product($id);
            $this->call->view('products/edit', $data);
        }
    }

    public function delete($id)
    {
        $this->ProductModel->delete_product($id);
        redirect('products');
    }
}