 <div class="row">
            
            <!-- right column -->
            <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Barang</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form method="post" class="form-horizontal" action="<?php echo base_url()."index.php/barang/insert" ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="idbarang" class="col-sm-2 control-label">Kode Barang</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="idbarang" placeholder="Kode Barang" name="idbarang">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Nama Barang</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="nama" placeholder="Nama Barang" name="nama">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Spesifikasi</label>
                      <div class="col-sm-5">
                         <textarea class="form-control" id="spesifikasi" placeholder="Spesifikasi" name="spesifikasi"></textarea> 
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Kategori</label>
                      <div class="col-sm-5">
                         <select class="form-control" name="kategori">
                         <option>Pilih Kategori</option>
                           <?php foreach($kategori as $d){ ?>
                          <tr align="left">
                          <option><?php echo $d->nama ?></option>
                          <?php } ?>
                         </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">jumlah</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="satuan" placeholder="jumlah" name="jumlah">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Satuan</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="satuan" placeholder="satuan" name="satuan">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Jenis Inventaris</label>
                      <div class="col-sm-5">
                         <select class="form-control" name="inventaris">
                           <?php foreach($inventaris as $i){ ?>
                            <tr align="left">
                            <option><?php echo $i->nama ?></option>
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