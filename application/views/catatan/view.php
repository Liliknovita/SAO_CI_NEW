<!DOCTYPE html>
<html>
<head>
    <title>Catatan</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>
 <div class="container" style="margin-top: 80px">
        <?php echo $this->session->flashdata('notif') ?>
        <a href="<?php echo base_url() ?>index.php/Catatan/tambah/" class="btn btn-md btn-success">Tambah Catatan</a>
        <hr>

 <!-- table -->
        <div class="table-responsive">
            <table id="table" class="table table-striped table-bordered table-hover">
                <thead>
<tr>
  <th>Gambar</th>
  <th>Deskripsi</th>
  <th>Nama File</th>
  <th>Ukuran File</th>
  <th>Tipe File</th>
  <th>Options</th>


</tr>

</thead>

<?php
if( ! empty($gambar)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
  foreach($gambar as $data){ // Lakukan looping pada variabel gambar dari controller
    echo "<tr>";
    echo "<td><img src='".base_url("images/".$data->nama_file)."' width='100' height='100'></td>";
    echo "<td>".$data->deskripsi."</td>";
    echo "<td>".$data->nama_file."</td>";
    echo "<td>".$data->ukuran_file." kB</td>";
    echo "<td>".$data->tipe_file."</td>";

  }
    echo "</tr>";

                        
}else{ // Jika data tidak ada
  echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
}

?>
</table>
<button onclick="goBack()">Go Back</button>
                <script>
                function goBack() {
                window.history.back();
</div>
</div>

</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
    $('#table').DataT

</script>
</body>
</html>

