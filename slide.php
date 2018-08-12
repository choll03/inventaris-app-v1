<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Membuat Slide Yang Sangat Mudah</title>
 
    <!-- CSS Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS kamu, Panggil CSS buatan mu sendiri di bawah sini seperti biasa -->
     
    <!-- JS untuk IE -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
   
   
   
  <!-- Content START -->
  <div id="slideshow-mudah" class="carousel slide" data-ride="carousel">
  <!-- Indicators, Ini adalah Tombol BULET BULET dibawah. item ini dapat dihapus jika tidak diperlukan -->
  <ol class="carousel-indicators">
    <li data-target="#slideshow-mudah" data-slide-to="0" class="active"></li>
    <li data-target="#slideshow-mudah" data-slide-to="1"></li>
    <li data-target="#slideshow-mudah" data-slide-to="2"></li>
  </ol>
 
  <!-- Wrapper for slides, Ini adalah Tempat Gambar-->
  <div class="carousel-inner">
    <div class="item active">
      <img src="1.jpg" alt="slideshow-mudah"> <!--Gambar -->
      <div class="carousel-caption"> <!--penjelasan-->
        <h3>Slide 1 (Judul)</h3>
        <p>Ini adalah Slide 1 (Penjelasan)</p>
      </div>
    </div>
    <div class="item">
      <img class="" src="1.jpg" alt="slideshow-mudah"> <!--Gambar -->
      <div class="carousel-caption">  <!--penjelasan-->
        <h3>Slide 2 (Judul)</h3>
        <p>Ini adalah Slide 2 (Penjelasan)</p>
      </div>
    </div>
    <div class="item">
      <img src="1.jpg" alt="slideshow-mudah"> <!--gambar-->
      <div class="carousel-caption"> <!--penjelasan-->
        <h3>Slide 3 (Judul)</h3>
        <p>Ini adalah Slide 3 (Penjelasan)</p>
      </div>
    </div>
     
    
  </div>
 
  <!-- Controls, Ini adalah Panah Kanan dan Kiri. item ini dapat dihapus jika tidak diperlukan-->
  <a class="left carousel-control" href="#slideshow-mudah" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#slideshow-mudah" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
  <!-- Content END -->
   
   
   
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>