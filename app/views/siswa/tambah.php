<div class="container mt-5">

    <div class="col-md-4">
        <form action="<?= BASEURL; ?>/siswa/tambah" method="post" enctype="multipart/form-data">
            <h3>Tambah Data</h3>
            <input class="form-control mt-3" type="text" placeholder="Nama" aria-label="default input example" name="nama" >
            <input class="form-control mt-2" type="number" placeholder="NIS" aria-label="default input example" name="nis">
            <input class="form-control mt-2" type="text" placeholder="Rombel" aria-label="default input example" name="rombel">
            <input class="form-control mt-2" type="text" placeholder="Rayon" aria-label="default input example" name="rayon" >
            <input class="form-control mt-2" type="file" name="gambar"><br><br>

            <button type="submit" class="btn btn-primary  ">Tambah</button>
        </form> 
    </div>
</div>