
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>halaman utama akademik</title>
  </head>

  <body>

<?php include'navbar2.php' ?>   
<div class="col" style=" margin-left: 400px; ">
  <img src="logo.jpg" style="width: 500px; height: 300px;" class="card-img-top" alt="...">

</div>

    <div class="container">
       <div class="row mb-3 py-2">
         <div class="col-md-12" style="margin: auto;">
            <h2 style="text-align: center; color: black;">AKADEMIK UNIVERSITAS BUMIGORA</h2>
            <hr>
            <div class="row">
              <?php
              require 'admin/setting.php' ;
              $query = "SELECT * FROM tbl_mahasiswa";
              $sql = mysqli_query($koneksi, $query);
              $no = 1;
           {
              ?>
            
           



              <?php 
               }
              ?>
             
    
          </div>
        </div> 
    </div>
    </div>
<?php include 'footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>