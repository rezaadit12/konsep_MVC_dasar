<?php

class Siswa_model{
    private $table = 'mahasiswa';   
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getName()
    {
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    public function getNameById($id)
    {
        $this->db->query('SELECT * FROM '. $this->table. ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahData($data)
    {
        $query =    "INSERT INTO $this->table
                    VALUE 
                    ('', :nama, :nis, :rombel, :rayon, :gambar)";

        $this->db->query($query);
        $this->db->bind('nama', htmlspecialchars($data['nama']));
        $this->db->bind('nis',htmlspecialchars( $data['nis']));
        $this->db->bind('rombel',htmlspecialchars($data['rombel']));
        $this->db->bind('rayon',htmlspecialchars($data['rayon'])) ;
        $this->db->bind('gambar', $this->tambahGambar()) ;

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tambahGambar(){

        $namaGambar =$_FILES["gambar"]["name"];
        $tmpName = $_FILES["gambar"]["tmp_name"];
        $ukuran = $_FILES["gambar"]["size"];
        $error = $_FILES["gambar"]["error"];

        if($error === 4){
            echo "<script>
                    alert('Upload gambar terlebih dahulu!')
                    document.location.href = '../siswa/';
                </script>";
            die;
        }

        $jenisGambar = [
            'jpg','png','jpeg','bmp','gif', 
            'tiff','heif', 'raw','psd', 'svg' 
        ];

        $cekgambar = explode('.' , $namaGambar);
        $cekgambar = strtolower(end($cekgambar));

        if(!in_array($cekgambar, $jenisGambar)){
            echo "<script>
                    alert('Yang anda upload bukan gambar!')
                    document.location.href = '../siswa/';
                </script>";
            die;
        }

        if($ukuran > 10000000){
            echo "<script>
                    alert('Ukuran file gambar terlalu besar!')
                    document.location.href = '../siswa/';
                </script>";
            die;
        }

        $namaGambarBaru = uniqid();
        $namaGambarBaru .= '.';
        $namaGambarBaru .= $cekgambar;

        move_uploaded_file($tmpName, 'img/' . $namaGambarBaru);

        return $namaGambarBaru;
        
    }

    public function hapusData($id)
    {
        $query =    "DELETE FROM $this->table WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateData($data)
    {
        $gambarBaru = $_FILES['gambar'];

        if($_FILES["gambar"]["error"] === 4){
            $gambar = $gambarBaru;
        }else{
            $gambar = $this->tambahGambar();
        }


        $query =    "UPDATE $this->table SET
                    nama = :nama,
                    nis = :nis,
                    rombel = :rombel,
                    rayon = :rayon,
                    gambar = :gambar
                    WHERE id = :id";

        $this->db->query($query);

        $this->db->bind('nama', htmlspecialchars($data['nama']));
        $this->db->bind('nis',htmlspecialchars( $data['nis']));
        $this->db->bind('rombel',htmlspecialchars($data['rombel']));
        $this->db->bind('rayon',htmlspecialchars($data['rayon'])) ;
        $this->db->bind('gambar',$gambar) ;
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function cariData()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM $this->table WHERE nama LIKE :keyword";


        $this->db->query($query);

        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }



}



















