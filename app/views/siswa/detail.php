
<div class="container float-end mt-5">
    <table cellpadding="5">
        <img class="mt-2" src="<?= BASEURL; ?>/img/<?= $data['nama']['gambar'] ?>" width="130" id="imgPreview" onerror="setDefaultImage()">


        <tr>
            <th>Nama</th>
            <th>:</th>
            <td><?= $data['nama']['nama']; ?></td>
        </tr>
        <tr>
            <th>NIS</th>
            <th>:</th>
            <td><?= $data['nama']['nis']; ?></td>
        </tr>
        <tr>
            <th>Rombel</th>
            <th>:</th>
            <td><?= $data['nama']['rombel']; ?></td>
        </tr>
            <th>Rayon</th>
            <th>:</th>
            <td><?= $data['nama']['rayon']; ?></td>
        </tr>
        <tr>
            <td><i><a href="<?= BASEURL; ?>/siswa" class="card-link">kembali</a></i></td>
        </tr>
    </table>
</div>
<script>
    function setDefaultImage() {
        var imgElement = document.getElementById('imgPreview');
        imgElement.src = '<?= BASEURL; ?>/img/default.jpg';
    }
</script>