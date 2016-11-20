<?php 

  if($state == 'edit'){
    $id_barang = $barang['id_barang'];
    $action = 'update';
  }else{
    $ability = 'disabled';
    $action = 'insert';
  }

?>


<h3> Form Tambah Barang </h3>
</br>
<div class="col-md-6">
          <!-- general form elements -->
  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Barang</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
    <form role="form" action="<?php echo base_url().'index.php/barang/'.$action; ?>" method="POST" enctype="multipart/form-data">
      <div class="box-body">
                <div class="form-group">
                  <label for="idbarang">Kode Barang</label>
                  <input type="text" class="form-control" id="idbarang" placeholder="Kode Barang" name="idbarang">
                </div>
                <div class="form-group">
                  <label for="nama">Nama Barang</label>
                  <input type="text" class="form-control" id="nama" placeholder="Nama Barang" name="nama">
                </div>
                <div class="form-group">
                  <label for="spesifikasi">Spesifikasi</label>
                  <textarea class="form-control" id="spesifikasi" placeholder="Spesifikasi" name="spesifikasi"></textarea> 
                </div>
                <div class="form-group">
                  <label>Kategori</label>
                  <select class="form-control" name="kategori">
                    <option>Pilih Kategori</option>
                     <?php foreach($kat as $d){ ?>
                    <tr align="left">
                    <option><?php echo $d->nama ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="satuan">Satuan</label>
                  <input class="form-control" id="satuan" placeholder="Satuan" name="satuan"></input>
                </div>
                 <div class="form-group">
                  <label>Jenis Inventaris</label>
                  <select class="form-control" name="inventaris">
                    <option>BARANG MODAL</option>
                    <option>PEMELIHARAAN</option>
                  </select>
                </div>
                
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
    </form>
  </div>
</div>