<?php

class Register extends Controller{

    public function option()
    {
        header('Location:'. BASEURL.'/register');
    }

    public function index()
    {
        // session ini agar saat kita sudah berada di beranda tidak bisa kembali ke halaman register
        if(isset($_SESSION['nama'])){
            header('Location:'. BASEURL);
            die;
        }


        
        $_SESSION['nama'] = true;

        $data['judul'] = 'Utama';
        $this->view('templates/header', $data);
        $this->view('registrasi/index');
        $this->view('templates/footer');

        unset($_SESSION['nama']);
    }


    public function daftar()
    {
        if($this->model('Register_model')->prosdaftar($_POST) > 0){
            echo "<script>
                alert('Registrasi berhasil')
                document.location.href = '../';
                </script>";
        }
    }
}