<?php
    class Product extends CI_Controller {

        public function index(){
            echo "This is simple message from Product controller";
        }

        public function list_products(){

            if ($this->session->userdata("is_active") == 1) {
                $data = array(
                   'page_content' => 'pages/list_products'
                );
                $this->load->view('layout/main_layout', $data);
            } else {
                $this->load->view('pages/login');
            }
        }        
    }