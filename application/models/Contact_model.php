
<?php
class Contact_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert_contact($data)
    {
        return $this->db->insert('contact', $data);
    }

    public function getquery()
    {
        return $this->db->get('contact')->result_array();
    }


    public function delete_query($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('contact');
    }
}
?>
