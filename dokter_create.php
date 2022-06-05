<?php include('inc_header.php') ?>
<?php

include 'database.php';
$db = new database();

?>
<section class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Tambah Obat</h5>
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
                    <form method="post" action="functions.php?aksi=dokter_create"
                                    class="myForm">
                        <div class="row mt-3">
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="form-group">
                                    <label for="nip">NIP</label>
                                    <div class="form-line">
                                        <input type="text" name="nip" id="nip"
                                            class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <div class="form-line">
                                        <input type="text" name="nama_lengkap" id="nama_lengkap"
                                            class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="form-group">
                                    <label for="bentuk">Spesialis</label>
                                    <select name="spesialis" id="spesialis" class="form-control"
                                    required>
                                    <option value="THT">THT</option>
                                    <option value="Obgyn">Obgyn</option>
                                    <option value="Gigi">Gigi</option>
                                    <option value="Kandungan">Kandungan</option>
                                    <option value="Anak">Anak</option>
                                    <option value="Otak">Otak</option>
                                    <option value="Tulang">Tulang</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="form-group">
                                    <label for="tempat_praktek">Tempat Praktek</label>
                                    <div class="form-line">
                                        <input type="text" name="tempat_praktek" id="tempat_praktek"
                                            class="form-control" />
                                    </div>
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
