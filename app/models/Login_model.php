<?php

class Login_model{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getUser($username, $password)
    {
        $this->db->query('SELECT * FROM '. $this->table. ' WHERE username = :username AND password = :password');
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        return $this->db->resultSet();
    }


    // ganti menjadi email
    public function getNameByEmail($email)
    {
        $this->db->query('SELECT * FROM '. $this->table. ' WHERE email=:email');
        $this->db->bind('email', $email);
        return $this->db->single();
    }


    // method ini untuk cookie
    public function getName($nama)
    {
        $this->db->query("SELECT * FROM $this->table WHERE nama=:nama");
        $this->db->bind('nama', $nama);
        return $this->db->single();
    }

}



















