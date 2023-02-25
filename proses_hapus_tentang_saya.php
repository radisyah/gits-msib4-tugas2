<?php
include 'koneksi.php';
$id_tentangSaya = $_GET["id_tentangSaya"];
//mengambil id_tentangSaya yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM tb_tentangsaya WHERE id_tentangSaya='$id_tentangSaya' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='dashboard.php';</script>";
    }