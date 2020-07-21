<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Transaksi KRS
			<small>KRS Mahasiswa</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_URL()?>admin/dashboard" ><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
			<li><a href="<?=base_URL()?>admin/krs" ><i class="fa fa-calculator"></i>&nbsp; Daftar KRS Mahasiswa</a></li>
			<li class="active"><i class="fa fa-wpforms"></i>&nbsp; Transaksi KRS</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-primary">
				<!-- form start -->
				<?=form_open('admin/krs_tambah', 'role="form"')?>
				<div class="row">
					<div class="col-md-4">
						<div class="box-body">
							<div class="form-group">
								<label>KODE KRS</label>
								<input type="text" class="form-control" name="kd_krs" placeholder="kode krs" required autofocus>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="box-body">
							<div class="form-group">
								<label>RUANG</label>
								<input type="text" class="form-control" name="ruang" placeholder="RUANG" required autofocus>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="box-body">
							<div class="form-group">
								<label>JAM KULIAH</label>
								<input type="text" class="form-control" name="jam_kuliah" placeholder="JAM KULIAH" required autofocus data-inputmask="'alias': 'hh/mm - hh/mm'" data-mask="">
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box-body">
							<div class="form-group">
								<label>KODE Mata Kuliah</label><br>
								<div class="row">
									<div class="col-xs-10">
										<input type="text" class="form-control" id="kode_mk" name="kode_mk" maxlength="5" placeholder="KODE Mata Kuliah" required readonly>
									</div>
									<div class="col-xs-2">
										<button type="button" class="btn btn-default" data-toggle="modal" data-target="#mkModal">. . .</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-7">
						<div class="box-body">
							<div class="form-group">
								<label>Nama Mata Kuliah</label>
								<input type="text" class="form-control" id="nama_mk" maxlength="30" placeholder="Nama Mata Kuliah" required readonly>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="box-body">
							<div class="form-group">
								<label>Semester</label>
								<input type="number" class="form-control" id="semester" name="semester" maxlength="2" placeholder="Semester" required readonly>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box-body">
							<div class="form-group">
								<label>NID Dosen Pengajar</label>
								<input type="text" class="form-control" id="nid" name="nid" maxlength="30" placeholder="NID Dosen Pengajar" required readonly>
							</div>
						</div>
					</div>
					<div class="col-md-9">
						<div class="box-body">
							<div class="form-group">
								<label>Nama Dosen Pengajar</label>
								<input type="text" class="form-control" id="nama_dosen" maxlength="30" placeholder="Nama Dosen Pengajar" required readonly>
							</div>
						</div>
					</div>
					
					
					
				</div>
				<div class="box-footer">
					<button type="submit" name="submit" class="btn btn-success btn-flat">Simpan</button>
					<a href="<?=base_URL()?>admin/krs" class="btn btn-warning btn-flat pull-right">Batal</a>
				</div>
				<?=form_close()?>
				<!-- form end -->
			</div>
			<!-- /.box -->
		</div>
	</div>
	</section>
	<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

	
	<!-- Modal MATA KULIAH -->
	<div class="modal fade" id="mkModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 align="center" class="modal-title" id="myModalLabel">PILIH MATA KULIAH</h4>
				</div>
				
				<div class="modal-body">
					<table id="lookup2" class="table table-hover table-striped table-bordered">
						<thead>
							<tr>
								<th style="text-align: center; width:">KODE</th>
								<th>NAMA MATA KULIAH</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($mtk as $m) { ?>
								<tr class="pilihs" data-kode_mk="<?=$m->kode_mk?>" data-nama_mk="<?=$m->nama_mk?>" data-semester="<?=$m->semester?>" data-nid="<?=$m->nid?>" data-nama_dosen="<?=getDosen($m->nid)?>">
									<td align="center"><?=$m->kode_mk?></td>
									<td><?=$m->nama_mk?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<script src="<?=base_URL()?>assets/modal/js/jquery-1.11.2.min.js"></script>
	<script src="<?=base_URL()?>assets/modal/datatables/jquery.dataTables.js"></script>
	

<style>
.pilih:hover{
	cursor: pointer;
}
</style>

	<!-- JS MATA KULIAH -->
	<script type="text/javascript">
		$(document).on('click', '.pilihs', function(e) {
			document.getElementById("kode_mk").value = $(this).attr("data-kode_mk");
			document.getElementById("nama_mk").value = $(this).attr("data-nama_mk");
			document.getElementById("semester").value = $(this).attr("data-semester");
			document.getElementById("nid").value = $(this).attr("data-nid");
			document.getElementById("nama_dosen").value = $(this).attr("data-nama_dosen");
			$('#mkModal').modal('hide');
		});
			$(function() {
			$("#lookup2").dataTable();
		})
	</script>

<style>
.pilihs:hover{
	cursor: pointer;
}
</style>