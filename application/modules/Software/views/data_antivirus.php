        <div>
            <button type="button" class="btn btn-primary">Tambah Data</button>
        </br>
        <p> </p>
    
        <div class="col-md-12">
          <div class="box box-warning box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Data Antivirus</h3>

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
      <th>Nama Antivirus</th>
      <th>Aksi</th>

    </tr>
    <?php foreach($antivirus as $a){ ?>
    <tr align="left">
      <td><?php echo $a['id_antivirus'] ?></td>
      <td><?php echo $a['nama'] ?></td>
       <td><a href="#" title="Edit"><i class="fa fa-pencil text-primary"></i></a> <a href="#" title="Hapus"><i class="fa fa-trash text-danger"></i></a></td>

    </tr>
    <?php } ?>
  </table>

  
   
  </div>
</div>
          <!-- /.row (main row) -->
