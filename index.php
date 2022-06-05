
<?php include('inc_header.php'); ?>
<?php

include 'database.php';
$db = new database();
$list_obat = $db->obat_list();
$list_dokter = $db->dokter_list();
$list_pasien = $db->pasien_list();
?>
<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><?= $appName ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- customar project  start -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-user-md f-36 text-info"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Dokter</h6>
                                <h2 class="m-b-0"><?= number_format(count($list_dokter), 0, ',', '.') ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-user-injured f-36 text-danger"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Pasien</h6>
                                <h2 class="m-b-0"><?= number_format(count($list_pasien), 0, ',', '.') ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-pills f-36 text-info"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Obat</h6>
                                <h2 class="m-b-0"><?= number_format(count($list_obat), 0, ',', '.') ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<?php include('inc_footer.php'); ?>