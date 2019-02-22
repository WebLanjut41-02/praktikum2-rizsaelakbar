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
      $p = $this->session->Penghuni;
      $id_penghuni = $this->input->get('id_penghuni');
      ?>
      <h2>PENGHUNI</h2>
      <h5>Nama Karyawan : <mark><?php echo $karyawan; ?></mark></h5>

      <form class="" action="<?php echo site_url(); ?>c_penghuni/proseseditpenghuni" method="post">
        <input type="text" name="id_penghuni" value="<?php echo $id_penghuni ?>" hidden><br>
        <label for="tanggal_datang">Nama </label>
        <input type="text" name="nama" value="<?php echo $p[0]->nama ?>"><br>
        <label for="tanggal_datang">Unit </label>
        <input type="number" name="unit" value="<?php echo $p[0]->unit ?>"><br>
        <label for="tanggal_datang">No KTP </label>
        <input type="text" name="no_ktp" value="<?php echo $p[0]->no_ktp ?>"><br>
        <input type="submit" name="submit" value="SUBMIT">
      </form>
<br><br><br>
      <a href="<?php echo site_url(); ?>c_paket"> <button type="button" name="button">Kembali</button> </a>
    </center>
  </body>
</html>
