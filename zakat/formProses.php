<?php
    session_start();
    include "../koneksi.php";

    if(isset($_POST['nama'], $_POST['nohp'], $_POST['alamat'], $_POST['masjid'] , $_POST['jenis'], $_POST['tanggungan'], $_POST['beras'], $_POST['uang'], $_POST['infak'], $_POST['tanggal'])){
        $nama = $_POST['nama'];
        $nohp = $_POST['nohp'];
        $alamat = $_POST['alamat'];
        $masjid = $_POST['masjid'];
        $jenis = $_POST['jenis'];
        $tanggungan = (int) $_POST['tanggungan'];
        $beras = (int) $_POST['beras'];
        $uang = (int) $_POST['uang'];
        $infak = (int) $_POST['infak'];
        $tanggal = $_POST['tanggal'];


        $qry = "insert into tb_form (nama, nohp, alamat, masjid, jenis, tanggungan, beras, uang, infak, tanggal) values ('$nama', '$nohp', '$alamat', '$masjid', '$jenis', '$tanggungan', '$beras', '$uang', '$infak', '$tanggal')";

        if(mysqli_query($koneksi, $qry)){  
            echo '<script>alert("Penyaluran zakat anda telah kami terima, silahkan menunggu konfirmasi dari nomor hp anda. Jazakallah Khairan.");window.location.href="index.html";</script>';
        }else{
            echo '<script>alert("Penyaluran zakat gagal, silahkan coba kembali!");window.location.href="pendaftaran.php"</script>';
        }
    }
