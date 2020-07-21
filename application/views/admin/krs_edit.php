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
				<?=form_open('admin/krs_edit', 'role="form"')?>
				<div class="row">
					<div class="col-md-4">
						<div class="box-body">
							<div class="form-group">
								<label>KODE KRS</label>
								<input type="text" class="form-control" id="kd_krs" value="<?=$krs['kd_krs']?>" placeholder="kode krs" required readonly>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="box-body">
							<div class="form-group">
								<label>RUANG</label>
								<input type="text" class="form-control" id="ruang" value="<?=$krs['ruang']?>" placeholder="RUANG" required autofocus>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="box-body">
							<div class="form-group">
								<label>JAM KULIAH</label>
								<input type="text" class="form-control" id="jam_kuliah" value="<?=$krs['jam_kuliah']?>" placeholder="JAM KULIAH" required autofocus data-inputmask="'alias': 'hh/mm - hh/mm'" data-mask="">
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box-body">
							<div class="form-group">
								<label>KODE Mata Kuliah</label><br>
								<input type="text" class="form-control" id="kode_mk" value="<?=$krs['kode_mk']?>" maxlength="5" placeholder="KODE Mata Kuliah" required readonly>
							</div>
						</div>
					</div>
					<div class="col-md-7">
						<div class="box-body">
							<div class="form-group">
								<label>Nama Mata Kuliah</label>
								<input type="text" class="form-control" id="nama_mk" value="<?=getMatkul($krs['kode_mk'])?>" maxlength="30" placeholder="Nama Mata Kuliah" required readonly>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="box-body">
							<div class="form-group">
								<label>Semester</label>
								<input type="number" class="form-control" id="semester" value="<?=getSMatkul($krs['kode_mk'])?>" maxlength="2" placeholder="Semester" required readonly>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box-body">
							<div class="form-group">
								<label>NID Dosen Pengajar</label>
								<input type="text" class="form-control" id="nid" value="<?=getDMatkul($krs['kode_mk'])?>" maxlength="30" placeholder="NID Dosen Pengajar" required readonly>
							</div>
						</div>
					</div>
					<div class="col-md-9">
						<div class="box-body">
							<div class="form-group">
								<label>Nama Dosen Pengajar</label>
								<input type="text" class="form-control" id="nama_dosen" value="<?=getDosen(getDMatkul($krs['kode_mk']))?>" maxlength="30" placeholder="Nama Dosen Pengajar" required readonly>
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
	