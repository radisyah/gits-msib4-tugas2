<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id_tentangSaya'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id_tentangSaya = ($_GET["id_tentangSaya"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM tb_tentangsaya WHERE id_tentangSaya='$id_tentangSaya'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='dashboard.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke dashboard.php
    echo "<script>alert('Masukkan data id_tentangSaya.');window.location='dashboard.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Ubah Data</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <form method="POST" action="proses_edit_tentang_saya.php" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id yang akan di edit -->
        <input name="id_tentangSaya" value="<?php echo $data['id_tentangSaya']; ?>"  hidden />
        <div>
          <label>Nama</label>
          <input type="text" name="nama" value="<?php echo $data['nama']; ?>" autofocus="" required="" />
        </div>
        <div>
          <label>Email</label>
         <input type="text" name="email" value="<?php echo $data['email']; ?>" />
        </div>
        <div>
          <label>Alamat</label>
         <input type="text" name="alamat" required=""value="<?php echo $data['alamat']; ?>" />
        </div>
        <div>
          <label>No Telepon</label>
         <input type="text" name="no_telepon" required="" value="<?php echo $data['no_telepon']; ?>"/>
        </div>
        <div>
          <label>Ket</label>
         <input type="text" name="ket" required="" value="<?php echo $data['ket']; ?>"/>
        </div>
        <div>
          <label>Foto</label>
          <img src="foto/<?php echo $data['foto']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          <input type="file" name="foto" />
          <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah foto</i>
        </div>
        <div>
         <button type="submit">Simpan Perubahan</button>
        </div>
        </section>
      </form>
  </body>
</html>