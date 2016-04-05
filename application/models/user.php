<?php
  Class User extends CI_Model {
    public function __construct() {
      $this->load->database();
    }

    function login($username, $password) {
      $this -> db -> select('id, username, password');
      $this -> db -> from('users');
      $this -> db -> where('username', $username);
      $this -> db -> where('password', MD5($password));
      $this -> db -> limit(1);

      $query = $this -> db -> get();

      if($query -> num_rows() == 1) {
        return $query->result();
      }
      else {
        return false;
      }
    }

    function get_userlist() {
      $query = $this->db->get('users');
      return $query->result_array();
    }
    
  }
?>