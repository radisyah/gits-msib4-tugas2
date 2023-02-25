<?php
  include 'koneksi.php';
?>


<html>
<head>
    <title>Dashboard</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 85%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
</head>
<body>
  <center><h1>Data Manajemen Tentang Saya</h1><center>
  <center><a href="tambah_tentang_saya.php">+ &nbsp; Tambah</a><center>
  <br/>

  <table>
    <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Alamat</th>
          <th>No Telepon</th>
          <th>Ket</th>
          <th>Foto</th>
          <th>action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM tb_tentangsaya ORDER BY id_tentangSaya ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_error($koneksi).
            " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
  
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo ($row['email']); ?></td>
        <td><?php echo ($row['alamat']); ?></td>
        <td><?php echo ($row['no_telepon']); ?></td>
        <td><?php echo ($row['ket']); ?></td>
        <td style="text-align: center;"><img src="img/<?php echo $row['foto']; ?>" style="width: 120px;"></td>
        <td>
            <a href="edit_tentang_saya.php?id_tentangSaya=<?php echo $row['id_tentangSaya']; ?>">Edit</a> 
            <br>
            <br>
            <br>
            <a href="proses_hapus_tentang_saya.php?id_tentangSaya=<?php echo $row['id_tentangSaya']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
        </td>
    </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
  </table>

  <center><h1>Data Manajemen Projek</h1><center>
  <center><a href="tambah_projek.php">+ &nbsp; Tambah</a><center>
  <br/>

  <table>
    <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th> Ket</th>
          <th>Link</th>
          <th >Aksi</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $queryP = "SELECT * FROM tb_projek ORDER BY id ASC";
      $resultP = mysqli_query($koneksi, $queryP);
      //mengecek apakah ada error ketika menjalankan query
      if(!$resultP){
        die ("Query Error: ".mysqli_error($koneksi).
            " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($rowP = mysqli_fetch_assoc($resultP))
      {
      ?>
  
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo ($rowP['judul']); ?></td>
        <td><?php echo ($rowP['ket']); ?></td>
        <td><?php echo ($rowP['link']); ?></td>
        <td>
            <a href="edit_projek.php?id=<?php echo $rowP['id']; ?>">Edit</a> 
            <br>
            <br>
            <br>
            <a href="proses_hapus_projek.php?id=<?php echo $rowP['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
        </td>
    </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
  </table>

  <center><h1>Data Manajemen Prestasi</h1><center>
  <center><a href="tambah_prestasi.php">+ &nbsp; Tambah</a><center>
  <br/>

  <table>
    <thead>
        <tr>
          <th>No</th>
          <th>Prestasi</th>
          <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $queryP = "SELECT * FROM tb_prestasi ORDER BY id ASC";
      $resultP = mysqli_query($koneksi, $queryP);
      //mengecek apakah ada error ketika menjalankan query
      if(!$resultP){
        die ("Query Error: ".mysqli_error($koneksi).
            " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($rowP = mysqli_fetch_assoc($resultP))
      {
      ?>
  
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo ($rowP['prestasi']); ?></td>
        <td>
            <a href="edit_prestasi.php?id=<?php echo $rowP['id']; ?>">Edit</a> 
            <br>
            <br>
            <br>
            <a href="proses_hapus_prestasi.php?id=<?php echo $rowP['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
        </td>
    </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
  </table>
</body>
</html>