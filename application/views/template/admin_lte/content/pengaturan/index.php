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
				<h3 class="box-title">Master Outlet</h3>
			</div><!-- /.box-header -->
				<!--<form action="http://go-laundry.com/demo/admin/outlet/update" method="post" accept-charset="utf-8">-->
				<form action="#" method="post" accept-charset="utf-8">
				<input type="hidden" name="id" value="1">
				<div class="box-body">
					<div class="form-group">
						<label>Nama Outlet</label>
						<input type="text" class="form-control" name="nama_outlet" placeholder="Nama Laundry" value="" required="">
					</div>
					<div class="form-group">
						<label>Slogan</label>
						<input type="text" class="form-control" name="slogan" placeholder="Slogan" value="" required="">
					</div>
					<div class="input-append">
						<label>Logo</label>
						<input id="url_abs4" class="form-control" name="logo" style="margin-bottom:3px;" placeholder="Logo" value="">
						<a href="javascript:;" class="btn btn-primary btn-sm" onclick="moxman.browse({fields : 'url_abs4'});">Pilih file..</a>
					</div> <br>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" class="form-control" name="alamat" placeholder="Alamat" value="" required="">
						<!--<div id="mceu_16" class="mce-tinymce mce-container mce-panel" hidefocus="1" tabindex="-1" role="application" style="visibility: hidden; border-width: 1px;"><div id="mceu_16-body" class="mce-container-body mce-stack-layout"><div id="mceu_17" class="mce-container mce-menubar mce-toolbar mce-first mce-stack-layout-item" role="menubar" style="border-width: 0px 0px 1px;"><div id="mceu_17-body" class="mce-container-body mce-flow-layout"><div id="mceu_18" class="mce-widget mce-btn mce-menubtn mce-first mce-flow-layout-item" tabindex="-1" aria-labelledby="mceu_18" role="menuitem" aria-haspopup="true"><button id="mceu_18-open" role="presentation" type="button" tabindex="-1"><span>File</span> <i class="mce-caret"></i></button></div><div id="mceu_19" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" aria-labelledby="mceu_19" role="menuitem" aria-haspopup="true"><button id="mceu_19-open" role="presentation" type="button" tabindex="-1"><span>Edit</span> <i class="mce-caret"></i></button></div><div id="mceu_20" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" aria-labelledby="mceu_20" role="menuitem" aria-haspopup="true"><button id="mceu_20-open" role="presentation" type="button" tabindex="-1"><span>Insert</span> <i class="mce-caret"></i></button></div><div id="mceu_21" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" aria-labelledby="mceu_21" role="menuitem" aria-haspopup="true"><button id="mceu_21-open" role="presentation" type="button" tabindex="-1"><span>View</span> <i class="mce-caret"></i></button></div><div id="mceu_22" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" aria-labelledby="mceu_22" role="menuitem" aria-haspopup="true"><button id="mceu_22-open" role="presentation" type="button" tabindex="-1"><span>Format</span> <i class="mce-caret"></i></button></div><div id="mceu_23" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" aria-labelledby="mceu_23" role="menuitem" aria-haspopup="true"><button id="mceu_23-open" role="presentation" type="button" tabindex="-1"><span>Table</span> <i class="mce-caret"></i></button></div><div id="mceu_24" class="mce-widget mce-btn mce-menubtn mce-last mce-flow-layout-item" tabindex="-1" aria-labelledby="mceu_24" role="menuitem" aria-haspopup="true"><button id="mceu_24-open" role="presentation" type="button" tabindex="-1"><span>Tools</span> <i class="mce-caret"></i></button></div></div></div><div id="mceu_25" class="mce-toolbar-grp mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" role="group"><div id="mceu_25-body" class="mce-container-body mce-stack-layout"><div id="mceu_26" class="mce-container mce-toolbar mce-first mce-last mce-stack-layout-item" role="toolbar"><div id="mceu_26-body" class="mce-container-body mce-flow-layout"><div id="mceu_27" class="mce-container mce-first mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_27-body"><div id="mceu_0" class="mce-widget mce-btn mce-first mce-disabled" tabindex="-1" aria-labelledby="mceu_0" role="button" aria-label="Undo" aria-disabled="true"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-undo"></i></button></div><div id="mceu_1" class="mce-widget mce-btn mce-last mce-disabled" tabindex="-1" aria-labelledby="mceu_1" role="button" aria-label="Redo" aria-disabled="true"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-redo"></i></button></div></div></div><div id="mceu_28" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_28-body"><div id="mceu_2" class="mce-widget mce-btn mce-menubtn mce-first mce-last" tabindex="-1" aria-labelledby="mceu_2" role="button" aria-haspopup="true"><button id="mceu_2-open" role="presentation" type="button" tabindex="-1"><span>Formats</span> <i class="mce-caret"></i></button></div></div></div><div id="mceu_29" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_29-body"><div id="mceu_3" class="mce-widget mce-btn mce-first" tabindex="-1" aria-labelledby="mceu_3" role="button" aria-label="Bold"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bold"></i></button></div><div id="mceu_4" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_4" role="button" aria-label="Italic"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-italic"></i></button></div></div></div><div id="mceu_30" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_30-body"><div id="mceu_5" class="mce-widget mce-btn mce-first" tabindex="-1" aria-labelledby="mceu_5" role="button" aria-label="Align left"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignleft"></i></button></div><div id="mceu_6" class="mce-widget mce-btn mce-active" tabindex="-1" aria-labelledby="mceu_6" role="button" aria-label="Align center" aria-pressed="true"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-aligncenter"></i></button></div><div id="mceu_7" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_7" role="button" aria-label="Align right"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignright"></i></button></div><div id="mceu_8" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_8" role="button" aria-label="Justify"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignjustify"></i></button></div></div></div><div id="mceu_31" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_31-body"><div id="mceu_9" class="mce-widget mce-btn mce-splitbtn mce-menubtn mce-first" role="button" tabindex="-1" aria-label="Bullet list" aria-haspopup="true"><button type="button" hidefocus="1" tabindex="-1"><i class="mce-ico mce-i-bullist"></i></button><button type="button" class="mce-open" hidefocus="1" tabindex="-1"> <i class="mce-caret"></i></button></div><div id="mceu_10" class="mce-widget mce-btn mce-splitbtn mce-menubtn" role="button" tabindex="-1" aria-label="Numbered list" aria-haspopup="true"><button type="button" hidefocus="1" tabindex="-1"><i class="mce-ico mce-i-numlist"></i></button><button type="button" class="mce-open" hidefocus="1" tabindex="-1"> <i class="mce-caret"></i></button></div><div id="mceu_11" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_11" role="button" aria-label="Decrease indent"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-outdent"></i></button></div><div id="mceu_12" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_12" role="button" aria-label="Increase indent" aria-disabled="false"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-indent"></i></button></div></div></div><div id="mceu_32" class="mce-container mce-last mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_32-body"><div id="mceu_13" class="mce-widget mce-btn mce-first" tabindex="-1" aria-labelledby="mceu_13" role="button" aria-label="Insert/edit link"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-link"></i></button></div><div id="mceu_14" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_14" role="button" aria-label="Insert/edit image"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-image"></i></button></div><div id="mceu_15" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_15" role="button" aria-label="Upload an image"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-image"></i>&nbsp;Upload</button></div></div></div></div></div></div></div><div id="mceu_33" class="mce-edit-area mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" role="group" style="border-width: 1px 0px 0px;"><iframe id="alamat_ifr" frameborder="0" allowtransparency="true" title="Rich Text Area. Press ALT-F9 for menu. Press ALT-F10 for toolbar. Press ALT-0 for help" src='javascript:""' style="width: 100%; height: 150px; display: block;"></iframe></div><div id="mceu_34" class="mce-statusbar mce-container mce-panel mce-last mce-stack-layout-item" hidefocus="1" tabindex="-1" role="group" style="border-width: 1px 0px 0px;"><div id="mceu_34-body" class="mce-container-body mce-flow-layout"><div id="mceu_35" class="mce-path mce-first mce-flow-layout-item"><div role="button" class="mce-path-item mce-last" data-index="0" tabindex="-1" id="mceu_35-0" aria-level="0">p</div></div><div id="mceu_36" class="mce-last mce-flow-layout-item mce-resizehandle"><i class="mce-ico mce-i-resize"></i></div></div></div></div></div><textarea name="alamat" id="alamat" style="display: none;" aria-hidden="true">&lt;p style="text-align: center;"&gt;&lt;em&gt;Jalan Kaliurang Gang Pandega Bhakti No.999&lt;br /&gt;DepKarunia, Sleman 55281&lt;/em&gt;&lt;/p&gt;</textarea>-->
					</div>
					<!--div class="form-group">
						<label>Info Lainnya</label>
						<input type="text" class="form-control" name="info" placeholder="Info Lainnya" required>
						<p class="help-block"><em>Bisa No Telpon, PIN BBM, dll</em></p>
					</div-->
				</div><!-- /.box-body -->

				<div class="box-footer">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
					<a href="#" class="btn btn-primary" onclick="javascript:window.history.back()">Kembali</a>
				</div>
			</form>                            
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