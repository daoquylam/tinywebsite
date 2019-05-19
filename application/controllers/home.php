<?php
class home extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('sanpham_model');
        
    }
    public function index(){
        $input = array();
        $input['limit'] = array('5' ,'0');
        $list = $this->sanpham_model->get_list($input);
        $this->data['listsanpham'] = $list;
        $this->data['temp'] = 'site/home/index';
        $this->load->view('site/layout', $this->data);
    }
    

}
