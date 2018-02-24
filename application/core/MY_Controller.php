<?php
class MY_Controller extends CI_Controller
{

    public function __construct() {

        parent::__construct();
        // $this->load->view('view_header');
        // $this->load->view('includes/nav_home');
        // $this->load->view('view_home');
        // $this->load->view('view_footer');
        //
        // $data['page_title'] = 'Your title';
        //         $this->load->view('header');
        //         $this->load->view('menu');
        //         $this->load->view('content', $data);
        //         $this->load->view('footer');
        // $this->load->view('layouts/header');
        // $this->load->view($view, $data);
        // $this->load->view('layouts/footer');
    }
    public function view($view,$data=null,$title=null){
      $this->load->model('Product_category_model');
      $titleHeader['page_title'] = isset($title['page_title'])?$title['page_title']:"Cambodian farmer";
      $titleHeader['menu'] = isset($title['menu'])?$title['menu']:"home";
      $titleHeader["product_categorys"] = $this->Product_category_model->get_all();
      $titleHeader['category_menu'] = isset($title['category_menu'])?$title['category_menu']:null;
              $this->load->view('layouts/header',$titleHeader);
              $this->load->view($view, $data);
              $this->load->view('layouts/footer');
    }
}
?>
