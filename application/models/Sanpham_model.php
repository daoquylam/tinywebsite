<?php
class Sanpham_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    function get_list_intro($loaisp){
        $this->db->select('ID,TenSanPham,Gia,Mota,Image');
        $this->db->where('ID_LoaiSanPham',$loaisp);
        $query = $this->db->get('SanPham');
        return $query->result();
    }
}

?>
