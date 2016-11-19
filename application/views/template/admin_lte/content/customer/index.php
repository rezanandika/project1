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
		<!-- <?php echo button_access('add', uri_string(), ''); ?>
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

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12" style="padding-left:0px; padding-right:0px;">
          <div class="box">
			<div class="box-header">
			   <a href="customer/form" class="btn btn-primary btn-sm" style="color:#fff; margin-top:5px; margin-left:0px;">Tambah Baru</a>                                </div><!-- /.box-header -->
			<div class="box-body table-responsive">
				<div id="example1_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row"><div class="col-xs-6"><div id="example1_length" class="dataTables_length"><label><select size="1" name="example1_length" aria-controls="example1"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="col-xs-6"><div class="dataTables_filter" id="example1_filter"><label>Search: <input type="text" aria-controls="example1"></label></div></div></div><table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="example1_info">
					<thead>
						<tr role="row"><th width="20" class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 19px;">No</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Nama: activate to sort column ascending" style="width: 66px;">Nama</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Alamat: activate to sort column ascending" style="width: 105px;">Alamat</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="No HP: activate to sort column ascending" style="width: 138px;">No HP</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 302px;">Email</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Catatan: activate to sort column ascending" style="width: 152px;">Catatan</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 71px;">Status</th><th width="10" class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Edit: activate to sort column ascending" style="width: 24px;">Edit</th><th width="10" class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Hapus: activate to sort column ascending" style="width: 39px;">Hapus</th></tr>
					</thead>
					
					<tfoot>
						<tr><th rowspan="1" colspan="1">No</th><th rowspan="1" colspan="1">Nama</th><th rowspan="1" colspan="1">Alamat</th><th rowspan="1" colspan="1">No HP</th><th rowspan="1" colspan="1">Email</th><th rowspan="1" colspan="1">Catatan</th><th rowspan="1" colspan="1">Status</th><th width="10" rowspan="1" colspan="1">Edit</th><th width="10" rowspan="1" colspan="1">Hapus</th></tr>
					</tfoot>
				<tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
							<td align="center" class=" sorting_1">1</td>
							<td class=" ">Fandy</td>
							<td class=" ">Buaran</td>
							<td class=" ">085294961458</td>
							<td class=" ">fandykusumafaizal@yahoo.co.id</td>
							<td class=" ">Pelanggan Baru</td>
							<td class=" ">Aktif</td>
							<!--<td align="center" class=" "><a href="http://go-laundry.com/demo/admin/pelanggan/edit/56"><i class="fa fa-pencil-square-o"></i></a></td>
							<td align="center" class=" "><a href="http://go-laundry.com/demo/admin/pelanggan/hapus/56" onclick="return ConfirmDelete();"><i class="fa fa-trash-o"></i></a></td>-->
							<td align="center" class=" "><a href="#"><i class="fa fa-pencil-square-o"></i></a></td>
							<td align="center" class=" "><a href="#" onclick="return ConfirmDelete();"><i class="fa fa-trash-o"></i></a></td>
						</tr><tr class="even">
							<td align="center" class=" sorting_1">2</td>
							<td class=" ">Ana</td>
							<td class=" ">Jl. Ana</td>
							<td class=" ">092334544345</td>
							<td class=" ">ana@ana.com</td>
							<td class=" "></td>
							<td class=" ">Aktif</td>
							<!--<td align="center" class=" "><a href="http://go-laundry.com/demo/admin/pelanggan/edit/57"><i class="fa fa-pencil-square-o"></i></a></td>
							<td align="center" class=" "><a href="http://go-laundry.com/demo/admin/pelanggan/hapus/57" onclick="return ConfirmDelete();"><i class="fa fa-trash-o"></i></a></td>-->
							<td align="center" class=" "><a href="#"><i class="fa fa-pencil-square-o"></i></a></td>
							<td align="center" class=" "><a href="#" onclick="return ConfirmDelete();"><i class="fa fa-trash-o"></i></a></td>
						</tr><tr class="odd">
							<td align="center" class=" sorting_1">3</td>
							<td class=" ">Maisal</td>
							<td class=" ">Lamdingin</td>
							<td class=" ">08116831011</td>
							<td class=" "></td>
							<td class=" "></td>
							<td class=" ">Aktif</td>
							<!--<td align="center" class=" "><a href="http://go-laundry.com/demo/admin/pelanggan/edit/58"><i class="fa fa-pencil-square-o"></i></a></td>
							<td align="center" class=" "><a href="http://go-laundry.com/demo/admin/pelanggan/hapus/58" onclick="return ConfirmDelete();"><i class="fa fa-trash-o"></i></a></td>-->
							<td align="center" class=" "><a href="#"><i class="fa fa-pencil-square-o"></i></a></td>
							<td align="center" class=" "><a href="#" onclick="return ConfirmDelete();"><i class="fa fa-trash-o"></i></a></td>
						</tr></tbody></table><div class="row"><div class="col-xs-6"><div class="dataTables_info" id="example1_info">Showing 1 to 3 of 3 entries</div></div><div class="col-xs-6"><div class="dataTables_paginate paging_bootstrap"><ul class="pagination"><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li class="next disabled"><a href="#">Next → </a></li></ul></div></div></div></div>
				 <p class="help-block"><em><strong>Note:</strong> <br>Pada bagian ini anda bisa menambah, merubah atau menghapus data Pelanggan Laundry anda.</em></p>
			</div><!-- /.box-body -->
		</div>
          <!-- /.box -->

        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
	
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