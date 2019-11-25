<?php
    class Brand extends CI_Controller {

        public function index(){
            echo "This is simple message from Brand controller";
        }

        public function list_brands(){

            if ($this->session->userdata("is_active") == 1) {
                $data = array(
                   'page_content' => 'pages/list_brands'
                );
                $this->load->view('layout/main_layout', $data);
            } else {
                $this->load->view('pages/login');
            }            
        }
    }