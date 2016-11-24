<link rel="stylesheet" href="<?php echo base_url('template/admin_lte'); ?>/plugins/timepicker/bootstrap-timepicker.min.css"> 
   <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url('template/admin_lte'); ?>/plugins/datepicker/datepicker3.css"> 


 <div class="row">
            
            <!-- right column -->
            <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"><?= $title; ?></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form method="post" class="form-horizontal" action="<?php echo base_url()."index.php/pemeliharaan/insert"; ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="idpemeliharaan" class="col-sm-2 control-label">Kode Pemeliharaan</label>
                      <div class="col-sm-5 input-group">
                                <div class="input-group-addon">
                                  <i class="fa fa-code"></i>
                                </div>
                        <input type="text" class="form-control" id="idpemeliharaan" placeholder="Kode Pemeliharaan" name="idpemeliharaan" value="<?php if(isset($id_pemeliharaan)) echo $id_pemeliharaan,''  ?>" >
                      </div>
                    </div>


                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Lokasi</label>
                      <div class="col-sm-5 input-group">
                         <select class="form-control select2" name="idlokasi" id="idlokasi">
                         <option>Asal Lokasi</option>
                          <?php  foreach($lokasi as $d){ 
                               $sel=""; if(isset($id_kategori)){
                                  if($id_lokasi == $d['id_lokasi'])
                                    $sel="selected='selected'";} ?>
                         
                          <option value="<?= $d['id_lokasi'] ?>" <?php echo $sel ?>><?php echo $d['nama_lokasi'] ?></option>

                          <?php } ?>
                         </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Detail Barang</label>
                      <div class="col-sm-5 input-group">
                         <select class="form-control select2" name="iddetail" id="iddetail">
                           
                         </select>
                      </div>
                    </div>
                    <!-- <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Mulai</label>
                      <div class="col-sm-5">
                        <input type="">
                      </div>
                    </div> -->

                            <!-- Date -->
                            <div class="form-group">
                              <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Mulai</label>
                              <div class="col-sm-5 input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control" id="datepicker1" placeholder="Tanggal Mulai" name="tglmulai" value="<?php if(isset($tgl_mulai)) echo $tgl_mulai,''  ?>" >
                              </div>
                              <!-- /.input group -->
                            </div>


                            <div class="bootstrap-timepicker">
                              <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Waktu Mulai</label>

                                <div class=" col-sm-2 input-group">
                                  <input type="text" class="form-control timepicker" name="waktumulai">


                                  <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>

                                  </div>

                                </div>
                              </div>
                            </div>


                            <div class="form-group">
                              <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Selesai</label>
                              <div class="col-sm-5 input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control" id="datepicker2" placeholder="Tanggal Selesai" name="tglselesai" value="<?php if(isset($tgl_selesai)) echo $tgl_selesai,''  ?>" >
                              </div>
                              <!-- /.input group -->
                            </div>


                            <div class="bootstrap-timepicker">
                              <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Waktu Selesai</label>

                                <div class=" col-sm-2 input-group">
                                  <input type="text" class="form-control timepicker" name="waktuselesai">

                                  <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                  </div>
                                </div>
                              </div>
                            </div>


                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Kerusakan</label>
                      <div class="col-sm-5 input-group">
                         <textarea class="form-control" id="kerusakan" placeholder="Kerusakan" name="kerusakan"><?php if(isset($kerusakan)) echo $kerusakan,'' ?></textarea> 
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Penanganan</label>
                      <div class="col-sm-5 input-group">
                         <textarea class="form-control" id="penanganan" placeholder="Penanganan" name="penanganan"><?php if(isset($penanganan)) echo $penanganan,'' ?></textarea> 
                      </div>
                    </div>


                    
                   
                   
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



<script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script>
  $(function () {
//Date picker
    $('#datepicker1').datepicker({
      autoclose: true
    });
    $('#datepicker2').datepicker({
      autoclose: true
    });

     //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });

     $('#idlokasi').on('change', function(){
       $.get(
              "<?php echo base_url().'index.php/pemeliharaan/ambilBarang'; ?>",
               {id: $(this).val()},function(data){
                $("#iddetail").html(data);
              })
       })
    
  });
  </script>