<?php
    #1. koneksikan file ini
    include("../koneksi.php");

    #2. Mengambil value dari form
    $id = $_POST['id'];
    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];

    #3. Menulis query
    $sunting = "UPDATE dosens SET nidn='$nidn', nama='$nama', jabatan='$jabatan', email='$email', no_hp='$no_hp' WHERE id='$id'"; 
    
    #4. Jalankan query
    $proses = mysqli_query($koneksi, $sunting);

    #5. Mengalihkan halaman
    header("location:index.php");
?>