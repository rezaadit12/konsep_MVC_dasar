<div class="container mt-5">
    <h3>Data Siswa</h3>
    <br>
    <div class="row">
        <div class="col-lg-5">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <a href="<?= BASEURL; ?>/siswa/addSiswa">Tambah Data</a>
    <br><br>


    <div class="row mb4">
        <div class="col-lg6">
            <form action="<?= BASEURL; ?>/siswa/cari" method="post">
                <div class="mb-3">
                    <input type="text" placeholder="Cari data...." name="keyword" autocomplete="off" autofocus>
                    <button type="submit">Cari</button>
                </div>                
            </form>
        </div>
    </div>

    <table>
        <?php $a = 1; ?>
        <?php foreach($data['nama'] as $nama):?>
            <tr>
                <td><?= $a; ?>.&nbsp;</td>
                <td> <?= $nama['nama']; ?></td>
                <td>&nbsp;| <a class="text-info" href="<?= BASEURL; ?>/siswa/detail/<?= $nama['id'];?>">Detail</a> |</td> 
                <td>&nbsp;<a class="text-danger" href="<?= BASEURL; ?>/siswa/hapus/<?= $nama['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus data  | <?= $nama['nama']; ?> |')">Hapus</a> |</td>
                <td>&nbsp;<a class="text-success" href="<?= BASEURL; ?>/siswa/updSiswa/<?= $nama['id']; ?>">Update</a> |</td>
            </tr>
            <?php $a++; ?>
        <?php endforeach; ?>
    </table>

</div>