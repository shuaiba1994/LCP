<?php

  class Post_model extends CI_Model
  {

    function __construct()
    {
      $this->load->database();
    }

    public function get_users($slug=FALSE){
      if($slug==FALSE){
        $query = $this->db->get('user');
        return $query->result_array();
      }
      $query = $this->db->get_where('user', array('slug' => $slug));
      return $query->row_array();
    }

    public function get_quiz($qn){

      $query = $this->db->get_where('quiz', array('quiz_no' => $qn));
      return $query->result_array();
    }

    public function get_20quiz($qn){
      $this->db->order_by('rand()');
      $this->db->limit(20);
      $query = $this->db->get_where('quiz', array('quiz_no' => $qn));
      return $query->result_array();
    }

    public function get_quiz_by_id($id){

      $query = $this->db->get_where('quiz', array('quiz_id' => $id));
      return $query->row_array();
    }


    public function delete_quiz($qn){

      $query = $this->db->delete('quiz', array('quiz_id' => $qn));

    }

    public function set_register(){
      $data = array(
        'user_name' => $this->input->post('name'),
        'user_email' => $this->input->post('email'),
        'user_pass' => $this->input->post('pass'),
       );
      return $this ->db->insert('user',$data);
    }

    public function set_addquiz(){
      $data = array(
        'quiz_q' => $this->input->post('question'),
        'quiz_op1' => $this->input->post('op1'),
        'quiz_op2' => $this->input->post('op2'),
        'quiz_op3' => $this->input->post('op3'),
        'quiz_op4' => $this->input->post('op4'),
        'quiz_ans' => $this->input->post('ans'),
        'quiz_no' => $this->input->post('quizno'),
       );
      return $this ->db->insert('quiz',$data);
    }

    public function log_verify(){
      $query = $this->db->get_where('user', array('user_email' =>$this->input->post('email'),'user_pass' =>$this->input->post('pass')));
      return $query;
    }

    public function set_image($value){
       $v=array('user_img' => $value);
       $this->db->where('user_id',$this->session->userdata('user_id'));
       $query =$this->db->update('user',$v);
      return $query;
    }


  }



 ?>
