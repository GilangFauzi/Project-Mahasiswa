<?php

class Mahasiswa extends CI_Controller
{
    // kalau misalkan banyak controller yang di pakein db. masukin di autoload aja. caranya :
    // cari terus isi gini $autoload['libraries'] = array('database');
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');

        // validasi
        $this->load->library('form_validation');
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
        $data['judul'] = 'Form Data Mahasiswa';
        // kalau mau buat pesan kesalahan pake bahasa sendiri tambahkan ['required' => 'Nama Wajib di Isi'] kalau 
        // gamau pake bahasa sendiri bisa required aja 
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama <b>Wajib</b> di Isi']);
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric', [
            'required' => 'NIM <b>Wajib</b> di Isi',
            'numeric' => 'Form NIM <b>Wajib</b> Menggunakan Angka Semua'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email', [
            'require' => 'Email <b>Wajib</b> di Isi',
            'valid_email' => 'Email Harus Lengkap <i>ex: exaple@gamil.com</i>'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->tambahdatamahasiswa();
            // biar ada notif kalau data berhasil ditambahkan
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('mahasiswa');
        }
    }

    public function hapus($id)
    {
        $this->Mahasiswa_model->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mahasiswa');
    }
}