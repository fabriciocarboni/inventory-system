<?php
    class Settings extends CI_Controller {

        public function index(){
            echo "This is simple message from Settings controller";
        }

        public function profile_settings(){

            if ($this->session->userdata("is_active") == 1) {
                $data = array(
                   'page_content' => 'pages/profile_settings'
                );
                $this->load->view('layout/main_layout', $data);
            } else {
                $this->load->view('pages/login');
            }
        }

        public function currency_settings(){

            if ($this->session->userdata("is_active") == 1) {
                $data = array(
                   'page_content' => 'pages/currency_settings'
                );
                $this->load->view('layout/main_layout', $data);
            } else {
                $this->load->view('pages/login');
            }
        }

        public function product_image_settings(){

            if ($this->session->userdata("is_active") == 1) {
                $data = array(
                   'page_content' => 'pages/product_image_settings'
                );
                $this->load->view('layout/main_layout', $data);
            } else {
                $this->load->view('pages/login');
            }
        }

        public function footer_settings(){

            if ($this->session->userdata("is_active") == 1) {
                $data = array(
                   'page_content' => 'pages/footer_settings'
                );
                $this->load->view('layout/main_layout', $data);
            } else {
                $this->load->view('pages/login');
            }
        }
        
    }