

<?php
class Blog_model extends CI_Model {
    
    public function create_blog($data) {
        return $this->db->insert('blogs', $data);
    }


        public function get_all_blogs() {
            return $this->db->get('blogs')->result_array();
            }

 

    public function get_blog_by_id($id) {
        return $this->db->get_where('blogs', array('id' => $id))->row_array();
    }
               
    public function update_blog($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('blogs', $data);
    }

    
    public function delete_blog($id) {
        $this->db->where('id', $id);
        return $this->db->delete('blogs');
    }
}
?>
