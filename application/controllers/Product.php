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
	public function post(){
		$this->load->model('Product_model');
		$this->load->model('Product_category_model');
		$title['page_title']= "Cambodian farmer";
		$title['menu'] = "post";
		//$data['products']=$this->Product_model->where('ProductCategoryID',$category)->get_all();
		$data["product_categorys"] = $this->Product_category_model->get_all();
		//$data['category_menu'] = $category;
		$this->view("product/post",$data,$title);
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

		$proSKU = $this->input->post("codeSKU");
    $proName = $this->input->post("name");
    $proPrice = $this->input->post("price");
    $proWeight = " ";//$this->input->post("proWeight");
    $proCatDesc = " ";//$this->input->post("proCatDesc");
    $proShortDesc = $this->input->post("shortDesc");
    $proLongDesc = " ";//$this->input->post("proLongDesc");
    $proThumb = $this->input->post("thumb");
    $proImg = " ";//$this->input->post("proImg");
    $proCategoryID = $this->input->post("Category");
    $proStock = $this->input->post("proStock");
    $proLive = $this->input->post("live");
    $proUnlimited = $this->input->post("proUnlimited");
    $proLocation = $this->input->post("proLocation");
    $userID = $this->session->userdata('userID');

		if(isset($userID)){
				$data["action"] = 1;
				$title['page_title']= "Cambodian farmer";
				$title['menu'] = "post";
				$data["message"] = "not have login...!";
				$data["alert"] = "alert-danger";
				$this->view("product/post",$data,$title);
		}else{

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

				$data["action"] = 1;
				$title['page_title']= "Cambodian farmer";
				$title['menu'] = "post";
				if(!empty($product)){
						$data["message"] = "successed...!";
						$data["alert"] = "alert-success";
				}
				else
				{
						$data["message"] = "failed...!";
						$data["alert"] = "alert-danger";
				}
				$this->view("product/post",$data,$title);
		}

	}
}
