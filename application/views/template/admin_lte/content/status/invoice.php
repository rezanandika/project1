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

                        <div class="col-xs-12 col-md-12 col-lg-6">

                            <div class="box">

                                <div class="box-header">

                                </div><!-- /.box-header -->

                                
                                
                                <form action="http://go-laundry.com/demo/admin/transaksi/invoice" method="post" accept-charset="utf-8">

                                    
                                    <input type="hidden" name="id" value="61">
                                    <input type="hidden" name="id_invoice" value="100">

                                    <div class="box-body">

                                        <div class="form-group">
                                            <label>No Invoice</label>
                                            <input type="text" class="form-control" name="nama_outlet" placeholder="Nama Outlet" value="100" disabled="">
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Order</label>
                                            <input type="text" class="form-control" name="nama_outlet" placeholder="Nama Outlet" value="2016-05-30" disabled="">
                                        </div>     

                                        <div class="form-group">
                                            <label>Tanggal Selesai</label>
                                            <input type="text" class="form-control" name="nama_outlet" placeholder="Nama Outlet" value="2016-06-02" disabled="">
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Customer</label>
                                            <input type="text" class="form-control" name="nama_outlet" placeholder="Nama Outlet" value="maisal" disabled="">
                                        </div>

                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea name="keterangan" class="form-control"></textarea>
                                        </div> 

                                        
                                        <!--div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" name="slogan" placeholder="Slogan" value="" disabled />
                                        </div>

                                        <div class="input-append">
                                            <label>HP</label>
                                            <input id="url_abs4" class="form-control" name="logo" value="" disabled />
                                        </div-->

                                        <!--div class="form-group">
                                            <label>Info Lainnya</label>
                                            <input type="text" class="form-control" name="info" placeholder="Info Lainnya" required>
                                            <p class="help-block"><em>Bisa No Telpon, PIN BBM, dll</em></p>

                                        </div-->

                                    </div><!-- /.box-body -->


                                    <div class="box-footer">
                                        <a href="http://go-laundry.com/demo/admin" class="btn btn-primary"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
                                        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                                        <a href="http://go-laundry.com/demo/admin/cetak/invoice/100" class="btn btn-primary" target="_blank">Cetak <i class="fa fa-print"></i></a>
                                    </div>

                                </form>                                
                            </div>

                        </div><!-- /.col-xs-6--> 

                        <div class="col-xs-12 col-md-12 col-lg-6">

                            <h3 style="margin-top:0 !important">RINCIAN INVOICE</h3>

                            <div class="box-body table-responsive">

                                <table class="table table-bordered table-striped">

                                    <thead>
                                        <tr>
                                            <th width="20">No</th>
                                            <th>Nama Layanan</th>
                                            <th>Pilihan Layanan</th>
                                            <th>Qty</th>
                                            <th>Unit</th>
                                            <th>Harga</th>
                                            <th>Sub Total</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        
                                        
                                        <tr>
                                            <td colspan="6" style="text-align:center"><strong>Total</strong></td>
                                            <td style="border-top:2px solid #ccc; text-align:right">Rp.0</td>
                                        </tr>

                                        <tr>
                                            <td colspan="6" style="text-align:center"><strong>Diskon</strong></td>
                                            <td style="text-align:right">Rp.0</td>
                                        </tr>

                                        <tr>
                                            <td colspan="6" style="text-align:center"><strong>Grand Total</strong></td>
                                            <td style="border-top:2px solid #ccc; text-align:right; font-size:17px;"><strong>Rp.0</strong></td>
                                        </tr>

                                        <tr>
                                            <td colspan="6" style="text-align:center"><strong>Bayar</strong></td>
                                            <td style="text-align:right"><strong>Rp.30,000</strong></td>
                                        </tr>

                                        <tr>
                                            <td colspan="6" style="text-align:center"><strong>Sisa</strong></td>
                                            <td style="font-size:17px; text-align:right"><strong>Rp.30,000</strong></td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

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