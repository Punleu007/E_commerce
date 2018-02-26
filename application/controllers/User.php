<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	public function index()
	{

  }
  public function insert(){
      $this->load->model('User_model');
      //$this->input->post('something');
      $this->User_model->insert(array(
        'UserEmail' => '',
        'UserPassword' => '',
        'UserFirstName' => '',
        'UserLastName' => '',
        'UserCity' => '',
        'UserState' => '',
        'UserZip' => '',
        'UserEmailVerified' => '',
        'UserRegistrationDate' => '',
        'UserVerificationCode' => '',
        'UserIP' => '',
        'UserPhone' => '',
        'UserFax' => '',
        'UserCountry' => '',
        'UserAddress' => '',
        'UserAddress2' => '',
        'UserID' => ''
      ));
  }
  public function login($userName,$password){
      $this->load->model('User_model');
      $user = $this->User_model->where(array(
        'UserEmail'=>$userName,
        'UserPassword'=>$password
      ))->get();
      if(!empty($user)){
          $data["user"] = $user;
          $data["status"] = 200;
          $data["message"] = "successed";
          echo json_encode($data);
      }
      else
      {
          $data["status"] = 500;
          $data["message"] = "failed";
          echo json_encode($data);
      }
  }

}
?>
