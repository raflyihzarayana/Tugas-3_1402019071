<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>3D Calculator | (1402019071)</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>

<!-- loader -->
<div class="bg-loader">
  <div class="loader"></div>  
</div>

  <!-- header -->
  <div class="medsos">
    <div class="container">
      <ul>
        <li><a href="https://www.instagram.com/raflyihzarayana/"><i class="fab fa-instagram-square"></i></a></li>
        <li><a href="https://www.youtube.com/channel/UCE3SlxL_Myl7F7sb6MxIE5g"><i class="fab fa-youtube"></i></a></li>
        <li><a href="#"><i class="fab fa-line"></i></a></li>
      </ul>  
    </div>
  </div>
  <header>
    <div class="container">  
      <h1><a href="index.html">Muhammad Rafly Ihza Rayana</a></h1>
      <ul>
          <li><a href="tabung.html">TABUNG</a></li>
          <li><a href="kerucut.html">KERUCUT</a></li>
          <li><a href="bola.html">BOLA</a></li>
      </ul>
  </div>
  </header>

  <!-- banner -->
  <section class="banner">
    <h2>3D CALCULATOR</h2> 
  </section>

    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <link href="css/bootstrap.css" rel="stylesheet" />

    <meta name="viewport" content="width=device-width" />

    <link href="css/design.css" rel="stylesheet"/>

    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />

    <!--     untuk font dan icon     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>

    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
</head>

<!-- home -->


<script>
  var Name;
  var Hi;
  var hariSekarang = new Date();
  var jam = hariSekarang.getHours();

 Name = window.prompt("Masukin Nama Kamu:");
  if(jam < 12)
  Hi = "Selamat Pagi ";

  if(jam >= 12){
  jam = jam - 12;

  if(jam < 6)
  Hi = "Selamat Siang ";

  if(jam >= 6)
  Hi = "Selamat Malam ";
}

document.writeln("<h3>Hai, "+ Hi+""+Name+"</h2>");
</script>
<section class="pilihan">
    <h5>Menghitung Volume dan Luas Permukaan dari Silinder, Kerucut dan Bola.</h5> 
  </section>                             
<br>

  <section class="gambar"></section>

    <!-- Script -->
    <script>
        function permukaanSilinder() 
        {       
            var r = document.getElementById('jariSilinder').value;
            var t = document.getElementById('tinggiSilinder').value;

            var hasil = 2*Math.PI*r*r+2*Math.PI*r*t;
            document.getElementById('hasilPermukaan_Silinder').innerHTML = hasil.toFixed(2);
        }

        function volumeSilinder() 
        {       
            var r = document.getElementById('jariSilinder').value;
            var t = document.getElementById('tinggiSilinder').value;

            var hasil = Math.PI*(r*r)*t;
            document.getElementById('hasilVolume_Silinder').innerHTML = hasil.toFixed(2);
        }

        function permukaanKerucut() 
        {
            var r = document.getElementById('jariKerucut').value;
            var pelukis = document.getElementById('pelukisKerucut').value;
            var t = document.getElementById('tinggiKerucut').value;

            var hasil = Math.PI*r*r+Math.PI*r*pelukis;
            document.getElementById('hasilPermukaan_Kerucut').innerHTML = hasil.toFixed(2);
        }

        function volumeKerucut() 
        {
            var r = document.getElementById('jariKerucut').value;           
            var t = document.getElementById('tinggiKerucut').value;

            var hasil = (1/3)*Math.PI*(r*r)*t;
            document.getElementById('hasilVolume_Kerucut').innerHTML = hasil.toFixed(2);
        }

        function permukaanBola() 
        {
            var r = document.getElementById('jariBola').value;

            var hasil = 4*Math.PI*r*r;
            document.getElementById('hasilPermukaan_Bola').innerHTML = hasil.toFixed(2);
        }

        function volumeBola() 
        {
            var r = document.getElementById('jariBola').value;

            var hasil = 4/3*Math.PI*r*r*r;
            document.getElementById('hasilVolume_Bola').innerHTML = hasil.toFixed(2);
        }
    </script>

    <!--Script agar perhalus saat Scrool-->
    <script>
      var scroll = new SmoothScroll('a[href*="#"]',{
      speed: 1000,
      speedAsDuration: true
    });
    </script>

    <script src="js/app.js"></script>

    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>

    <script src="js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

    <script src="js/bootstrap.js" type="text/javascript"></script>

    <script src="js/awesome-landing-page.js" type="text/javascript"></script>


<!-- footer -->
<footer>
  <div class="container">
    <small>Copyright &copy; 2021 - Muhammad Rafly Ihza Rayana. All Right Reserved.</small>
    </div>
</footer>

<script type="text/javascript">
  $(document).ready(function(){  
  $(".bg-loader").hide();
})
</script>

</body>
</html>
