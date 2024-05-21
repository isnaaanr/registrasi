<?php
require 'functions.php';
$id = $_GET["id"];
$dsiswa = query("SELECT * FROM t_siswa WHERE id = $id")[0]; 
if( isset($_POST["submit"])){

    if(ubah($_POST) > 0){
        echo "
        <script>
        alert('data berhasil diubah!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal diubah!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data siswa</title>
</head>
<body>
    <h1>Ubah data siswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $dsiswa["id"];?>">
        <input type="hidden" name="gambarLama" value="<?= $dsiswa["gambar"];?>">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required value="<?= $dsiswa["nama"];?>">
            </li>
            <li>
                <label for="kelas">Kelas :</label>
                <input type="text" name="kelas" id="kelas" required value="<?= $dsiswa["kelas"];?>">
            </li>
            <li>
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" id="alamat" required value="<?= $dsiswa["alamat"];?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label> <br>
                <img src="img/<?= $dsiswa['gambar']; ?>" width="50"> <br> 
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>