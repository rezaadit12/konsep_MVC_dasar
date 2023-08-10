<?php

class Siswa extends Controller{

    public function index()
    {
        $data['judul'] = 'Data Siswa';
        $data['nama'] = $this->model('Siswa_model')->getName();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {

        $data['judul'] = 'Data Lengkap';
        $data['nama'] = $this->model('Siswa_model')->getNameById($id);

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('siswa/detail', $data);
        $this->view('templates/footer');
    }

    public function addSiswa()
    {   
        $data['judul'] = 'Tambah Data';

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('siswa/tambah');
        $this->view('templates/footer');

        
    }
               
    
    public function tambah()
    {
    
        if($this->model('Siswa_model')->tambahData($_POST) > 0){
            Flasher::setFlash('behasil', 'ditambahkan', 'success');
            header('location: '.BASEURL.'/siswa');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('location: '.BASEURL.'/siswa');
            exit;
        }
    }

    public function hapus($id)
    {
        if($this->model('Siswa_model')->hapusData($id) > 0){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('location: '.BASEURL. '/siswa');
            exit;
        }else{
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('location: '. BASEURL. '/siswa');
            exit;
        }
    }

    public function updSiswa($id)
    {
        $data['judul'] = 'Update Data';
        $data['nama'] = $this->model('Siswa_model')->getNameById($id);

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('siswa/edit', $data);
        $this->view('templates/footer');
    }

    public function prosUpdate()
    {
        if($this->model('Siswa_model')->updateData($_POST) > 0){
            Flasher::setFlash('berhasil', 'di edit', 'success');
            header("Location:".BASEURL."/siswa");
            exit;
        }else{
            Flasher::setFlash('gagal', 'di edit', 'danger');
            header("Location:".BASEURL."/siswa");
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Data Siswa';

        $data['nama'] = $this->model('Siswa_model')->cariData();
        
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }

}

















    // public function detail($id)
    // {
    //     $data['judul'] = 'Detail Mahasiswa';
    //     $data['nama'] = $this->model('Siswa_model')->getSiswaById($id);

    //     $this->view('templates/header', $data);
    //     $this->view('siswa/detail', $data);
    //     $this->view('templates/footer');
    // }
// }