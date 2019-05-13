<?php
class home extends CI_Controller{
    public function __construct(){
        parent::__construct();
        
        
    }
    public function index(){
        $this->data['temp'] = 'site/home/index';
        $this->load->view('site/layout', $this->data);
    }
    

}
