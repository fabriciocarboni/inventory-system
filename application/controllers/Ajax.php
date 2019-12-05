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
                    $opt_type = $this->input->post('opt_type');
                    $edit_id = $this->input->post('edit_id');

                    $category_data = array(
                        'name' => $category_name,
                        'status' => $status
                    );
                }

                if($opt_type == "add"){

                    if($this->app_model->save_resource_data(tbl_categories(), $category_data)) {
                        $this->session->set_flashdata('success', 'Category added succesfully');
                    } else {
                        $this->session->set_flashdata('error','Failed to save category');
                    }
                    $this->json(1,"Category added successfully");

                } elseif ($opt_type == "edit") {
                        
                    if($this->app_model->edit_resource_data(tbl_categories(), $category_data,  array("id" => $edit_id))) {
                        $this->session->set_flashdata('success', 'Category edited succesfully');
                    } else {
                        $this->session->set_flashdata('error','Failed to edit category');
                    }
                    
                } elseif ($param == 'get_category') {

                    $category_id = isset($_REQUEST['category_id']) ? $_REQUEST['category_id'] : "";

                    if(!empty($category_id)) {
                        $category_data = $this->app_model->get_category_data($category_id);
                        $this->json(1,"category data", array("data" => $category_data));
                    } else {
                        $this->session->set_flashdata('error','Failed to get the category data');
                    }
                } elseif($param == "delete_category"){
                    $cat_id = isset($_REQUEST['delete_id']) ? $_REQUEST['delete_id'] : "";
          
                    if(!empty($cat_id)){
          
                      if($this->app_model->delete_resource_data(tbl_categories(),array("id" => $cat_id))){
          
                        $this->session->set_flashdata("success","Category deleted successfully");
                      }else{
                        $this->session->set_flashdata("error","Failed to delete category");
                      }
                    }
                }
            }

        }

        public function json($status,$message,$arr = array()){
            $data = array("sts" => $status, "message" => $message, "arr" => $arr);
            print_r(json_encode($data));
            die;
        }
}
    