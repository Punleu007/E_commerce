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
}
