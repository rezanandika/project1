 <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('template/admin_lte'); ?>/plugins/datatables/dataTables.bootstrap.css">
 
<section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?= $tittle ?></h3>
              <a href="<?php echo base_url(). 'index.php/barang/tambah'; ?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Barang</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Spesifikasi</th>
                  <th>Kategori</th>
                  <th>Jumlah</th>
                  <th>Satuan</th>
                  <th>Stok Barang</th>
                  <th>Jenis Inventaris</th>
                  <th>Detail</th>
                  <th>Aksi</th>
                </tr>
                </thead>
              <tbody>

                 <?php foreach($barang as $d){ ?>
                    <tr align="left">
                      <td><?php echo $d['id_barang'] ?></td>
                      <td><?php echo $d['nama_barang'] ?></td>
                      <td><?php echo $d['spesifikasi'] ?></td>
                      <td><?php echo $d['nama_kategori'] ?></td>
                      <td><?php echo $d['jumlah'] ?></td>
                      <td><?php echo $d['satuan'] ?></td>
                      <td><?php if($d['distribusi'] == 0){ echo "Stok Habis";}else{ echo $d['distribusi']." Tersedia"; } ?></td>
                      <td><?php echo $d['nama_inventaris'] ?></td>
                      <td><a href="<?php echo base_url()."index.php/barang/detail/?id=".$d['id_barang']; ?>">Lihat</a></td>
                      <td><a href="<?php echo base_url(). 'index.php/barang/edit/?id=' .$d['id_barang'] ?>" title="Edit"><i class="fa fa-pencil text-primary"></i></a> 
                      <a href="<?php echo base_url(). 'index.php/barang/delete/' .$d['id_barang'] ?>" title="Hapus"><i class="fa fa-trash text-danger"></i></a></td>
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