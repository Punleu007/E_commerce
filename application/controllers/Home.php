<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index($category=null)
	{
		$this->load->model('Product_model');
		$this->load->model('Product_category_model');
    $title['page_title']= "Cambodian farmer";
		$title['menu'] = "home";
		$title['category_menu'] = $category;
		//$data['category_menu'] = $category;
		if($category==null)
    	$data["products"] = $this->Product_model->get_all();
		else
			$data["products"] = $this->Product_model->where('ProductCategoryID',$category)->get_all();
		$this->view("home/index",$data,$title);
	}
	public function about(){
		$title['page_title']= "About";
		$title['menu'] = "about";
		$data["asdf"] = "asdf";
		$this->view("home/about_me",$data,$title);
	}
}
