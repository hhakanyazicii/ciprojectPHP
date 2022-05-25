<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Signup_Model extends CI_Model{

	public function insert($fname,$lname,$emailid,$mnumber,$password,$status){
$data=array(
			'firstName'=>$fname,
			'lastName'=>$lname,
			'emailId'=>$emailid,
			'mobileNumber'=>$mnumber,
			'userPassword'=>$password,
			'isActive'=>$status
		);
$sql_query=$this->db->insert('tblusers',$data);
if($sql_query){
$this->session->set_flashdata('success', 'Kayıt başarılı');
		redirect('user/signup');
	}
	else{
		$this->session->set_flashdata('error', 'Birşey yanlış gitti!');
		redirect('user/signup');
	}

	}


}