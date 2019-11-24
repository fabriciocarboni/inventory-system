<?php
    class Admin extends CI_Controller {

        public function __construct(){

            parent::__construct();
            $this->load->model('app_model');
        }


        public function index(){

            $this->load->view('pages/login');

        }

        public function validate_login_details(){
            $login_details = $this->input->post(); //get data passed through the form

            $email = isset($login_details['txt_email']) ? $login_details['txt_email'] : '';
            $password = isset($login_details['txt_password']) ? $login_details['txt_password'] : '';
            //$password = isset($login_details['txt_password']) ? $login_details['txt_password'] : '';

            if ($this->app_model->is_admin_exists($email, $password)) {
                echo "logged in";
            } else {
                echo "error";
            }
        }
    }