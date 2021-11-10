<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('M_Jadwal','M_Dosen','M_Matkul'));
    }

    function index() {
        $data['jadwal'] = $this->M_Jadwal->tampilkan_record()->result();
        $this->load->view('v_lihat_jadwal_dosen.php', $data);
    }

    function tambah_data() {
        $data['dosen'] = $this->M_Dosen->tampilkan_record()->result();
        $data['matkul'] = $this->M_Matkul->tampilkan_record()->result();
        $this->load->view('v_input_jadwal_dosen.php', $data);
    }

    function insert_data() {
        $tangkapNidn = $this->input->post('nidn');
        $tangkapMatkul = $this->input->post('kode_matkul');

        $data = array(
            'nidn'=>$tangkapNidn,
            'kode_matkul'=>$tangkapMatkul
        );

        $this->M_Jadwal->insert_record($data,'jadwal');

        redirect('jadwal/index');
    }

    function getDosenByAjax() {
        $nidn = $this->input->post('nidn');
        $where = array('nidn'=>$nidn);
        $data = $this->M_Dosen->get_dosen_by_ajax($where);
        echo json_encode($data);
    }

    function getSksByAjax() {
        $id = $this->input->post('kode_matkul');
        $where = array('kode_matkul'=>$id);
        $data = $this->M_Matkul->get_sks_by_ajax($where);
        echo json_encode($data);
        }

        function getMahasiswaByAjax() {
            $code = $this->input->post('npm');
            $where = array('npm'=>$code);
            $data = $this->M_Mahasiswa->get_mahasiswa_by_ajax($where);
            echo json_encode($data);
        }
}