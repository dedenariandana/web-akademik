<?php 
if (isset($_SESSION['login'])){
    header('location:login.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Akademik</title>
  </head>
  <body>
<?php include'navbar.php' ?>   
<div class="container">
        <h2>Tambah Data</h2>
<?php
require 'setting.php';
if (isset($_POST['simpan'])){
    $nim_mahasiswa = $_POST['Nim_mahasiswa'];
    $nama_mahasiswa = $_POST['Nama_mahasiswa'];
    $prodi = $_POST['prodi'];
    $Matkul = $_POST['txtmatkul'];
    $sql = "INSERT INTO tbl_mahasiswa VALUES (NULL, '$nim_mahasiswa', '$nama_mahasiswa',
                                        '$prodi','$Matkul')";
    $query = mysqli_query ($koneksi,$sql);
    if ($query){
        header ('location: index.php');

}else {
    echo 'Query Error : ' . mysqli_error($koneksi);
    }
}
?>

<form action="#" method="post">
<div class = "mb-3">
    <label> Nim mahasiswa</label>
    <input type="text" name="Nim_mahasiswa" class= "form-control">

</div>
<div class = "mb-3">
    <label> Nama mahasiswa</label>
    <input type="text" name="Nama_mahasiswa" class= "form-control">
    
</div>
<div class = "mb-3">
    <label> Prodi</label>
   <input type="text" name="prodi" class="form-control">
    
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

<?php include 'footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>