<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->view('v_home.php');
    }
}
