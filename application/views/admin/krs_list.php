<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			KRS Mahasiswa
			<small>Daftar KRS</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_URL()?>admin/dashboard" ><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
			<li class="active"><i class="fa fa-calculator"></i>&nbsp; KRS Mahasiswa</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">

			<?php
				if ($this->session->flashdata('simpan')) {
					echo "<div class='callout callout-success' id='alert'>
					<h4><i class='icon fa fa-check'></i>&nbsp; BERHASIL</h4>
					<p>".$this->session->flashdata('simpan')."</p>
					</div>";
				} else if ($this->session->flashdata('gagal')) {
					echo "<div class='callout callout-danger' id='alert'>
					<h4><i class='icon fa fa-ban'></i>&nbsp; GAGAL</h4>
					<p>".$this->session->flashdata('gagal')."</p>
					</div>";
				} else if ($this->session->flashdata('salah')) {
					echo "<div class='callout callout-warning' id='alert'>
					<h4><i class='icon fa fa-warning'></i>&nbsp; PERINGATAN</h4>
					<p>".$this->session->flashdata('salah')."</p>
					</div>";
				}
			?>

			<!-- Info boxes -->
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">
						<a href="<?=base_URL()?>admin/krs_tambah" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i>&nbsp; Tambah</a>
					</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="10%"><center>NO</center></th>
								<th>KODE KRS</th>
								<th><center>JAM KULIAH</center></th>
								<th><center>RUANG</center></th>
								<th>MATA KULIAH</th>
								<th>DOSEN PENGAJAR</th>
								<th width="5%"><center>AKSI</center></th>
							</tr>
						</thead>
						<tbody>
							<?php
								$no = 1;
								foreach($krs as $n) :
							?>

							<tr>
								<td align="center"><?=$no?>.</td>
								<td align="center"><?=$n->kd_krs?></td>
								<td align="center"><?=$n->jam_kuliah?></td>								
								<td align="center"><?=$n->ruang?></td>								
								<td><?=getMatkul($n->kode_mk)?></td>
								<td><?=getDosen($n->nid)?></td>								
								<td align="center">
									<a href="<?=base_URL()?>admin/krs_edit/<?=$n->kd_krs?>" onclick="return confirm('Kamu yakin ingin memperbaharui data ini ?')" class="btn btn-xs btn-warning btn-flat" title="Edit Data"><i class="fa fa-edit"></i></a>
									<a href="<?=base_URL()?>admin/krs_hapus/<?=$n->kd_krs?>" onclick="return confirm('Kamu yakin ingin menghapus data ini ?')" class="btn btn-xs btn-danger btn-flat" title="Hapus Data"><i class="fa fa-trash"></i></a>
								</td>
							</tr>

							<?php $no++; endforeach; ?>
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->