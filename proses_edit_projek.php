<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id = $_POST['id'];
  $judul   = $_POST['judul'];
  $ket     = $_POST['ket'];
  $link    = $_POST['link'];
  
  $query  = "UPDATE tb_projek SET judul = '$judul', ket = '$ket', link = '$link'";
  $query .= "WHERE id = '$id'";
  $result = mysqli_query($koneksi, $query);
  // periska query apakah ada error
  if(!$result){
        die ("Query gagal dijalankan: ".mysqli_error($koneksi).
                          " - ".mysqli_error($koneksi));
  } else {
    //tampil alert dan akan redirect ke halaman index.php
    //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Data berhasil diubah.');window.location='dashboard.php';</script>";
  }