<?php
    #1. koneksikan file ini
    include("../koneksi.php");

    #2. Mengambil value dari form
    $id = $_POST ['id'];
    $kd = $_POST['kode'];
    $jrs = $_POST['jurusan'];
    
    #3. Menulis query
    $sunting = "UPDATE jurusans SET kode='$kd', jurusan='$jrs' WHERE id='$id'"; 
    
    #4. Jalankan query
    $proses = mysqli_query($koneksi, $sunting);

    #5. Mengalihkan halaman
    header("location:index.php");
?>