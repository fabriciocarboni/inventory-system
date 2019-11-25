<?php
    class Report extends CI_Controller {

        public function index(){
            echo "This is simple message from Report controller";
        }

        public function report_dashboard(){

            if ($this->session->userdata("is_active") == 1) {
                $data = array(
                   'page_content' => 'pages/reports_dashboard'
                );
                $this->load->view('layout/main_layout', $data);
            } else {
                $this->load->view('pages/login');
            }
        }        
    }