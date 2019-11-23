<?php
    class Admin extends CI_Controller {

        public function index(){
            echo "This is simple message from admin controller";
            echo '<br/>';
            echo tbl_brands();

        }
    }