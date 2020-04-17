<?php

class Users extends Controller
{
    public function __construct()
    {
        # code...
    }

    public function register()
    {
        # check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process the form
        } else {
            // Init data
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];

            $this->view('users/register', $data);
        }
    }

    public function login()
    {
        # check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process the form
        } else {
            // Init data
            $data = [
                
                'email' => '',
                'password' => '',
                'email_err' => ''
                
            ];

            $this->view('users/login', $data);
        }
    }
}
