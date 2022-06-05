<?php include('inc_header.php') ?>
<?php

include 'database.php';
$db = new database();
$data = $db->pasien_edit(mysqli_real_escape_string($db->conn, $_GET['id']));
?>
<section class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit Pasien</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <form method="post" action="functions.php?aksi=pasien_update" class="myForm">
                        <input type="hidden" name="id" value="<?php echo $data['idpasien'] ?>">
                        <div class="row mt-3">
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="form-group">
                                    <label for="nomor_pasien">Nomor Pasien</label>
                                    <div class="form-line">
                                        <input type="text" name="nomor_pasien" value="<?= $data['nomor_pasien'] ?>" id="nomor_pasien"
                                            class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <div class="form-line">
                                        <input type="text" name="nama_lengkap" value="<?= $data['nama_lengkap'] ?>" id="nama_lengkap"
                                            class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="form-check">
                                    <label>Jenis Kelamin</label><br>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="jenis_kelamin" <?= $data['jenis_kelamin'] == 'Laki-Laki' ? 'checked' : '' ?>
                                            value="Laki-Laki" checked="">
                                        <span class="form-radio-sign">Laki-Laki</span>
                                    </label>
                                    <label class="form-radio-label ml-3">
                                        <input class="form-radio-input" type="radio" name="jenis_kelamin" <?= $data['jenis_kelamin'] == 'Perempuan' ? 'checked' : '' ?>
                                            value="Perempuan">
                                        <span class="form-radio-sign">Perempuan</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="form-group">
                                    <label for="umur">Umur</label>
                                    <div class="form-line">
                                        <input type="number" name="umur" value="<?= $data['umur'] ?>" id="umur" class="form-control" />
                                    </div>
                                    <small class="text-muted">Masukkan angka saja</small>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary w-md formSubmitter">Simpan</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>

<?php include('inc_footer.php') ?>
