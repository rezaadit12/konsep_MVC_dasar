<?php

class Login extends Controller{


    public function index()
    {
        // session ini agar saat kita sudah berada di beranda tidak bisa kembali ke halaman login
        if(isset($_SESSION['nama'])){
            header('Location:'. BASEURL);
            die;
        }
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $user = $this->model('Login_model')->getNameByEmail($email);
        $nama = $user['nama'];
    
        if (!$user || !password_verify($password, $user['password'])) {
            header('Location:'.BASEURL.'/404');
            exit();
        }

        // Jika user ditemukan dan password sesuai
        $_SESSION['nama'] = $user['nama'];
        header('Location:'. BASEURL);

        if(isset($_POST['remember'])){
            setcookie('username', $nama , time() + 7200, '/'); 
            setcookie('usepass',  hash('sha256', $password), time() + 7200, '/'); 
        }
    }
    

    public function logout()
    {
        setcookie('username', '', time() - 3600, '/');
        setcookie('usepass', '', time() - 3600, '/');

        unset($_SESSION['nama']);
        session_destroy();
        header('Location:'. BASEURL);
    }
}