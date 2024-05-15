<?php
session_start();
include "koneksi.php";
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SALZA</title>
    <link rel="icon" type="image/x-icon" href="img/salza.png" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap');
        
        body {
            font-family: 'Montserrat', sans-serif;

        }

        .judulPage {
            text-align: center;
        }

        .card-body {
            width: 70%;
            text-align: center;
            margin: auto;
        }

        thead {
            background-color: #00D28E;
            color: whitesmoke;
        }

        .navbar-nav .nav-item.active .nav-link,
        .navbar-nav .nav-item:hover .nav-link {
            color: #00D28E;
        }

        .nav-item {
            font-size: 16pt;
            font-weight: bold;
        }

        .navbar-nav:after {
            content: '';
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #00D28E;
            transform-origin: bottom right;
            transition: transform 0.25s ease-out;
        }

        .navbar-nav:hover:after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        .solat-jam>img {
            margin-left: 70%;
            -webkit-box-reflect: below 0.01% linear-gradient(transparent, transparent, #00000050);

        }

        .time {
            display: inline-block;
            position: relative;
            margin: 10px;
            -webkit-box-reflect: below 1px linear-gradient(transparent, transparent, #00000050);
        }

        .time span {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .time span:nth-child(1) {
            border-radius: 15px;
            width: 90px;
            height: 25px;
            color: #faf8f8;
            background-color: #009263;
            font-size: 12px;
            font-weight: 400;
            text-align: center;
            text-transform: uppercase;
        }

        .time:nth-of-type(2) span:nth-child(1) {
            background-color: #009263;
        }

        .time:nth-of-type(3) span:nth-child(1) {
            background-color: #009263;
        }

        .time:nth-of-type(4) span:nth-child(1) {
            background-color: #009263;
        }

        .time span:nth-child(2) {
            border-radius: 15px;
            height: 75px;
            color: #faf8f8;
            background-color: #00D28E;
            font-size: 45px;
            font-weight: 700;
        }

        .time:nth-of-type(2) span:nth-child(2) {
            background-color: #00D28E;
        }

        .time:nth-of-type(3) span:nth-child(2) {
            background-color: #00D28E;
        }

        .time:nth-of-type(4) span:nth-child(2) {
            background-color: #00D28E;
        }

        .card-body>hr {
            background-color: black;
        }

        .footer {
            height: 55px;
            width: 100%;
            color: white;
            text-align: center;
            background-color: #00D28E;
        }

        .button-zakat>button {
            background-color: #00D28E;

        }
    </style>

    <script>
        $(window).load(function() {
            $(".preloader").fadeOut("slow");
        });
    </script>

</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: #f2f2f2;">
        <a class="navbar-brand" href="#"><img src="images/salza.png" width="55" height="55" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="registeredIndex">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="loginAlert.php">Zakat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Masuk</a>
                </li>
            </ul>
        </div>
    </nav><br>

    <div class="solat-jam" style="width: 45%;float:left">
        <img src="images/iconsolat.png" width="210" height="210" alt="">
    </div>

    <div class="container" style="width: 55%;float:right;margin-top:50px">
        <div class="time">
            <span>Jam</span>
            <span id="hours">00</span>
        </div>
        <div class="time">
            <span>Menit</span>
            <span id="min">00</span>
        </div>
        <div class="time">
            <span>Detik</span>
            <span id="sec">00</span>
        </div>
    </div><br><br><br>

    <br><br><br><br><br><br>
    <div class="card-body">
        <h1 class="judulPage">Jadwal Shalat - Daerah JABODETABEK</h1>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Bulan</th>
                        <th scope="col">Shubuh</th>
                        <th scope="col">Dzuhur</th>
                        <th scope="col">Ashar</th>
                        <th scope="col">Maghrib</th>
                        <th scope="col">Isya</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require('koneksi.php');

                    $qry1 = mysqli_query($koneksi, "select *from tb_jadwal");
                    while ($row = mysqli_fetch_array($qry1)) {
                    ?>

                        <tr>
                            <td><?php echo $row['bulan']; ?></td>
                            <td><?php echo $row['shubuh']; ?></td>
                            <td><?php echo $row['dzuhur']; ?></td>
                            <td><?php echo $row['ashar']; ?></td>
                            <td><?php echo $row['maghrib']; ?></td>
                            <td><?php echo $row['isya']; ?></td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <br>
        <hr />

        <div class="ayat" style="text-align: center;">
            <img src="images/ayat.png" width="840" height="185" alt="">
        </div><br><br>

        <p>⚫⚫⚫</p>

        <br><br>
        <h2 class="judulDesk" style="font-weight: bold;font-size:18pt">Melalui ayat ini...</h2><br>
        <p style="font-size:14pt;text-align:justify">Allah memerintahkan hambanya untuk melakukan dua diantara lima rukun islam yang ada, yaitu shalat dan zakat. Dari situlah kami mendapatkan hidayah untuk membuat platform yang dapat membantu mempermudah mereka yang ingin menunaikan shalat dan zakat. Kami beri nama platform ini <b>SALZA</b> atau <b>SALat dan ZAkat</b>.</p>
        <br><br>
        <p>○○○</p>
        <br><br>
        <div style="width: 45%;float:left">
            <img src="images/zakat.png" width="400" height="400" alt="">
        </div>
        <div style="width: 55%;float:right">
            <p style="font-size:14pt;text-align:justify"> Alhamdulillah, kami telah membuka layanan penyaluran zakat melalui website ini dengan proses yang cukup mudah dan transparan. Bagi saudara/i muslim yang berkenan untuk menunaikan zakat bisa meng-klik tombol di bawah ini atau tombol di bagian navbar situs ini. Jazakumullah Khairan...</p>
            <br><br>
        </div>
        <a class="button-zakat" href="loginAlert.php"><button type="button" class="btn btn-success" style="border: 1pt black;">Salurkan Zakatmu!</button></a>
        <br><br>
    </div>
    <br><br><br><br><br><br>
    <div class="footer" style="text-align: center;">
            <p style="padding-top: 1%;">Copyright 2022 - Salat dan Zakat SALZA</p>
    </div>


</body>

<script src="clock.js"></script>


</html>