<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	// Fungsi : menampilkan seluruh data
	public function index()
	{
		// load model 
        $this->load->model('mahasiswa_model', 'mhs');

        //simpan objek ke dalam array
        $list_mhs = $this->mhs->getAll();

        // Siapain data untuk dikirim ke view
        $data["list_mhs"] = $list_mhs;

        // Untuk ngirim data + nampilin ke view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layout/footer');
    }

}
