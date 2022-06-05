<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matakuliah extends CI_Controller
{

    // Fungsi : menampilkan seluruh data
    public function index()
    {
        // load model 
        $this->load->model('matakuliah_model', 'matkul1');

        // Pake class model
        $this->matkul1->nama = "Komunikasi Efektif";
        $this->matkul1->sks = "2";
        $this->matkul1->kode = "KE";

        // Buat Objek 2
        // load model 
        $this->load->model('matakuliah_model', 'matkul2');

        //Pake class model + Isi data
        $this->matkul2->nama = "Jaringan Komputer";
        $this->matkul2->sks = "3";
        $this->matkul2->kode = "JK";

        // Buat Objek 3
        // load model 
        $this->load->model('matakuliah_model', 'matkul3');

        //Pake class model + Isi data
        $this->matkul3->nama = "User Interface & User Experience";
        $this->matkul3->sks = "3";
        $this->matkul3->kode = "UI/UX";

        // Buat Objek 4
        // load model 
        $this->load->model('matakuliah_model', 'matkul4');

        //Pake class model + Isi data
        $this->matkul4->nama = "Pemrograman Web 2";
        $this->matkul4->sks = "3";
        $this->matkul4->kode = "PW";

        // Buat Objek 5
        // load model 
        $this->load->model('matakuliah_model', 'matkul5');

        //Pake class model + Isi data
        $this->matkul5->nama = "Basis Data";
        $this->matkul5->sks = "4";
        $this->matkul5->kode = "BD";

        // Buat Objek 6
        // load model 
        $this->load->model('matakuliah_model', 'matkul6');

        //Pake class model + Isi data
        $this->matkul6->nama = "Pancasila dan Pendidikan Kewarganegaraan";
        $this->matkul6->sks = "2";
        $this->matkul6->kode = "PKN";

        // Buat Objek 7
        // load model 
        $this->load->model('matakuliah_model', 'matkul7');

        //Pake class model + Isi data
        $this->matkul7->nama = "Statistik dan Probabilitas";
        $this->matkul7->sks = "2";
        $this->matkul7->kode = "SP";

        // Buat Objek 8
        // load model 
        $this->load->model('matakuliah_model', 'matkul8');

        //Pake class model + Isi data
        $this->matkul8->nama = "Bahasa Inggris";
        $this->matkul8->sks = "2";
        $this->matkul8->kode = "BI";







        $list_matkul = [$this->matkul1, $this->matkul2, $this->matkul3, $this->matkul4, $this->matkul5, $this->matkul6, $this->matkul7, $this->matkul8];

        // Siapain data untuk dikirim ke view
        $data["list_matkul"] = $list_matkul;

        // Untuk ngirim data + nampilin ke view
        $this->load->view('matakuliah/header2.php');
        $this->load->view('matakuliah/index2', $data);
        $this->load->view('matakuliah/footer2.php');
    }
}
