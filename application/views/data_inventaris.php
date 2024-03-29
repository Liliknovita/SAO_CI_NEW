<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <?php echo $this->session->flashdata('notif') ?>
        <a href="<?php echo base_url() ?>index.php/inventaris/tambah" class="btn btn-md btn-success">Tambah Inventaris</a>
        <hr>

        <!-- table -->
        <div class="table-responsive">
            <table id="table" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Id Barang</th>
                    <th>Nama Barang</th>
                    <th>Tempat</th>
                    <th>Jumlah</th>
                    <th>Keterangan</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                    $no = 1; 
                    foreach($data_inventaris as $hasil){ 
                ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $hasil->id_barang ?></td>
                    <td><?php echo $hasil->nama_barang ?></td>
                    <td><?php echo $hasil->tempat ?></td>
                    <td><?php echo $hasil->jumlah ?></td>
                    <td><?php echo $hasil->keterangan ?></td>
                    <td>
                        <a href="<?php echo base_url() ?>index.php/inventaris/edit/<?php echo $hasil->id_barang ?>" class="btn btn-sm btn-success">Edit</a>
                        <a href="<?php echo base_url() ?>index.php/inventaris/hapus/<?php echo $hasil->id_barang ?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                  </tr>

                <?php } ?>

                </tbody>
              </table>
              <button onclick="goBack()">Go Back</button>
                <script>
                function goBack() {
            window.history.back();
    }
</script>
        </div>

    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
    $('#table').DataTable( {
    autoFill: true
} );
</script>
</body>
</html>