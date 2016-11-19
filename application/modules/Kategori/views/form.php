<?php 

  if($state == 'edit'){
    $id_lokasi = $lokasi['id_lokasi'];
    $action = 'update';
  }else{
    $ability = 'disabled';
    $action = 'insert';
  }

?>

<h3> Form Tambah Kategori </h3>
</br>
<div class="col-md-6">
          <!-- general form elements -->
  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Kategori</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
    <form role="form" action="<?php echo base_url().'index.php/kategori/'.$action; ?>" method="POST" enctype="multipart/form-data">
      <div class="box-body">
                <div class="form-group">
                  <label for="idkategori">Kode Kategori</label>
                  <input type="text" class="form-control" id="idkategori" placeholder="Kode Kategori" name="idkategori">
                </div>
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" placeholder="Nama Kategori" name="nama">
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
    </form>
  </div>
</div>