<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {

	public function index()
	{
    $this->load->model('Product_model');
		$this->load->model('Product_category_model');
		$title['page_title']= "Cambodian farmer";
		$title['menu'] = "home";
		$data['products']=$this->Product_model->where('ProductCategoryID',$category)->get_all();
		$data["product_categorys"] = $this->Product_category_model->get_all();
		$data['category_menu'] = $category;
		$this->view("home/index",$data,$title);
	}
  public function getAll(){
    $this->load->model('Product_model');
    $data = $this->Product_model->get_all();
    echo json_encode($data);
  }
	public function get_by_category($category){
		$this->load->model('Product_model');
		$data=$this->Product_model->where('ProductCategoryID',$category)->get_all();
		echo json_encode($data);
	}
	public function insertData(){
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

		$product = $this->Product_model->insert(array(
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

		if(!empty($product)){
				$data["product"] = $product;
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
