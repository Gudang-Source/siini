<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
Nilai Mahasiswa
<small>Daftar Nilai</small>
</h1>
<ol class="breadcrumb">
<li><a href="<?=base_URL()?>admin/dashboard" ><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
<li class="active"><i class="fa fa-calculator"></i>&nbsp; Nilai Mahasiswa</li>
</ol>
</section>
<!-- Main content -->
<section class="content">

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

<!-- /.box-header -->
<div class="box-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
<th width="10%"><center>NO</center></th>
<th>MAHASISWA</th>
<th>MATA KULIAH</th>
<th>DOSEN PENGAJAR</th>
<th><center>SKS</center></th>
<th><center>NILAI</center></th>
<th><center>GRADE</center></th>

</tr>
</thead>
<tbody>
<?php
$no = 1;
foreach($nil as $n) :
?>

<tr>
<td align="center"><?=$no?>.</td>
<td><?=getMhs($n->nim)?></td>
<td><?=getMatkul($n->kode_mk)?></td>
<td><?=getDosen($n->nid)?></td>
<td align="center"><?=getSKSMatkul($n->kode_mk)?></td>
<td align="center"><?=$n->nilai?></td>
<td align="center"><?=$n->grade?></td>
<td align="center">
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