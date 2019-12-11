<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Main_model extends CI_Model 
{
  public function send_data()
  {
    $otp = mt_rand(100000,999999);
    $fullname = $this->input->post('Uname'); 
    // $gender = $this->input->post('Ugender');
    $email = $this->input->post('Uemail');
    $mobile = $this->input->post('Umobile');
    $usertype = 2;
    $password = $this->input->post('Upass');
    $data = array(
        'name' => $fullname,
        // 'gender' => $gender,
        'email' => $email,
        'mobile' =>  $mobile,
        'user_type_id' => $usertype,
        'otp' => $otp,
        'password' => $password
    );

    if($this->db->insert('users', $data))
    {
        $insert_id = $this->db->insert_id();
        return  array($insert_id);
    }
    else
    {
        return "Error";
    }
    }
    //INSERT QUERY FUNCTION FOR ADD NEW user IN DATABASE
    public function cnfrm_reg_otp($id, $otp)
    {
        // Prep the query
        $this->db->where('user_id', $id);
        $this->db->where('otp', $otp);
        $query = $this->db->get('users');
        return $query;
    }
    public function insert_otp($id)
    {
        // Prep the query
        $data = array('otp_verified' => 1, 'status' =>1);
        $this->db->where('user_id', $id);
        $this->db->update('users', $data);
    }
    public function login_user($email, $password)
    {
        // Prep the query
        $this->db->where(' email="'.$email.'" OR mobile="'.$email.'" ');
        // $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('users');
        return $query;
    }
    public function is_email_available($email)  
    {  
        $this->db->where('email', $email);  
        $query = $this->db->get("users"); 
        return $query;
    }
    public function is_phone_available($phone)  
    {  
        $this->db->where('mobile', $phone);  
        $query = $this->db->get("users");
        return $query; 
    }  

} //Main function end here

?>









		



