<?php
    class Order extends CI_Controller {

        public function index(){
            echo "This is simple message from Order controller";
        }

        public function list_orders(){

            if ($this->session->userdata("is_active") == 1) {
                $data = array(
                   'page_content' => 'pages/list_orders'
                );
                $this->load->view('layout/main_layout', $data);
            } else {
                $this->load->view('pages/login');
            }
        }
    }