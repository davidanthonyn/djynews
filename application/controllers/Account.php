<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    /*
	 public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function lihat_data()
	{
		$this->load->view('v_lihat_dosen');
	}
	*/

    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Account'));
    }

    function index()
    {
        $data['user'] = $this->M_Account->tampilkan_record()->result();
        $this->load->view('v_login.php', $data);
    }
}
