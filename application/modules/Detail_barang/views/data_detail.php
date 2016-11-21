 <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('template/admin_lte'); ?>/plugins/datatables/dataTables.bootstrap.css">
 
<section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?= $tittle ?></h3>
              <!-- <a href="<?php echo base_url(). 'index.php/barang/tambah'; ?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Barang</a> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Kategori</th>
                  <th>Satuan</th>
                  <th>Jenis Inventaris</th>
                  <th>Software/Hardware</th>
                  <th>IP</th>
                  <th>Penempatan</th>
                  <!-- <th>Detail</th> -->
                  <th>Aksi</th>
                </tr>
                </thead>
              <tbody>

              
             <?php foreach ($detail as $d) { ?>
                  
            
                    <tr align="left">
                      <td><?php echo $d['id_detail']; ?></td>
                      <td><?php echo $d['nama_barang'] ?></td>
                      <td><?php echo $d['id_kategori'] ?></td>
                      <td><?php echo $d['satuan'] ?></td>
                      <td><?php echo $d['id_inventaris'] ?></td>
                      <td></td>
                      <td></td>
                      <td><?php echo $d['id_penempatan'] ?></td>
                      <!-- <td><a href="#">Lihat</a></td> -->
                      <td><a href="<?php echo base_url(). 'index.php/barang/edit_detail'; ?>" title="Edit"><i class="fa fa-pencil text-primary"></i></a> 
                        <a href="<?php echo base_url(). 'index.php/barang/delete_detail/' .$d['id_detail'] ?>" title="Hapus"><i class="fa fa-trash text-danger"></i></a></td>
                    </tr>
            
                 <?php  } ?>  
                           
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
    <script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script>
      $(function () {
        $("#example1").DataTable({
          "pageLength": 25,
        });
        
      });
    </script>