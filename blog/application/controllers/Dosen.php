<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	// Fungsi : menampilkan seluruh data
	public function index()
	{
		// load model 
        $this->load->model('dosen_model', 'dsn1');

        // Pake class model
        $this->dsn1->id = 1;
        $this->dsn1->nidn = "0110221075";
        $this->dsn1->nama = "Adzhimatinur Azzahra";
        $this->dsn1->gender = "P";
        $this->dsn1->tmp_lahir = "Batu Nadua";
        $this->dsn1->tgl_lahir = "27 September 2003 ";
        $this->dsn1->pendidikan = "S1 Teknik Informatika";



        // Buat Objek 2
        // load model 
        $this->load->model('dosen_model', 'dsn2');

        //Pake class model + Isi data
        $this->dsn2->id = 2;
        $this->dsn2->nidn = "0110221076";
        $this->dsn2->nama = "Deriyamsi Ritonga";
        $this->dsn2->gender = "P";
        $this->dsn2->tmp_lahir = "Sitaratoit";
        $this->dsn2->tgl_lahir = "16 Desember 2002";
        $this->dsn2->pendidikan = "S1 Teknik Informatika";

        // Buat Objek 3
        // load model 
        $this->load->model('dosen_model', 'dsn3');

        //Pake class model + Isi data
        $this->dsn3->id = 3;
        $this->dsn3->nidn = "0110221080";
        $this->dsn3->nama = "Seri Ani Ritonga";
        $this->dsn3->gender = "P";
        $this->dsn3->tmp_lahir = "Tapanuli Selatan";
        $this->dsn3->tgl_lahir = "07 Juli 2002";
        $this->dsn3->pendidikan = "S1 Teknik Informatika";

        // Buat Objek 4
        // load model 
        $this->load->model('dosen_model', 'dsn4');

        //Pake class model + Isi data
        $this->dsn4->id = 4;
        $this->dsn4->nidn = "0110221073";
        $this->dsn4->nama = "Yulia Ananda Siregar";
        $this->dsn4->gender = "P";
        $this->dsn4->tmp_lahir = "Sitaratoit";
        $this->dsn4->tgl_lahir = "27 Juli 2003";
        $this->dsn4->pendidikan = "S1 Teknik Informatika";
        
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3, $this->dsn4];

        // Siapain data untuk dikirim ke view
        $data["list_dsn"] = $list_dsn;

        // Untuk ngirim data + nampilin ke view
        // $this->load->view('dosen/header1.php');
        // $this->load->view('dosen/index1.php', $data);
        // $this->load->view('dosen/footer1.php');
   
       $this->load->view('layout/header');
       $this->load->view('layout/sidebar');
       $this->load->view('dosen/index1.php', $data);
       $this->load->view('layout/footer');

    }

    public function create(){
        $data["judul"] = "Form Kelola Dosen";
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/create', $data);
        $this->load->view('layout/footer');

    }

public function save(){
    //Load model dosen
    $this->load->model('dosen_model', 'dsn');

    $this->dsn->nidn = $this->input->post('nidn');
    $this->dsn->nama = $this->input->post('nama');
    $this->dsn->gender = $this->input->post('gender');
    $this->dsn->tmp_lahir = $this->input->post('tmp_lahir');
    $this->dsn->tgl_lahir = $this->input->post('tgl_lahir');
    $this->dsn->pendidikan = $this->input->post('pendidikan');

    $data['dsn'] = $this->dsn;
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('dosen/view', $data);
    $this->load->view('layout/footer');

}

}