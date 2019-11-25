<?php
    class Category extends CI_Controller {

        public function index(){
            echo "This is simple message from Category controller";
        }

        public function list_categories(){

            if ($this->session->userdata("is_active") == 1) {
                $data = array(
                   'page_content' => 'pages/list_categories'
                );
                $this->load->view('layout/main_layout', $data);
            } else {
                $this->load->view('pages/login');
            }
        }
    }