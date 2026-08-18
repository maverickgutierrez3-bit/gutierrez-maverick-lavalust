<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware implements Middleware {

    public function handle() {
        $is_allowed = true;

        if (!$is_allowed) {
            redirect('student/home');
            exit();
        }
    }
}