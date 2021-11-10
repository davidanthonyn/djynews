<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enroll extends CI_Controller {

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
	
	/*public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function lihat_data()
	{
		$this->load->view('v_lihat_mahasiswa');
	}
	*/

	function __construct() {
		parent::__construct();
		$this->load->model(array('M_Enroll'));
	}

	function index() {
		$data['enroll'] = $this->M_Enroll->tampilkan_record()->result();

		$this->load->view('v_lihat_enroll.php', $data);
	}

	function tambah_data() {
		$this->load->view('v_input_enroll.php');
	}

	function proses_tambah_data() {

		$tangkapNpm = $this->input->post('npm');
		$tangkapKodeMatkul = $this->input->post('kode_matkul');
		

		$data = array(
			'npm' => $tangkapNpm,
			'kode_matkul' => $tangkapKodeMatkul
		);

		$this->M_Enroll->insert_record('enroll',$data);

		redirect('Enroll');

	}

	function edit_data($kodeEnroll) {
		$where = array('kode_enroll' => $kodeEnroll);
		$data['enrollEdit'] = $this->M_Enroll->edit_record('enroll', $where)->result();
		$this->load->view('v_edit_enroll.php',$data);
	}

	function proses_edit_data() {
		$tangkapKodeEnroll = $this->input->post('kode_enroll');
		$tangkapNpm = $this->input->post('npm');
		$tangkapKodeMatkul = $this->input->post('kode_matkul');

		$data = array(
			'npm' => $tangkapNpm,
			'kode_matkul' => $tangkapKodeMatkul
		);

		$where = array(
			'kode_enroll' => $tangkapKodeEnroll
		);

		$this->M_Enroll->update_record($where,$data,'enroll');
		redirect('Mahasiswa');
	}

	//Function menghapus data

	function delete_data($kodeEnroll) {
		$where = array('kode_enroll' => $kodeEnroll);
		$this->M_Enroll->delete_record($where,'enroll');
		redirect('Enroll');
	}

}
