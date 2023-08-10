<?php



class Register_model{

    protected $table = 'users';
    protected $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function prosdaftar($data)
    {
        // Cek apakah username sudah ada di database
        $query = "SELECT * FROM $this->table WHERE email = :email";
        $this->db->query($query);
        $this->db->bind('email', $data['email']);
        $existingUser = $this->db->single();
            
        if ($existingUser) {
            // Jika username sudah ada di database
            echo "Data sudah ada";
            return false;
        }else{
            $query = "INSERT INTO $this->table
                        VALUE
                        ('', :name, :email, :password)";

            $this->db->query($query);

            $this->db->bind('name', $data['name']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('password', password_hash($data['password'],  PASSWORD_DEFAULT));

            $this->db->execute();

            return $this->db->rowCount();
        }
    }
}