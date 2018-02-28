<?php

class Api extends MY_Controller {

  public function login(){
      $this->load->model('User_model');
      $userName = $this->input->post('username');
      $password = $this->input->post('password');
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
  public function createUser(){
      $this->load->model('User_model');

      $user = $this->User_model->insert(array(
        'UserEmail' => $this->input->post("userEmail"),
        'UserPassword' => $this->input->post("userPassword"),
        'UserFirstName' => $this->input->post("userFirstName"),
        'UserLastName' => $this->input->post("userLastName"),
        'UserCity' => $this->input->post("userCity"),
        'UserState' => $this->input->post("userState"),
        'UserZip' => $this->input->post("userZip"),
        'UserEmailVerified' => 'ff',
        'UserRegistrationDate' => date("Y-m-d H:i:s"),
        'UserVerificationCode' => '3434',
        'UserIP' => '111',
        'UserPhone' => $this->input->post("userPhone"),
        'UserFax' => '012',
        'UserCountry' => $this->input->post("userCountry"),
        'UserAddress' => $this->input->post("userAddress"),
        'UserAddress2' => '3dfgs'
      ));
      if(!empty($user)){
          $data["user"] = $user;
          $data["status"] = 200;
          $data["message"] = "successed";
          echo json_encode($data);
      }else {
        $data["status"] = 500;
        $data["message"] = "failed";
        echo json_encode($data);
      }
  }
  public function getCategory(){
    $this->load->model('Product_category_model');
    $data = $this->Product_category_model->get_all();
    echo json_encode($data);
  }
  public function insertProduct()
	{
    $this->load->model('Product_model');

    $proSKU = $this->input->post("proSKU");
    $proName = $this->input->post("proName");
    $proPrice = $this->input->post("proPrice");
    $proWeight = $this->input->post("proWeight");
    $proCatDesc = $this->input->post("proCatDesc");
    $proShortDesc = $this->input->post("proShortDesc");
    $proLongDesc = $this->input->post("proLongDesc");
    $proThumb = $this->input->post("proThumb");
    $proImg = $this->input->post("proImg");
    $proCategoryID = $this->input->post("proCategoryID");
    $proStock = $this->input->post("proStock");
    $proLive = $this->input->post("proLive");
    $proUnlimited = $this->input->post("proUnlimited");
    $proLocation = $this->input->post("proLocation");
    $userID = $this->input->post("UserID");


		$pro = $this->Product_model->insert(array(
      'ProductSKU' => $proSKU,
      'ProductName' => $proName,
      'ProductPrice' => $proPrice,
      'ProductWeight' => $proWeight,
      'ProductCartDesc' => $proCatDesc,
      'ProductShortDesc' => $proShortDesc,
      'ProductLongDesc' => $proLongDesc,
      'ProductThumb' => $proThumb,
      'ProductImage' => $proImg,
      'ProductCategoryID' => $proCategoryID,
      'ProductUpdateDate' => date("Y-m-d H:i:s"),
      'ProductStock' => $proStock,
      'ProductLive' => $proLive,
      'ProductUnlimited' => $proUnlimited,
      'ProductLocation' => $proLocation,
      'UserID' => $userID
    ));
    if(!empty($pro)){
        $data["product"] = $pro;
        $data["status"] = 200;
        $data["message"] = "successed";
        echo json_encode($data);
    }else {
      $data["status"] = 500;
      $data["message"] = "failed";
      echo json_encode($data);
    }
	}

}
