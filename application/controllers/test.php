<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author QuyNam
 */
class test extends MY_Controller{
    //put your code here
    function __construct()
    {
        parent::__construct();
        $this->load->model('sanpham_model');
    }
    public function show(){
        echo '<pre>';
        $input = array();
        $input['limit'] = array('5' ,'0');
        $list = $this->sanpham_model->get_list($input);
        foreach ($list as $row) {
            print_r($row);
            echo '<pre>';
        }
        
    }
}
