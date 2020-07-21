<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <title>Laporan Mahasiswa</title>
    <link rel="stylesheet" href="<?=base_URL()?>assets/pdf/style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="<?=base_URL()?>uploads/logo/logo2.png" alt="logo">
      </div>
      <h1>Laporan Data Mahasiswa</h1>
    </header>

    <main>
      <table>
        <thead>
          <tr>
            <th style="text-align: center">NO</th>
            <th style="text-align: center">NIM</th>            
            <th style="text-align: center;">NAMA</th>
            <th style="text-align: center">JURUSAN</th>
            <th style="text-align: center">SEMESTER</th>
            <th style="text-align: center">JENJANG</th>            
          </tr>
        </thead>
        <tbody>

          <?php 
            $no = 1; 
            foreach($mhs as $m)  :
          ?>

          <tr>
            <td style="text-align: center"><?=$no?>.</td>
            <td style="text-align: center"><?=$m->nim?></td>
            <td style="text-align: center"><?=$m->nama_mhs?></td>
            <td style="text-align: left"><?=$m->jurusan?></td>
            <td style="text-align: center"><?=($m->semester)?></td>
            <td style="text-align: center"><?=($m->jenjang_mhs)?></td>
            
          </tr>
          <tr></tr>
          <tr>

          <?php $no++; endforeach; ?>
          
          <td colspan="7" class="grand total">TOTAL MAHASISWA : </td>
            <td class="grand total" style="text-align: center"><?=$siswa?></td>
          </tr>

        </tbody>
      </table>
      </div>
    </main>

  </body>
</html>