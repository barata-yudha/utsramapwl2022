<?php include('inc_header.php') ?>
<?php

include 'database.php';
$db = new database();

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
                            <h5 class="m-b-10">List Dokter</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- customar project  start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-right">
                                <a href="dokter_create.php" class="btn btn-success btn-sm mb-3 btn-round" ><i class="feather icon-plus"></i> Tambah Dokter</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>NIP</th>
                                        <th>Nama Lengkap</th>
                                        <th>Spesialis</th>
                                        <th>Tempat Praktek</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($db->dokter_list() as $item): ?>
                                        <tr>
                                            <td><?= $item['nip']; ?></td>
                                            <td><?= $item['nama_lengkap']; ?></td>
                                            <td><?= $item['spesialis']; ?></td>
                                            <td><?= $item['tempat_praktek']; ?></td>
                                            <td>
                                                <div class='d-flex justify-content-center'>
                                                    <a href="dokter_edit.php?id=<?= $item['iddokter']; ?>"
                                                        class='btn btn-sm btn-warning me-1'>
                                                        <i class='mdi mdi-pencil align-middle font-size-12'></i>
                                                        Edit
                                                    </a>
                                                    <a href="functions.php?id=<?= $item['iddokter']; ?>&aksi=dokter_destroy" onclick="return confirm('Yakin?')"
                                                        class='btn btn-sm btn-danger me-1'>
                                                        <i class='mdi mdi-trash align-middle font-size-12'></i>
                                                        Hapus
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customar project  end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<?php include('inc_footer.php') ?>

<script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        })
    </script>