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
    <section class="content" style="padding-left:0px; padding-right:0px;">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
			<div class="box-header">
			   <!--<a href="http://go-laundry.com/demo/admin/pelanggan/post" class="btn btn-primary btn-sm" style="color:#fff; margin-top:5px; margin-left:10px;">Tambah Baru</a>                                </div><!-- /.box-header -->
			<div class="box-body table-responsive">
				<div id="example1_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row"><div class="col-xs-6"><div id="example1_length" class="dataTables_length"><label><select size="1" name="example1_length" aria-controls="example1"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="col-xs-6"><div class="dataTables_filter" id="example1_filter"><label>Search: <input type="text" aria-controls="example1"></label></div></div></div>
				<table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="example1_info">
					<thead>
						<tr role="row"><th style="text-align: center; width: 25px;" class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending">No</th><th style="text-align: center; width: 77px;" class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending">Customer</th><th style="text-align: center; width: 83px;" class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="No Invoice: activate to sort column ascending">No Invoice</th><th style="text-align: center; width: 120px;" class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Status Laundry: activate to sort column ascending">Status Laundry</th><th style="text-align: center; width: 83px;" class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Tgl Terima: activate to sort column ascending">Tgl Terima</th><th style="text-align: center; width: 84px;" class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Tgl Selesai: activate to sort column ascending">Tgl Selesai</th><th style="text-align: center; width: 90px;" class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Tgl Diambil: activate to sort column ascending">Tgl Diambil</th><th style="text-align: center; width: 321px;" class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Pengambil: activate to sort column ascending">Pengambil</th><th style="text-align: center; width: 53px;" class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Edit: activate to sort column ascending">Edit</th></tr>
					</thead>
					
				<tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
							<td align="center" class=" sorting_1">1</td>
							<td class=" ">Fandy</td>
							<!--<td style="text-align:center" class=" "><a href="http://go-laundry.com/demo/admin/transaksi/invoice/94">94</a></td>-->
							<td style="text-align:center" class=" "><a href="status/invoice">94</a></td>
							<td style="text-align:center" class=" ">Selesai</td>
							<td style="text-align:center" class=" ">2016-05-24</td>
							<td style="text-align:center" class=" ">2016-05-24</td>
							<td style="text-align:center" class=" ">2016-05-30</td>
							<td class=" "> Fandy</td>
							<!--<td align="center" class=" "><a href="http://go-laundry.com/demo/admin/status/edit/94" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a></td>-->
							<td align="center" class=" "><a href="status/edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a></td>
						</tr><tr class="even">
							<td align="center" class=" sorting_1">2</td>
							<td class=" ">Fandy</td>
							<!--<td style="text-align:center" class=" "><a href="http://go-laundry.com/demo/admin/transaksi/invoice/95">95</a></td>-->
							<td style="text-align:center" class=" "><a href="#">95</a></td>
							<td style="text-align:center" class=" ">Order</td>
							<td style="text-align:center" class=" ">2016-05-24</td>
							<td style="text-align:center" class=" ">2016-05-25</td>
							<td style="text-align:center" class=" "></td>
							<td class=" "></td>
							<!--<td align="center" class=" "><a href="http://go-laundry.com/demo/admin/status/edit/95" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a></td>-->
							<td align="center" class=" "><a href="status/edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a></td>
						</tr><tr class="odd">
							<td align="center" class=" sorting_1">3</td>
							<td class=" ">Fandy</td>
							<!--<td style="text-align:center" class=" "><a href="http://go-laundry.com/demo/admin/transaksi/invoice/96">96</a></td>-->
							<td style="text-align:center" class=" "><a href="#">96</a></td>
							<td style="text-align:center" class=" ">Order</td>
							<td style="text-align:center" class=" ">2016-05-24</td>
							<td style="text-align:center" class=" ">2016-05-24</td>
							<td style="text-align:center" class=" "></td>
							<td class=" "></td>
							<!--<td align="center" class=" "><a href="http://go-laundry.com/demo/admin/status/edit/96" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a></td>-->
							<td align="center" class=" "><a href="status/edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a></td>
						</tr><tr class="even">
							<td align="center" class=" sorting_1">4</td>
							<td class=" ">Maisal</td>
							<!--<td style="text-align:center" class=" "><a href="http://go-laundry.com/demo/admin/transaksi/invoice/100">100</a></td>-->
							<td style="text-align:center" class=" "><a href="#">100</a></td>
							<td style="text-align:center" class=" ">Order</td>
							<td style="text-align:center" class=" ">2016-05-30</td>
							<td style="text-align:center" class=" ">2016-06-02</td>
							<td style="text-align:center" class=" "></td>
							<td class=" "></td>
							<!--<td align="center" class=" "><a href="http://go-laundry.com/demo/admin/status/edit/100" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a></td>-->
							<td align="center" class=" "><a href="status/edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a></td>
						</tr></tbody></table>
						
						<div class="row"><div class="col-xs-6"><div class="dataTables_info" id="example1_info">Showing 1 to 4 of 4 entries</div></div><div class="col-xs-6"><div class="dataTables_paginate paging_bootstrap"><ul class="pagination"><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li class="next disabled"><a href="#">Next → </a></li></ul></div></div></div>
						<p class="help-block"><em><strong>Note:</strong> <br>Pada bagian ini anda bisa melihat rekapitulasi Status Laundry.</em></p>
			</div><!-- /.box-body -->
		</div>
          <!-- /.box -->

        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
	
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