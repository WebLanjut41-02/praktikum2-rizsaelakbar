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
      $paketan = $this->session->data_paket;
      ?>
      <h2>Selamat Datang</h2>
      <a href="<?php echo site_url(); ?>c_login/logout"> <button type="button" name="button"> LOG OUT </button> </a>
      <h5>Nama Karyawan : <mark><?php echo $karyawan; ?></mark></h5>

      <br>
      <br><br>
      <h2>Data Paket Belum Diambil</h2>
      <table border="1">
        <tr>
          <th>Tanggal Datang</th>
          <th>Sasaran</th>
          <th>Penerima</th>
          <th>Isi Paket</th>
          <th>Aksi</th>
        </tr>
        <tr>
          <?php foreach ($paketan as $paket) { ?>

            <tr>
              <td hidden><?php echo $paket->id_paket; ?></td>
              <td><?php echo $paket->tanggal_datang; ?></td>
              <td><?php echo $paket->sasaran; ?></td>
              <td><?php echo $paket->penerima; ?></td>
              <td><?php echo $paket->isi_paket; ?></td>
              <td> <a href="<?php echo site_url(); ?>c_paket/proseseditpaket?id_paket=<?php echo $paket->id_paket; ?>">Diambil</a> </td>
            </tr>

          <?php } ?>
        </tr>
      </table>
<br><br><br>
      <a href="<?php echo site_url(); ?>c_paket"> <button type="button" name="button"> PAKET </button> </a>
      <a href="<?php echo site_url(); ?>c_penghuni"> <button type="button" name="button"> PENGHUNI </button> </a>
    </center>
  </body>
</html>
