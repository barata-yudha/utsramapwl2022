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
                    <form method="post" action="functions.php?aksi=obat_create"
                                    class="myForm">
                            <div class="row mt-3">
                                <div class="col-sm-3 col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label for="kode_obat">Kode Obat</label>
                                        <div class="form-line">
                                            <input type="text" name="kode_obat" id="kode_obat"
                                                class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label for="nama_obat">Nama Obat</label>
                                        <div class="form-line">
                                            <input type="text" name="nama_obat" id="nama_obat"
                                                class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label for="bentuk">Bentuk</label>
                                        <div class="form-line">
                                            <input type="text" name="bentuk" id="bentuk"
                                                class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label for="berat">Berat</label>
                                        <div class="form-line">
                                            <input type="text" name="berat" id="berat"
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
