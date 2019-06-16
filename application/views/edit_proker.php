
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <div class="col-md-12">
            <?php echo form_open('proker/update') ?>

              <div class="form-group">
                <label for="text">id proker</label>
                <input type="text" name="id_proker" value="<?php echo $data_proker->id_proker ?>" class="form-control" placeholder="Masukkan id proker">
                <input type="hidden" value="<?php echo $data_proker->id_proker ?>" name="id_proker">
              </div>

              <div class="form-group">
                <label for="text">Nama proker</label>
                <input type="text" name="nm_proker" value="<?php echo $data_proker->nm_proker?>" class="form-control" placeholder="Masukkan Nama proker">
              </div>

              <div class="form-group">
                <label for="text">Tanggal </label>
                <input type="date" name="tgl_proker" value="<?php echo $data_proker->tgl_proker ?>" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">id_pengurus</label>
                <input type="text" name="id_pengurus" value="<?php echo $data_proker->id_pengurus ?>" class="form-control" >
              </div>
              <div class="form-group">
                <label for="text">Tempat</label>
                <input type="text" name="tempat" value="<?php echo $data_proker->tempat ?>" class="form-control" >
              </div>


              <button type="submit" class="btn btn-md btn-success">Update</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
            <?php echo form_close() ?>
        </div>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
