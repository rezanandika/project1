<?php 
if($state == "edit"){
  $id_barang = $d['id_barang'];
  $nama_barang = $d['nama_barang'];
  $spesifikasi = $d['spesifikasi'];
  $id_kategori = $d['id_kategori'];
  $jumlah = $d['jumlah'];
  $satuan = $d['satuan'];
  $id_invent = $d['id_inventaris'];
  $action =  "update";
}else{
  $id_barang ="";
  $nama_barang ="";
  $spesifikasi ="";
  $id_kategori ="";
  $jumlah ="";
  $satuan ="";
  $id_invent ="";
  $action ="insert";
}

?>

 <div class="row">
            
            <!-- right column -->
            <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"><?= $title ?></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form method="post" class="form-horizontal" action="<?php echo base_url()."index.php/barang/".$action; ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="idbarang" class="col-sm-2 control-label">Kode Barang</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="idbarang" placeholder="Kode Barang" name="idbarang" value="<?php if(isset($id_barang)) echo $id_barang,''  ?>" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Nama Barang</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="nama" placeholder="Nama Barang" name="namabarang" value="<?php if(isset($nama_barang)) echo $nama_barang,'' ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Spesifikasi</label>
                      <div class="col-sm-5">
                         <textarea class="form-control" id="spesifikasi" placeholder="Spesifikasi" name="spesifikasi"><?php if(isset($spesifikasi)) echo $spesifikasi,'' ?></textarea> 
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Kategori</label>
                      <div class="col-sm-5">
                         <select class="form-control select2" name="kategori">
                         <option>Pilih Kategori</option>
                          <?php  foreach($kategori as $d){ 
                               $sel=""; if(isset($id_kategori)){
                                  if($id_kategori == $d['id_kategori'])
                                    $sel="selected='selected'";} ?>
                         
                          <option value="<?= $d['id_kategori'] ?>" <?php echo $sel ?>><?php echo $d['nama_kategori'] ?></option>


                          <?php } ?>
                         </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">jumlah</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="satuan" placeholder="jumlah" name="jumlah" value="<?php if(isset($jumlah)) echo $jumlah,'' ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Satuan</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="satuan" placeholder="satuan" name="satuan" value="<?php if(isset($satuan)) echo $satuan,'' ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Jenis Inventaris</label>
                      <div class="col-sm-5">
                         <select class="form-control select2" name="inventaris">
                           <?php foreach($inventaris as $i){ 
                              $sel=""; if(isset($id_invent)){
                                if ($id_invent == $i->id_inventaris)
                                  $sel="selected='selected'"; 
                              }
                            ?>
                            
                            <option value="<?= $i->id_inventaris ?>" <?php echo $sel ?>>
                            <?php echo $i->nama_inventaris ?></option>
                            <?php } ?>
                         </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button  class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-info">Simpan</button>
                 
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                     </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              <!-- general form elements disabled -->
             
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->