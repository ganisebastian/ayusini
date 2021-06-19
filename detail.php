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
    .latin {
      font-family: serif;
      font-size: 15px;
      font-weight: normal;
      direction: ltl;
      padding: 0;
      margin: 0;
    }
    .arabic_number {
      font-size: 32px;
      font-weight: normal;
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
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>
  </head>
  <body>
 <br>
 <br>
 <div class="container">
     <?php
     //panggil konek
     include "konek.php";

     //uji jika parameter surah dan nama surah tidak kosong
     if (isset($_GET['surah']) || isset ($_GET['nama_surah'])) {
         $surah = $_GET['surah'];
         $nama_surah = $_GET['nama_surah'];

         echo '<a href="index.php">Kembali ke index</a>';
         echo '<h3 class="text-center">'.$nama_surah.'</h3>';
         echo '<hr>';

         $tampil = mysqli_query($konek, "SELECT
                                          a. text as arabic,
                                          b. text as indonesia
                                          FROM
                                          arabicquran a LEFT OUTER JOIN indonesianquran b
                                          ON a.index=b.index
                                          WHERE a.surah = $surah
                                        ");
                
        $ayat = 1;
        while($data = mysqli_fetch_array($tampil)) {
        $str = $data['arabic'];
        echo '<p class="arabic">' . $str .format_arabic_number($ayat) . '</p>';
        echo '<p class="latin">' . '[' . $ayat . ']' . $data['indonesia'] . '</p>';
        echo '<hr>';
        $ayat++;
       }
       }     

        //fungsi penomoran ayat arab
       function format_arabic_number($number)
       {
                $arabic_number = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
                $jum_karakter = strlen($number);
                $temp = "";

                for ($i = 0; $i < $jum_karakter; $i++){
                    $char = substr($number, $i, 1);
                    $temp .= $arabic_number[$char];
                }
                return '<span class "arabic_number">' . $temp . '</span';

       }

    

     ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>