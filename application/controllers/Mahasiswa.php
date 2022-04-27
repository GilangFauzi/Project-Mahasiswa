<?php

class Mahasiswa extends CI_Controller
{
    // kalau misalkan banyak controller yang di pakein db. masukin di autoload aja. caranya :
    // cari terus isi gini $autoload['libraries'] = array('database');
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }
    public function index()
    {
        // $this->load->database(); itu berlaku kalau cuma 1 method aja yang mau konek ke database, 
        // tapi kalau banyak pake construct

        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $data['judul'] = "Daftar Mahasiswa";
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index');
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
    }
}