        <div>
            <button type="button" class="btn btn-primary">Tambah Data</button>
        </br>
        <p> </p>
    
        <div class="col-md-12">
          <div class="box box-warning box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pemeliharaan</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
    <tr align="left">
      <th>ID</th>
      <th>Tanggal Mulai</th>
      <th>Tanggal Selesai</th>
      <th>Kerusakan</th>
      <th>Penanganan</th>
      <th>ID Sub Barang</th>
      <th>Lokasi</th>
      <th>Aksi</th>

    </tr>
    <?php foreach($pemeliharaan as $d){ ?>
    <tr align="left">
      <td><?php echo $d->id_pemeliharaan ?></td>
      <td><?php echo $d->tgl_mulai ?></td>
      <td><?php echo $d->tgl_selesai ?></td>
      <td><?php echo $d->kerusakan ?></td>
      <td><?php echo $d->penanganan ?></td>
      <td><?php echo $d->id_detail ?></td>
      <td><?php echo $d->id_lokasi ?></td>
       <td><a href="#" title="Edit"><i class="fa fa-pencil text-primary"></i></a> <a href="#" title="Hapus"><i class="fa fa-trash text-danger"></i></a></td>

    </tr>
    <?php } ?>
  </table>

<?php 
  echo $this->pagination->create_links(); ?>

  
   
  </div>
</div>
          <!-- /.row (main row) -->
