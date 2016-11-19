 <!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url('template/admin_lte'); ?>/plugins/datatables/dataTables.bootstrap.css">
 
<section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?= $tittle ?></h3>
              <a href="<?php echo base_url(). '/index.php/kategori/tambah'; ?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Kategori</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode Kategori</th>
                  <th>Nama Kategori</th>
                  <th>Aksi</th>
                </tr>
                </thead>
              <tbody>

                 <?php foreach($kategori as $k){ ?>
                    <tr align="left">
                      <td><?php echo $k['id_kategori']; ?></td>
                      <td><?php echo $k['nama'] ?></td>
                      <td><a href="#" title="Edit"><i class="fa fa-pencil text-primary"></i></a> <a href="#" title="Hapus"><i class="fa fa-trash text-danger"></i></a></td>
                    </tr>
               <?php } ?>
             
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
<script src="<?php echo base_url('template/admin_lte'); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('template/admin_lte'); ?>/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
      $(function () {
        $('#example2').DataTable({
          "pageLength": 5,
        });
        
      });
</script>