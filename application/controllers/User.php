<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	public function index()
	{
			$this->load->model('Product_model');
			$this->load->model('Product_category_model');
			$title['page_title']= "Cambodian farmer";
			$title['menu'] = "home";
			//$data['products']=$this->Product_model->where('ProductCategoryID',$category)->get_all();
			$data["product_categorys"] = $this->Product_category_model->get_all();
			//$data['category_menu'] = $category;
			$this->view("logins/login",$data,$title);
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
  public function login(){
      $this->load->model('User_model');
			$userName = $this->input->post("txtUserName");
			$password = $this->input->post("txtPassword");
      $user = $this->User_model->where(array(
        'UserEmail'=>$userName,
        'UserPassword'=>$password
      ))->get();
      if(!empty($user)){
          $data["user"] = $user;
          $data["status"] = 200;
          $data["message"] = "successed";
					$this->session->set_userdata('userName', $user->UserFirstName);
          echo json_encode($data);
      }
      else
      {
					//redirect(base_url('User'), 'refresh');
          $data["status"] = 500;
          $data["message"] = "failed";
          echo json_encode($data);
      }
  }

}
?>
