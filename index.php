<?php
  include 'koneksi.php';
?>


<?php
// jalankan query untuk menampilkan semua data diurutkan berdasarkan tentang saya
$query = "SELECT * FROM tb_tentangsaya ORDER BY id_tentangSaya ASC";
$result = mysqli_query($koneksi, $query);

$row = mysqli_fetch_assoc($result);

?>

<?php
  // jalankan query untuk menampilkan semua data diurutkan berdasarkan proyek
  $queryP = "SELECT * FROM tb_projek ORDER BY id ASC";
  $resultP = mysqli_query($koneksi, $queryP);
  
?>

<?php
  // jalankan query untuk menampilkan semua data diurutkan berdasarkan prestasi
  $queryPr = "SELECT * FROM tb_prestasi ORDER BY id ASC";
  $resultPr = mysqli_query($koneksi, $queryPr);
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Rahmat Dimas Syahputra</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom fonts for this template -->
    <link
      href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i"
      rel="stylesheet"
    />
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet" />
  </head>

  <body id="page-top">
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top"
      id="sideNav"
    >
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Rahmat Dimas Syahputra</span>
        <span class="d-none d-lg-block">
          <img
            class="img-fluid img-profile rounded-circle mx-auto mb-2"
            src="img/<?php echo $row['foto']; ?>"
            alt=""
          />
        </span>
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Tentang Saya</a>
          </li>
          <li class="nav-item">
            <a class=" nav-link js-scroll-trigger" href="#experience"
              >Projek</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Kemampuan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">
            <span class="text-primary"><?= $row['nama']; ?></span>
          </h1>
          <div class="subheading mb-5">
          <?= $row['alamat']; ?> <?= $row['no_telepon']; ?> ·
            <a  class="text-primary" href="mailto:name@email.com"><?= $row['email']; ?></a>
          </div>
          <p class="lead mb-5">
          <?= $row['ket']; ?>
          </p>
          <div class="social-icons">
            <a href="https://www.linkedin.com/in/dimas-syahputra-560b10190/">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://github.com/radisyah">
              <i class="fab fa-github"></i>
            </a>
            <a href="https://www.instagram.com/dimassp002/">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.facebook.com/febry.a.fariz">
              <i class="fab fa-facebook-f"></i>
            </a>
          </div>
        </div>
      </section>

      <hr class="m-0" />

      <section
        class="resume-section p-3 p-lg-5 d-flex flex-column"
        id="experience"
      >
        <div class="my-auto">
          <h2 class="mb-5 text-primary">Projek</h2>

       
          <?php while($rowP = mysqli_fetch_assoc($resultP)) { ?> 
            <div class="resume-item d-flex flex-column flex-md-row mb-5">
            
            <div class="resume-content mr-auto">
              <h3 class="mb-0"><?php echo ($rowP['judul']); ?></h3>
              <p class="lead mb-3"><?php echo ($rowP['ket']); ?></p>
              <a class="lead mb-2" href=" <?php echo ($rowP['link']); ?>">
              <i class="fab fa-github"> Kunjungi</i>
              </a>
            </div>
          </div>
          <?php } ?>
          
        </div>
      </section>

      <hr class="m-0" />

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
          <h2 class="text-primary mb-5">Kemampuan</h2>

          <div class="subheading mb-3">Bahasa Pemrograman</div>
          <ul class="list-inline dev-icons">
            <li class="list-inline-item">
              <i class="fab fa-html5"></i>
            </li>
            <li class="list-inline-item">
              <i class="fab fa-css3-alt"></i>
            </li>
            <li class="list-inline-item">
              <i class="fab fa-js-square"></i>
            </li>
            <li class="list-inline-item">
              <i class="fab fa-python"></i>
            </li>
            <li class="list-inline-item">
              <i class="fab fa-java"></i>
            </li>
            <li class="list-inline-item">
              <i class="fab fa-php"></i>
            </li>
            <li class="list-inline-item">
              <i class="fab fa-cuttlefish">++</i>
            </li>
          </ul>

          <div class="subheading mb-3">Database</div>
          <ul class="list-inline dev-icons">
            <li  class="list-inline-item">
            <img
            style="width: 50px;"
            src="img/mysql.png"
            alt=""
            />           
           </li>
          </ul>

          <div class="subheading mb-3">Framework</div>
          <ul class="list-inline dev-icons">
            <li  class="list-inline-item">
            <img
            style="width: 50px;"
            src="img/bootstrap.png"
            alt=""
            />    
            </li>
            <li  class="list-inline-item">
            <img
            style="width: 50px;"
            src="img/codeigniter.png"
            alt=""
            />    
            </li>
            <li  class="list-inline-item">
            <img
            style="width: 50px;"
            src="img/laravel.png"
            alt=""
            />    
            </li>
          </ul>

      </section>

      <hr class="m-0" />


      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
        <div class="my-auto">
          <h2 class="mb-5 text-primary">Penghargaan &amp; Sertifikasi</h2>
          <ul class="fa-ul mb-0">
          <?php while($rowPr = mysqli_fetch_assoc($resultPr)) { ?> 
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
             <?= $rowPr['prestasi']; ?>
            </li>
          <?php } ?>

          

          
          </ul>
        </div>
      </section>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>
  </body>
</html>
