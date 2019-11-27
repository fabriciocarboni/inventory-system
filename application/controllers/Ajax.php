<?php
/**
*Class to handle all Ajax requests
*/
    class Ajax extends CI_Controller {

        public function __construct(){
            //load parent's contructor to use the model controller
            //so we can use the methos in there
            parent::__construct();
            $this->load->model('app_model');
        }

        public function index(){
            echo "This is simple message from Ajax controller";
        }

        public function handle_ajax_requests(){

            $param = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";
            if (!empty($param)) {
                if ($param == 'save_category') {
                    $category_name = $this->input->post('txt_add_name');
                    $status = $this->input->post('dd_status');

                    $category_data = array(
                        'name' => $category_name,
                        'status' => $status
                    );
                    if($this->app_model->save_resource_data(tbl_categories(), $category_data)) {
                        $this->session->set_flashdata('success', 'Category added succesfully');
                    } else {
                        $this->session->set_flashdata('error','Failed to save category');
                    }
                    $this->json(1,"Category added successfully");
                }
            }
        }

        public function json($status, $message, $data = array()){
            
            $data = array(
                'sts' => $status,
                'message' => $message,
                'arr' => $arr
            );         
            print_r(json_encode($data));
            die;
        }
    }