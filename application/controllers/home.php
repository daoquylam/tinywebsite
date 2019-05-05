<?php
class home extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
       $this->load->view("site/header.php");
       $this->load->view("site/home.php");
       $this->load->view("site/footer.php");
    }
    public function test(){
        $this->load->model('SanPham_model');
        $this->SanPham_model->get_list_intro(1);
    }

}
