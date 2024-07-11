<?= $this->extend('templates/main') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Kantor Desa</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Kantor Desa Dipelaihari</h6>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url('kantordesa/tambah') ?>"><button class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</button></a>
            <br><br>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kantor Desa</th>
                            <th>Alamat</th>
                            <th>LatLong</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $key) {
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $key['nama_kantordesa']; ?></td>
                                <td><?php echo $key['alamat']; ?></td>
                                <td><?php echo $key['lat'] . ',' . $key['lng']; ?></td>
                                <td>
                                    <a href="./file/<?php echo $key['foto']; ?>"><img src="./file/<?php echo $key['foto']; ?>" width="80px" height="80px" alt="Foto Kantor Desa"></a>
                                </td>
                                <td>
                                    <a href="<?php echo base_url('kantordesa/edit/' . $key['id_kantordesa']); ?>"><button class="btn btn-warning" type="button"><i class="fa fa-edit"></i></button></a>
                                    <a href="<?php echo base_url('kantordesa/hapus/' . $key['id_kantordesa']); ?>" onclick="return confirm('Apakah yakin ingin menghapus?')"><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>
