<?php 
if($state == "edit"){
  $id_detail = $d['id_detail'];
  $id_barang = $d['id_barang'];
  $nama_barang = $d['nama_barang'];
  $spesifikasi = $d['spesifikasi'];
  $id_windows = $d['id_windows'];
  $id_antivirus = $d['id_antivirus'];
  $id_office = $d['id_office'];
  $id_penempatan = $d['id_penempatan'];
  $ip = $d['IP'];
  

  $action =  "update";
}else{
  $id_barang ="";
  $nama ="";
  $spesifikasi ="";
  $id_kategori ="";
  $jumlah ="";
  $satuan ="";
  $id_invent ="";
  $action ="insert";
}

?>
<link rel="stylesheet" href="<?php echo base_url('template/admin_lte/'); ?>/plugins/iCheck/all.css">

 <div class="row">
            
            <!-- right column -->
            <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Barang</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form method="post" class="form-horizontal" action="<?php echo base_url()."index.php/barang/detail_update" ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="iddetail" class="col-sm-2 control-label">Kode Detail Barang</label>
                      <div class="col-sm-5 input-group">

                        <input disabled type="text" class="form-control" id="iddetail" value="<?= $id_detail; ?>" name="iddetail">
                        <input type="hidden" class="form-control" id="iddetail" value="<?= $id_detail; ?>" name="iddetail">
                       
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Nama Barang</label>
                      <div class="col-sm-5 input-group">
                    
                        <input type="text" class="form-control" id="nama" value="<?php echo $nama_barang ?>" name="namadetail" disabled> </input>

                         <input type="hidden" class="form-control" id="id_barang" value="<?php echo $d['id_barang'] ?>" name="id_barang" >
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Spesifikasi</label>
                      <div class="col-sm-5 input-group">
                    
                         <textarea class="form-control" id="spesifikasi" name="spesifikasi" disabled><?php echo $d['spesifikasi'] ?></textarea>
                       
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
                                        <select class="form-control select2" name="id_antivirus">
                                        <option class="disabled">Pilih Antivirus</option>
                                         <?php foreach($antivirus as $av){
                                            $sel=""; if(isset($id_antivirus)){
                                                if($id_antivirus == $av->id_antivirus) $sel = "selected";
                                            }
                                          ?>
                                          <option value="<?= $av->id_antivirus ?>" <?= $sel; ?>><?php echo $av->nama_antivirus ?></option>
                                          <?php } ?>
                                       </select>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Windows</label>

                                      <div class="col-sm-8">
                                        <select class="form-control select2" name="id_windows">
                                        <option class="disabled">Pilih Windows</option>
                                           <?php foreach($windows as $w){
                                              $sel="";  if(isset($id_windows)){
                                                  if($id_windows == $w->id_windows) $sel="selected";

                                                }
                                             ?>
                                          
                                            <option value="<?= $w->id_windows ?>" <?= $sel; ?>><?php echo $w->nama_windows ?></option>
                                            <?php } ?>
                                         </select>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Office</label>

                                      <div class="col-sm-8">
                                        <select class="form-control select2" name="id_office">
                                        <option class="disabled">Pilih Office</option>
                                           <?php foreach($office as $o){ 
                                            $sel=""; if(isset($id_office)){
                                              if($id_office == $o->id_office) $sel="selected";
                                            }
                                             ?>
                                           
                                            <tr align="left">
                                            <option value="<?= $o->id_office ?>" <?= $sel ?>><?php echo $o->nama_office ?></option>
                                            <?php } ?>
                                         </select>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Lain-lain</label>

                                      <div class="col-sm-8">
                                        <!-- Button trigger modal -->
                                        <?php foreach ($lain as $ln) { 
                                          $sel=''; $hide=""; if(isset($id_detail)){
                                            foreach ($brglain as $xx) {
                                              if($xx['id_lain'] == $ln['id_lain'])$sel="checked";#
                                                
                                                $hide .='<input type="hidden" name="deletebarang" value="';
                                                $hide .=$xx['idlainbarang'];
                                                $hide .= '">';
                                                
                                              
                                          }
                                        ?>
                                        <div class="col-md-6">
                                          <div class="row">
                                              <div class="checkbox">
                                              <label>
                                                <?= $hide ?>
                                                <input type="checkbox" name="checks[]" value="<?= $ln['id_lain'] ?>" class="minimal" <?= $sel; ?>> <?= $ln['deskripsi'] ?>
                                                </label>
                                              </div>
                                         </div>
                                        </div>
                                        <?php } } ?>
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

                    <!-- <div class="form-group">
                      <label for="ip" class="col-sm-2 control-label">IP</label>
                      <div class="col-sm-5">
                         <input type="text" class="form-control" id="ip" name="ip" value="<?php if(isset($ip)) echo $ip,'' ?>">
                      </div>
                    </div> -->
                 <div class="form-group">
                <label for="ip" class="col-sm-2 control-label">IP</label>

                <div class="input-group col-md-5">
                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'ip'" id="ip" name="ip" value="<?php if(isset($ip)) echo $ip,'' ?>" data-mask>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->



                     <div class="form-group">
                      <label for="idperbaikan" class="col-sm-2 control-label">Kode Perbaikan</label>
                      <div class="col-sm-5 input-group">
                         <input type="text" class="form-control" id="idperbaikan" name="idperbaikan"> 
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="idpenempatan" class="col-sm-2 control-label">Kode Penempatan</label>
                      <div class="col-sm-5 input-group">
                                      <select class="form-control select2" name="id_penempatan">
                                        <option class="disabled">Pilih Lokasi</option>
                                           <?php foreach($lokasi as $l){
                                            $sel=""; if(isset($id_penempatan)){
                                              if($id_penempatan == $l->id_lokasi) $sel="selected";
                                              } ?>
                                            <tr align="left">
                                            <option value="<?= $l->id_lokasi; ?>" <?= $sel; ?>><?php echo $l->nama_lokasi ?></option>
                                            <?php } ?>
                                         </select>
                                      </div>
                                    </div> 

                 <!--    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Jenis Inventaris</label>
                      <div class="col-sm-5">
                         <select class="form-control" name="inventaris">
                         <option class="disabled">Pilih Inventaris</option>
                           <?php foreach($inventaris as $i){ ?>
                            <tr align="left">
                            <option><?php echo $i->nama_inventaris ?></option>
                            <?php } ?>
                         </select>
                      </div>
                    </div> -->
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10 input-group">
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


<!-- <script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/ckeditor/ckeditor.js"></script> -->
<script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/iCheck/iCheck.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    // CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor

     //iCheck for checkbox and radio inputs
        // $('input[type="checkbox"].minimal').iCheck({
        //   checkboxClass: 'icheckbox_minimal-blue',
        //   // radioClass: 'iradio_minimal-blue'
        // });
       
        // $(".minimal").on("click", function () {
        //   // body...
        // // var checks =  document.getElementsByClassName('minimal').checked;


        // })
  });

</script>





