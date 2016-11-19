<!-- DATA TABLES -->
<link href="<?php echo base_url('template/admin_lte/'); ?>/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<?php if($this->session->flashdata() != NULL){ ?>
	<div class="alert alert-<?php echo $this->session->flashdata('notif_status') == true ? 'success' : 'danger' ; ?> text-center alert-dismissable col-lg-12">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<?php echo $this->session->flashdata('notif_msg') ?>
	</div>
<?php } ?>
<!--<div class="row">
	<div class="col-sm-12">
		<!-- <a class="btn btn-primary" href="<?php //echo site_url('admin/rkp/add');?>" role="button" aria-label="Tambah data" data-toggle="tooltip" data-placement="bottom" title="Tambah data"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>-->
		<!--<?php echo button_access('add', uri_string(), ''); ?>
	</div>
	<div class="col-sm-12">&nbsp;</div>
	<div class="col-sm-12">
		<table class="table table-striped table-hover" id="tbuser">
			<thead>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>No HP</th>
				<th>Email</th>
				<th>Catatan</th>
				<th>Status</th>
				<th>Edit</th>
				<th>Hapus</th>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
</div> -->

<div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Tentang Karunia Laundry</h4>
      </div>
      <div class="modal-body">
      Karunia Laundry <br>
	  Aplikasi Manajemen Laundry Berbasis Web <br>
      Version 0.0.1 <br>
      
      <div class="modal-footer">
      Copyright © 2016 - Isatech Indonesia. All Right Reserved <br><br>
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

<script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('template/admin_lte/'); ?>/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	table = $('#tbuser').DataTable({
		// "responsive": true,
		"processing": true,
		"serverSide": true,
		"ajax": "<?= base_url('index.php/user/datatable'); ?>",
		"order": [[1, 'asc']],
		// "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Semua"]],
		"pageLength": 25,
		"fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
			$('td:eq(0)', nRow).html(table.page.info().start + iDisplayIndex + 1); // numbering
		}
	});
	//$('[data-toggle="tooltip"]').tooltip();
});
$(function(){
	$('body').delegate('.delete', 'click', function(event) {
		c = confirm('Delete this user?');
		if(!c){
			return false;
		}
	});
})
</script>

 <!-- Modal -->
  <div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-users"></i> Tambah Pelanggan Baru</h4>
          <div class="modal-body">
            <form class="daftar">
              <div class="form-group">
                <label>Nama<span style="color:red"><sup>*</sup></span></label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required="">
              </div>
              <div class="form-group">
                <label>Alamat<span style="color:red"><sup>*</sup></span></label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required="">
              </div>
              <div class="form-group">
                <label>HP<span style="color:red"><sup>*</sup></span></label>
                <input type="number" class="form-control" id="hp" name="hp" placeholder="HP" required="">
                <p class="help-block"><strong>Perhatian!</strong> Harap masukan nomor hp yang masih aktif</p>
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control" id="status">
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                </select>
              </div>
              <div class="form-group">
                <label>Catatan</label>
                <input type="text" class="form-control" id="catatan" name="catatan" placeholder="Catatan">
              </div>
              <div class="modal-footer">
                <button type="button" id="batal" name="batal" class="btn btn-default" data-dismiss="modal">Batal</button>
                <input type="submit" id="simpan" name="simpan" class="btn btn-primary" value="Simpan">                                                        <p class="help-block pull-left"><span style="color:red"><sup>*</sup></span> Wajib Diisi</p><br>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>