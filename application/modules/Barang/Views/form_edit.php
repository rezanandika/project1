 <div class="row">
            
            <!-- right column -->
            <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Barang</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form method="post" class="form-horizontal" action="<?php echo base_url()."index.php/barang/update" ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="iddetal" class="col-sm-2 control-label">Kode Detail Barang</label>
                      <div class="col-sm-5">
                      <?php foreach($detail as $d){ ?>
                        <input type="text" class="form-control" id="idbarang" value="<?php echo $d->id_detail ?>" name="iddetail">
                        <?php } ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Nama Barang</label>
                      <div class="col-sm-5">
                      <?php foreach($detail as $d){ ?>
                        <input type="text" class="form-control" id="nama" value="<?php echo $d->nama ?>" name="namadetail">
                        <?php } ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Spesifikasi</label>
                      <div class="col-sm-5">
                      <?php foreach($detail as $d){ ?>
                         <textarea class="form-control" id="spesifikasi" name="spesifikasi"><?php echo $d->spesifikasi ?></textarea>
                         <?php } ?> 
                      </div>
                    </div>


<!--                     <div class="col-md-5">
                        <div class="box-body pad">
                          <form>
                                <textarea id="editor1" name="editor1" rows="10" cols="80">
                                                        This is my textarea to be replaced with CKEditor.
                                </textarea>
                          </form>
                        </div>
                    </div>
                    </div> -->
                    <div class="form-group ">
                      <label for="inputPassword3" class="col-sm-2 control-label">Software</label>
                  

                      <div class="col-md-6">

                                <div class="form-horizontal">
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label for="inputEmail3" class="col-sm-2 control-label" >Antivirus</label>

                                      <div class=" col-sm-8">
                                        <select class="form-control" name="antivirus">
                                        <option class="disabled">Pilih Antivirus</option>
                                         <?php foreach($antivirus as $av){ ?>
                                          <tr align="left">
                                          <option><?php echo $av->nama ?></option>
                                          <?php } ?>
                                       </select>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Windows</label>

                                      <div class="col-sm-8">
                                        <select class="form-control" name="windows">
                                        <option class="disabled">Pilih Windows</option>
                                           <?php foreach($windows as $w){ ?>
                                            <tr align="left">
                                            <option><?php echo $w->nama ?></option>
                                            <?php } ?>
                                         </select>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Office</label>

                                      <div class="col-sm-8">
                                        <select class="form-control" name="office">
                                        <option class="disabled">Pilih Office</option>
                                           <?php foreach($office as $o){ ?>
                                            <tr align="left">
                                            <option><?php echo $o->nama ?></option>
                                            <?php } ?>
                                         </select>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Lain-lain</label>

                                      <div class="col-sm-8">
                                        <textarea class="form-control" id="lain" name="lain"></textarea>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-sm-offset-2 col-sm-10">
                                      </div>
                                    </div>
                                  </div>
                              </div>
                      </div>

                  </div>

                    <div class="form-group">
                      <label for="ip" class="col-sm-2 control-label">IP</label>
                      <div class="col-sm-5">
                         <input type="text" class="form-control" id="ip" name="ip">
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="idperbaikan" class="col-sm-2 control-label">Kode Perbaikan</label>
                      <div class="col-sm-5">
                         <input type="text" class="form-control" id="idperbaikan" name="idperbaikan"> 
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="idpenempatan" class="col-sm-2 control-label">Kode Penempatan</label>
                      <div class="col-sm-5">
                                      <select class="form-control" name="lokasi">
                                        <option class="disabled">Pilih Lokasi</option>
                                           <?php foreach($lokasi as $l){ ?>
                                            <tr align="left">
                                            <option><?php echo $l->nama ?></option>
                                            <?php } ?>
                                         </select>
                                      </div>
                                    </div> 

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Jenis Inventaris</label>
                      <div class="col-sm-5">
                         <select class="form-control" name="inventaris">
                         <option class="disabled">Pilih Inventaris</option>
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


<script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/ckeditor/ckeditor.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
  });
</script>