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
      <h2>PAKETAN</h2>
      <h5>Nama Karyawan : <mark><?php echo $karyawan; ?></mark></h5>

      <form class="" action="<?php echo site_url(); ?>c_paket/prosesinputpaket" method="post">
        <label for="tanggal_datang">Tanggal Datang </label>
        <input type="text" name="tanggal_datang" value="<?php echo date('d-m-Y'); ?>" readonly><br>
        <label for="tanggal_datang">Sasaran </label>
        <select name="sasaran">

          <?php foreach ($penghuni as $peng) { ?>
            <option value="<?php echo $peng->nama ?>"><?php echo $peng->nama ?></option>
          <?php } ?>

        </select><br>
        <label for="tanggal_datang">Penerima </label>
        <input type="text" name="penerima" value="<?php echo $karyawan; ?>" readonly><br>
        <textarea name="isi_paket" rows="8" cols="80" placeholder="Tulis Keterangan Isi Paket ..."></textarea><br>
        <input type="submit" name="submit" value="SUBMIT">
      </form>




<br><br><br>
<h2>Semua Data Paket</h2>
      <table border="1">
        <tr>
          <th>Tanggal Datang</th>
          <th>Sasaran</th>
          <th>Penerima</th>
          <th>Isi Paket</th>
          <th>Tanggal Diambil</th>
        </tr>
        <tr>
          <?php foreach ($data_paket as $paketan) { ?>

            <tr>
              <td><?php echo $paketan->tanggal_datang; ?></td>
              <td><?php echo $paketan->sasaran; ?></td>
              <td><?php echo $paketan->penerima; ?></td>
              <td><?php echo $paketan->isi_paket; ?></td>
              <td><?php echo $paketan->tanggal_ambil; ?></td>
            </tr>

          <?php } ?>
        </tr>
      </table>
<br><br><br>
      <a href="<?php echo site_url(); ?>c_beranda"> <button type="button" name="button">Kembali</button> </a>
    </center>
  </body>
</html>
