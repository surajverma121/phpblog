<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {


    public function register($data) {
        return $this->db->insert('user', $data);
    }

    public function get_user($email) {
        return $this->db->where('email', $email)->get('user')->row_array();
    }
    public function get_all_User() {
        return $this->db->get('user')->result_array();
        }

        public function delete_blog($id) {
            $this->db->where('id', $id);
            return $this->db->delete('blogs');
        }
        public function delete_user($id){
            $this->db->where('id',$id);
            return $this->db->delete('user');
        }
        public function get_user_by_id($id) {
            return $this->db->get_where('user', ['id' => $id])->row_array();
        }
        

        public function update_role($id, $role) {
            $this->db->where('id', $id);
            return $this->db->update('user', ['role' => $role]);
        }
  

}
?>
