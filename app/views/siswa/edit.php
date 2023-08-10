
<div class="container mt-5">

    <div class="col-md-4">
        <form action="<?= BASEURL; ?>/siswa/prosUpdate" method="post" enctype="multipart/form-data">
            <h3>Update Data </h3>

            <!-- =====| FOR IMG | ==== -->
            <label for="fileInput">
            <img class="mt-2" src="<?= BASEURL; ?>/img/<?= $data['nama']['gambar'] ?>" width="130" id="imgPreview" onerror="setDefaultImage()">

            </label>
                <input class="form-control mt-2 visually-hidden" name="gambar" type="file" id="fileInput" >
            <!-- ===================== -->

            <input type="hidden" name="id" value="<?=$data['nama']['id']?>">
            <input class="form-control mt-3" type="text" value="<?=$data['nama']['nama']?>" aria-label="default input example" name="nama" required>
            <input class="form-control mt-2" type="number" value="<?=$data['nama']['nis']?>" aria-label="default input example" name="nis">
            <input class="form-control mt-2" type="text" value="<?=$data['nama']['rombel']?>" aria-label="default input example" name="rombel">
            <input class="form-control mt-2" type="text" value="<?=$data['nama']['rayon']?>" aria-label="default input example" name="rayon" required>

            <button type="submit" class="btn btn-success mt-3 ">Update</button>
        </form> 
    </div>
</div>
<script>
    function setDefaultImage() {
        var imgElement = document.getElementById('imgPreview');
        imgElement.src = '<?= BASEURL; ?>/img/default.jpg';
    }
</script>
