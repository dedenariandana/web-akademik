
<?php
session_start();
if (!isset($_SESSION['login'])){
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Data akademik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Tambah Data Mahasiswa</h2>
<?php
require 'setting.php';
if (isset($_POST['simpan'])){
    $id = $_POST['id'];
    $nim_mahasiswa = $_POST['nim_mahasiswa'];
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $prodi_mahasiswa = $_POST['prodi_mahasiswa'];
    $Matkul = $_POST['Matkul'];
    $sql = "UPDATE article SET nim_mahasiswa='$nim_mahasiswa',nama_mahasiswa='$nama_mahasiswa',prodi_mahasiswa='$prodi_mahasiswa',Matkul='$Matkul' WHERE id_mahasiswa = $id";
    
    $query = mysqli_query ($koneksi,$sql);
    if ($query){
        header ('location: index.php');

    }else {
        echo 'Query Error : ' . mysqli_error($koneksi);
    }
}

if(isset($_GET['id'])){
    $id_mahasiswa = $_GET['id'];
    $query = "SELECT * FROM tbl_mahasiswa WHERE id_mahasiswa='$id_mahasiswa'";
    $sql=mysqli_query($koneksi,$query);
    $data=mysqli_fetch_object($sql);

}

?>

<form action="#" method="post">
    <input type= "hidden" name="txtid" value="<?=$id?>">
<div class = "mb-3">
    <label> nim mahasiswa</label>
    <input type="text" name="nim_mahasiswa" class="form-control" value="<?= $data->nim_mahasiswa;?>">

</div>
<div class = "mb-3">
    <label> nama mahasiswa</label>
    <input type="text" name="nama_mahasiswa" class="form-control" value="<?= $data->nama_mahasiswa;?>">

</div>
<div class = "mb-3">
    <label> prodi mahasiswa</label>
    <input type="text" name="prodi_mahasiswa" class="form-control" value="<?= $data->prodi_mahasiswa;?>">

</div>
<div class = "mb-3">
    <label> Matkul</label>
    <select name="txtmatkul">
        <option value="analisis_algoritma">Analisis Algoritma</option>
        <option value="pemograman_linear">Pemograman Linear</option>
        <option value="pemrograman_web">Pemrograman Web</option>
        <option value="teknologi_multimedia">Teknologi Multimedia</option>
        <option value="testing_implementasi_perangkat_lunak">Testing Implementasi Perangkat Lunak</option>
        <option value="teori_bahasa_otomata">Teori Bahasa Otomata</option>
    </select>
    

</div>
<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
<a href="index.php" class="btn btn-secondary">Kembali</a>

        </form>
    </div>
</body>
</html>