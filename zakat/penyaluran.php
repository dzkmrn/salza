<?
session_start();
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Website for Zakat Al Fitr">
  <title>Zakat Al Fitr 27</title>
  <link rel="icon" type="image/x-icon" href="img/salza.png" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="penyaluran.css">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
  <style>

  </style>
</head>

<body>

  <!-- Sidebar on small screens when clicking the menu icon -->
  <div class="sidenav" id="mySidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.html" onclick="closeNav()" class="w3-bar-item w3-button"><i class="fa fa-home"></i>SALZA</a>
    <a href="aturan.html" onclick="closeNav()" class="w3-bar-item w3-button"><i class="fa fa-balance-scale"></i>
      ATURAN ZAKAT</a>
    <a href="penyaluran.php" onclick="closeNav()" class="w3-bar-item w3-button"><i class="fa fa-warehouse"></i>
      PENYALURAN</a>
    <!-- <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a> -->
  </div>

  <!-- Header with full-height image -->
  <header class="bgimg-1 w3-display-container" class="responsive" id="home">
    <!-- Navbar (on top) -->
    <div class="container" id="myNavbar">
      <div class="topnav">
        <!-- Right-sided navbar links -->
        <div class="w3-right w3-hide-small">
          <a href="index.html" class="active"><i class="fa fa-home"></i> BERANDA</a>
          <a href="aturan.html"><i class="fa fa-balance-scale"></i> ATURAN ZAKAT</a>
          <a href="penyaluran.php"><i class="fa fa-warehouse"></i> PENYALURAN</a>
          <button onclick="location.href='form.html'" class="button button1"><b>SALURKAN ZAKAT<br>FITRAH DAN
              MAAL</b></a>
        </div>

        <br><br><br><br><br><br>
        <div class="card-body">
          <div class="table responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nama</th>
                  <th scope="col">No HP</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Masjid</th>
                  <th scope="col">Jenis Zakat</th>
                  <th scope="col">Jumlah Tanggungan</th>
                  <th scope="col">Beras</th>
                  <th scope="col">Uang</th>
                  <th scope="col">Infak</th>
                  <th scope="col">Tanggal</th>
                </tr>
              </thead>
              <tbody>
                <?php
                require('../koneksi.php');

                $qry1 = mysqli_query($koneksi, "select *from tb_form");
                while ($row = mysqli_fetch_array($qry1)) {
                ?>

                  <tr>
                    <td><?php echo $row['id_zakat']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['nohp']; ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['masjid']; ?></td>
                    <td><?php echo $row['jenis']; ?></td>
                    <td><?php echo $row['tanggungan']; ?></td>
                    <td><?php echo $row['beras'] . " Kg"; ?></td>
                    <td><?php echo "Rp" . $row['uang']; ?></td>
                    <td><?php echo "Rp" . $row['infak']; ?></td>
                    <td><?php echo $row['tanggal']; ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <br>

        <!-- Hide right-floated links on small screens and replace them with a menu icon -->
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" id="openbtn" onclick="openNav()">&#9776;</a>
      </div>
      <div class="logop">
        <a href="index.html" alt="Zakat Al Fitr 27">
          <div id="logo"></div>
        </a>
      </div>
    </div>



    <!-- Footer -->
    <footer class="w3-display-bottomleft w3-text-grey w3-large-2" style="padding:28px 48px">
      <a href="https://fr-fr.facebook.com/" target="_blank"><i class="fa-brands fa-facebook w3-hover-opacity"></i></a>
      <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram w3-hover-opacity"></i></a>
      <a href="https://accounts.snapchat.com/" target="_blank"><i class="fa-brands fa-snapchat w3-hover-opacity"></i></a>
      <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter w3-hover-opacity"></i></a>
      <p class="copyright">Copyright 2022 - Salat dan Zakat SALZA</p>
    </footer>


  </header>

  <script src="main.js"></script>

</body>

</html>