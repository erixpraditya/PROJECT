<?php
    #1. koneksikan file ini
    include("../koneksi.php");

    #2. Mengambil value dari form
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $jk = $_POST['jk'];
    $jurusans_id = $_POST['jurusans_id'];
    $dosens_id = $_POST['dosens_id'];
    #3. Menulis query
    $simpan = "INSERT INTO mahasiswas (nim,nama,tmp_lahir,tgl_lahir,alamat,email,jk,jurusans_id,dosens_id) VALUES ('$nim','$nama','$tmp_lahir','$tgl_lahir','$alamat','$email','$jk','$jurusans_id','$dosens_id')";

    #4. Jalankan query
    $proses = mysqli_query($koneksi, $simpan);

    #5. Mengalihkan halaman
    header("location:index.php");
?>