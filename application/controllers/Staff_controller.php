<?php
  class Staff_controller extends CI_Controller {
    function __construct(){
      parent::__construct();
      $this->load->helper('url');
      $this->load->database();
    }

    public function view_staff() {
      $query = $this->db->get("staff");
      $data['records'] = $query->result(); 
      
      $this->load->helper('url'); 
      $this->load->view('admin/p_admin',$data); 
    }

    // public function load_add_staff_view(){
    //   $this->load->helper('form');
    //   $this->load->view('admin/staff/staff_add');
    // }

    // public function add_staff() {
    //   $this->load->model('Staff_Model');

    //   $data = array(
    //     'id' => $this->input->post('id'),
    //     'staffname' => $this->input->post('staffname'),
    //     'gender' => $this->input->post('gender'),
    //     'dob' => $this->input->post('dob'),
    //     'phone' => $this->input->post('phone'),
    //     'address' => $this->input->post('address')
    //   );

    //   $this->Staff_Model->insert_staff($data);

    //   $query = $this->db->get("staff"); 
    //   $data['records'] = $query->result(); 
    //   $this->load->view('admin/staff/staff_view', $data)
    // }

    // public function load_edit_staff_view() {
    //   $this->load->helper('form'); 
    //   $id = $this->uri->segment('3'); 
    //   $query = $this->db->get_where("staff",array("id"=>$id));
    //   $data['records'] = $query->result(); 
    //   $data['old_staff_id'] = $id; 
    //   $this->load->view('staff/staff_edit',$data);
    // }

    // public function update_staff() {
    //   $this->load->model('Staff_Model');
      
    //   $data = array( 
    //     'id' => $this->input->post('id'), 
    //     'staffname' => $this->input->post('staffname'),
    //     'gender' => $this->input->post('gender'),
    //     'dob' => $this->input->post('dob'),
    //     'phone' => $this->input->post('phone'),
    //     'address' => $this->input->post('address')
    //   ); 
    
    //   $old_staff_id = $this->input->post('old_staff_id'); 
    //   $this->Staff_Model->update_staff($data, $old_staff_id); 
    
    //   $query = $this->db->get("staff"); 
    //   $data['records'] = $query->result(); 
    //   $this->load->view('staff/staff_view', $data); 
    // }

    // public function delete_staff() {
    //   $this->load->model('Staff_Model'); 
    //   $id = $this->uri->segment('3'); 
    //   $this->Staff_Model->delete($id); 
 
    //   $query = $this->db->get("staff"); 
    //   $data['records'] = $query->result(); 
    //   $this->load->view('staff/staff_view', $data); 
    // }

  }
?>