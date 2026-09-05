<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Student extends Controller {
    
    public function profile() {
        $data['student'] = [
           'student_id' => 'MCC2024-00238',
            'name'       => 'Maverick Telmo Gutierrez',
            'course'     => 'BSIT',
            'year'       => '3nd Year',
            'email'      => 'maverickgutierrez3@gmail.com',
            'address'    => 'Bayanan II, Calapan City',
            'skills'     => 'PHP, MySQL, JavaScript',
            'hobbies'    => 'Coding, Web Design'
        ];

        $this->call->view('student_profile', $data);
    }
}