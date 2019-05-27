<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of additem
 *
 * @author QuyNam
 */
class additem extends MY_Controller{
    //put your code here
            
    function index(){
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->data['temp'] = 'admin/additem/index';
        $this->load->view('admin/main', $this->data);
        
    }
    function add(){
        if($this->input->post()){
            $this->form_validation->set_rules('ten', 'Tên', 'required|min_length[8]');
            
            if($this->form_validation->run()){
                
            }
        }
    }
}
