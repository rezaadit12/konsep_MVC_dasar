<?php

class About extends Controller{

    public function index()
    {

        $data['judul'] = 'About Me';

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('about/index');
        $this->view('templates/footer');


    }


}