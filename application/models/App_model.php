<?php
    class App_model extends CI_Model{

        public function is_admin_exists($email, $password){

            $this->db->select('*');
            $this->db->from(tbl_users());
            $this->db->where([
                'email' => $email,
                'password' => md5($password)
            ]);

            $query = $this->db->get();
            $result = $query->row();

            if(!empty($result)){
                return true;
            } else {
                return false;
            }
        }

        public function get_category_data($category_id){
            $this->db->select("*");
            $this->db->from(tbl_categories());
            $this->db->where("id", $category_id);
            $query = $this->db->get();
            return $query->row();

        }

        public function get_resource_data($tbl_name){

            $this->db->select("*");
            $this->db->from($tbl_name);
            $query = $this->db->get();
            return $query->result();
        }

        public function edit_resource_data($tbl_name, $data, $conditions){
            $this->db->where($conditions);
            $result = $this->db->update($tbl_name, $data);

            return true;

        }

        public function delete_resource_data($tbl_name, $conditions){
            
            $this->db->delete($tbl_name, $conditions);

            return true;
        }

        public function save_resource_data($tbl_name, $data = array()){

            $this->db->insert($tbl_name, $data);
      
            return true;
        }
    }

//example of complex query where we dont need to use query builder
//     $sql  = "SELECT 
//     a.ar, 
//     a.jabatan, 
//     COUNT(*) AS JumlahWPBaru, 
//     SUM( 
//         CASE WHEN a.no_shim IS NOT NULL 
//         THEN 1 
//         WHEN a.no_shim IS NULL 
//         THEN 0 
//         END ) AS JumlahHimbauan
//     FROM (

//     SELECT 
//         a.ar, 
//         c.jabatan, 
//         a.npwp, 
//         a.kpp, 
//         a.cab, 
//         a.namawp, 
//         b.kd_shim, 
//         b.no_shim, 
//         b.tgl_shim
//     FROM mfwpbudi a
//     LEFT JOIN tb_shimbauan b ON ( a.npwp = b.npwp ) 
//     LEFT JOIN easystp_user c ON ( SUBSTR( a.ar, 1, 9 ) = c.id_user ) 
//     WHERE a.tanggal_daftar >  '2013-12-31'
//     AND c.jabatan =  '05E'
//     ) AS a
//     GROUP BY a.ar";

// $query = $this->db->query($sql);
// $result = $query->result_array();
// return $result;