<?php include("component/header.php"); ?>
<?php include("component/navbar.php"); ?>



<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/integritas.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/foto1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/foto2.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/foto3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/foto4.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/foto5.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="main-wrapper">
  <div class="top-wrapper">
    <div class="container">
      <p> <i class="fa fa-quote-left"></i> Balai Pengelola Alih Teknologi Pertanian (BPATP) mempunyai tugas melaksanakan
        pengelolaan kekayaan
        intelektual
        dan merupakan jembatan alih teknologi antara Badan Litbang Pertanian dengan stake holder. <i class="fa fa-quote-right"></i></p>
    </div>
  </div>

  <div class="vid">
    <div class="container">
      <p>Video Profil Balai Pengelola Alih Teknologi Pertanian</p>

      <video width="900" height="500" controls>
        <source src='media/contoh.mp4' type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
        <source src='media/contoh..ogv' type='video/ogg; codecs="theora, vorbis"'>
        <source src="media/contoh.webm" type='video/webm; codecs="vp8, vorbis"'>

        Browser Anda tidak mendukung HTML video tag.
      </video>


    </div>
  </div>
</div>



<?php include("component/footer.php"); ?>