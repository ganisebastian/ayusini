<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Alquran - Ayusini.com</title>
    <style> 
      @font-face{
        font-family: 'Uthmani';
        src: url('font/UthmanicHafs1Ver09.otf') format('truetype');
    }
    .arabic {
      font-family: 'uthmani', serif;
      font-size: 22px;
      font-weight: bold;
      direction: rtl;
      padding: 0 5px;
      margin: 0;
    }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="img/logo.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Link satu</a>
        <a class="nav-link" href="#">Link dua</a>
        <a class="nav-link" href="#">Link tiga</a>
        
      </div>
    </div>
  </div>
</nav>
  </head>
  <body>
 <br>
 <br>
 <div class="container">
    <h1 class="text-center">Alquran - Ayusini</h1>
    <h3 class="text-center">Al-Qur'an Digital Online, Mengaji Semakin Mudah Dengan Adanya Quran Online</h3>
    <br>
    <br>
    <hr>
    <table class="table table-striped table-bordered">
    <tr>
         <th>No.</th>
         <th>Surah</th>
         <th>Arti</th>
         <th>Jumlah Ayat</th>
         <th>Tempat Turun</th>
         <th>Urutan Pewahyuan</th>
         </tr>
<?php
//panggil konek
include "konek.php";
$tampil = mysqli_query($konek, "SELECT * FROM daftarsurah");
while ($data = mysqli_fetch_array($tampil)) :
  ?>
  <tr>
     <td><?= $data["index"] ?></td>
     <td>
        <a href="detail.php?surah=<?=$data['index']?>&nama_surah=<?=$data['surah_indonesia']?>">
     <?= $data["surah_indonesia"] ?></a><span class="arabic">(<?=$data["surah_arab"]?>)</span
     td>
     <td><?= $data["arti"] ?></td>
     <td><?= $data["jumlah_ayat"] ?></td>
     <td><?= $data["tempat_turun"] ?></td>
     <td><?= $data["urutan_pewahyuan"] ?></td>
   </tr>
  <?php endwhile; ?>
  </table>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
<!-- Footer -->
<footer class="page-footer font-small dark pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Alquran - Ayusini</h5>
        <p>Al-Qur'an Digital Online, Mengaji Semakin Mudah Dengan Adanya Quran Online</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2021 Copyright:
    <a href="https://www.ayusini.com/"> Ayusini.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    
  </body>
</html>