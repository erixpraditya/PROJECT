<?php
    #1. koneksikan file ini
    include("../koneksi.php");

    #2. Mengambil id dari tombol hapus
    $id = $_GET['xyz'];
    
    #3. Menulis query
    $hapus = "DELETE FROM jurusans WHERE id='$id_buku'";

    #4. Jalankan query
    $proses = mysqli_query($koneksi, $hapus);

    #5. Mengalihkan halaman
    header("location:index.php");
?>