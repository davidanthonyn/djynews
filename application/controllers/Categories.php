<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Categories'));
    }
    

    function index()
    {
        $data['tblcategory'] = $this->M_Categories->tampilkan_record()->result();

        $this->load->view('includes/sidebar.php', $data);
}

function tambah_data()
	{
		$data['tblcategory'] = $this->M_Categories->tampilkan_record()->result();
		$this->load->view('v_input_kategori.php', $data);
	}
