<?php


class Home extends Controller{

    protected $namaUser;

    public function index()
    {
        if(isset($_COOKIE['username']) && isset($_COOKIE['usepass']))
        {

            $username = $_COOKIE['username'];
            $usepass = $_COOKIE['usepass'];

            $user = $this->model('Login_model')->getName($username);

            if($username === hash('sha256', $user['nama']));
            {
                $_SESSION['nama'] = $user['nama'];
            }
        }

        $data['judul'] = 'Utama';

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('home/index');
        $this->view('templates/footer');
    }
    
}

