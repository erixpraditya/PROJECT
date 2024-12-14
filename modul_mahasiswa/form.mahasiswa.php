<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project IS62</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
    
    <?php
         include_once('../navbar.php');
    ?>

<div class="container">
    <div class="row mt-5">
        <div class="col-6 m-auto">
            <div class="card">
        <div class="card-header text-center">
            <h3>Form Data Mahasiswa</h3>
        </div>
        <div class="card-body">
        <form action="proses.php" method="POST" enctype="multipart/form-data">    
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">NIM</label>
                        <input type="text" name="nim" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tmp_lahir" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                        <br>
                        <input type="radio" name="jk" value="L" class="" id="exampleInputPassword1"> Laki - Laki
                        <input type="radio" name="jk" value="P" class="" id="exampleInputPassword1"> Perempuan
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jurusan</label>
                    <select class="form-control" name="jurusans_id" id="">
                        <option value="">-Pilih Jurusan-</option>
                        <?php
                            include('../koneksi.php');
                            $sql_jur = "SELECT * FROM jurusans";
                            $qry_jur = mysqli_query($koneksi,$sql_jur);
                            foreach($qry_jur as $data_jur){
                                ?>
                                <option value="<?=$data_jur['id']?>"><?=$data_jur['jurusan']?></option>
                                <?php
                            }
                        ?>
                    </select>
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Dosen Wali</label>
                    <select class="form-control" name="dosens_id" id="">
                        <option selected>-Pilih Dosen Wali-</option>
                        <?php
                            include('../koneksi.php');
                            $sql_dos = "SELECT * FROM dosens WHERE jabatan='Full time'";
                            $qry_dos = mysqli_query($koneksi,$sql_dos);
                            foreach($qry_dos as $data_dos){

                                ?>
                                <option value="<?=$data_dos['id']?>"><?=$data_dos['nama']?></option>
                                <?php
                            }
                        ?>
                    </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Foto</label>
                        <input type="file" name="foto" class="form-control" id="exampleInputPassword1">
                    </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </form>
            </div>
         </div>

        </div>
    </div>
</div>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>
</body>
</html>