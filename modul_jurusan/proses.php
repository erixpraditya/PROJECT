<?php
    #1. koneksikan file ini
    include("../koneksi.php");

    #2. Mengambil value dari form
    $kd = $_POST['kode'];
    $jrs = $_POST['jurusan'];
    
    #3. Menulis query
    $simpan = "INSERT INTO jurusans (kode,jurusan) VALUES ('$kd','$jrs')";

    #4. Jalankan query
    $proses = mysqli_query($koneksi, $simpan);

    #5. Mengalihkan halaman
    header("location:index.php");
?>