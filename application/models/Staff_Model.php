<?php
  class Staff_Model extends CI_Model {
    public function __construct() {
      parent::__construct();
    }

    public function insert_staff($staff) {
      if ($this->db->insert("staff", $staff)) { 
        return true; 
      }
    }

    public function update_staff($staff, $old_staff_id) { 
      $this->db->set($staff); 
      $this->db->where("id", $old_staff_id); 
      $this->db->update("staff", $staff); 
    } 

    public function delete_staff($staff_id) { 
      if ($this->db->delete("staff", "id = ".$staff_id)) { 
        return true; 
      } 
    } 
   
    





  }
?>