<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author QuyNam
 */
class home extends MY_Controller{
    //put your code here
    function __construct()
    {
        parent::__construct();
        //load ra file model
    }
    
    function index(){
        $this->data['temp'] = 'admin/home/index';
        $this->load->view('admin/main', $this->data);
    }
}
