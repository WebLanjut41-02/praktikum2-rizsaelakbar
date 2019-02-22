<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
      <?php
      $karyawan = $this->session->nama_karyawan;
      $penghuni = $this->session->all_dataPenghuni;
      $data_paket = $this->session->all_dataPaket;
      ?>
      <h2>PENGHUNI</h2>
      <h5>Nama Karyawan : <mark><?php echo $karyawan; ?></mark></h5>

      <form class="" action="<?php echo site_url(); ?>c_penghuni/prosesinputpenghuni" method="post">
        <label for="tanggal_datang">Nama </label>
        <input type="text" name="nama"><br>
        <label for="tanggal_datang">Unit </label>
        <input type="number" name="unit" value="<?php echo $karyawan; ?>"><br>
        <label for="tanggal_datang">No KTP </label>
        <input type="text" name="no_ktp"><br>
        <input type="submit" name="submit" value="SUBMIT">
      </form>




<br><br><br>
<h2>Data Penghuni</h2>
      <table border="1">
        <tr>
          <th>Nama</th>
          <th>Unit</th>
          <th>No_KTP</th>
          <th>Edit</th>
          <th>Hapus</th>
        </tr>
        <tr>
          <?php foreach ($penghuni as $p) { ?>

            <tr>
              <td><?php echo $p->nama; ?></td>
              <td><?php echo $p->unit; ?></td>
              <td><?php echo $p->no_ktp; ?></td>
              <td> <a href="<?php echo site_url(); ?>c_penghuni/editpenghuni?id_penghuni=<?php echo $p->id_penghuni; ?>">Edit</a> </td>
              <td> <a href="<?php echo site_url(); ?>c_penghuni/hapuspenghuni?id_penghuni=<?php echo $p->id_penghuni; ?>">Hapus</a> </td>
            </tr>

          <?php } ?>
        </tr>
      </table>
<br><br><br>
      <a href="<?php echo site_url(); ?>c_beranda"> <button type="button" name="button">Kembali</button> </a>
    </center>
  </body>
</html>
