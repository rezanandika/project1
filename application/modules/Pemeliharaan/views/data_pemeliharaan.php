










 <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('template/admin_lte'); ?>/plugins/datatables/dataTables.bootstrap.css">
 
<section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?= $tittle ?></h3>
              <a href="<?php echo base_url(). 'index.php/pemeliharaan/tambah'; ?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Pemeliharaan</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode Pemeliharaan</th>
                  <th>Lokasi</th>
                  <th>ID Sub Barang</th>
                  <th>Tanggal Mulai</th>
                  <th>Jam Mulai</th>
                  <th>Tanggal Selesai</th>
                  <th>Jam Selesai</th>
                  <th>Kerusakan</th>
                  <th>Penanganan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
              <tbody>

                 <?php foreach($pemeliharaan as $d){ ?>
                    <tr align="left">
                  <td><?php echo $d['id_pemeliharaan'] ?></td>
                  <td><?php echo $d['id_lokasi'] ?></td>
                  <td><?php echo $d['id_detail'] ?></td>
                  <td><?php echo $d['tgl_mulai'] ?></td>
                  <td><?php echo $d['jam_mulai'] ?></td>
                  <td><?php echo $d['tgl_selesai'] ?></td>
                  <td><?php echo $d['jam_selesai'] ?></td>
                  <td><?php echo $d['kerusakan'] ?></td>
                  <td><?php echo $d['penanganan'] ?></td>
                  
                 
                      <td><a href="<?php echo base_url(). 'index.php/pemeliharaan/edit/?id=' .$d['id_pemeliharaan'] ?>" title="Edit"><i class="fa fa-pencil text-primary"></i></a>

                        <a href="<?php echo base_url(). 'index.php/pemeliharaan/delete/' .$d['id_pemeliharaan'] ?>" title="Hapus"><i class="fa fa-trash text-danger"></i></a></td>
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

    <script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script>
      $(function () {
        $("#example1").DataTable({
          "pageLength": 25,
        });
        
      });
    </script>
          <!-- /.row (main row) -->
