<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WalkingLibrary</title>
    <link rel="shortcut icon" type="image" href="<?php echo base_url('public/gambar/logo.png') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/style.css');?>">
</head>
<body>
    <nav>
        <div class="nav-brand">
            <img src="<?php echo base_url('public/gambar/brand.svg') ?>" alt=""/>
        </div>
        <div class="nav-home">
            <a href="index.html" style="text-decoration: none;" class="link-home">Home</a>
        </div>
        <div class="nav-kategori">
            <select class="kategori" aria-label="Kategori">
                <option selected>Kategori</option>
                <option value="an">Anak-Anak</option>
                <option value="rm">Remaja</option>
                <option value="dw">Dewasa</option>
                <option value="ls">Lansia</option>
            </select>
        </div>
        <div class="nav-search">
            <input type="search" id="bsearch" placeholder="Cari Produk, Judul Buku, Penulis" name="bsearch" class="search">
            <i class="fa fa-search fa-lg fa-fw" aria-hidden="true"></i>
        </div>
        <div class="nav-login">
            <a href="#" style="text-decoration: none;" class="link-login">Login</a>
        </div>
        <div class="nav-keranjang">
            <a href="#" class="keranjang"><img src="<?php echo base_url('public/gambar/keranjang.svg')?>" alt=""></a>
        </div>
    </nav>
    <div class="head">
      <div class="promo1">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php echo base_url('public/gambar/promo1.svg')?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo base_url('public/gambar/promo1.svg')?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo base_url('public/gambar/promo1.svg')?>" class="d-block w-100" alt="...">
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
      </div>
      <div class="promo2">
        <img src="<?php echo base_url('public/gambar/promo2.svg')?>" href="#" alt="">
        <img src="<?php echo base_url('public/gambar/promo3.svg')?>" href="#" alt="">
      </div>
    </div>
    <div class="recomend">
      <p>Buku-Buku Pilihan Hari Ini</p>
    </div>
    <div class="card1">
      <div class="card" style="width: 18rem;">
        <img src="<?php echo base_url('public/gambar/card1.svg')?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Pemrograman Vb.Net Untuk Pemula</h5>
          <p class="card-harga">Rp 89.000</p>
          <a href="#" class="btn btn-primary">Detail</a>
        </div>
      </div>
    </div>
    <footer>
      <p class="copyright">Copyright © 2021, WalkingLibrary</p>
      <div class="nakel">
      <!--
      <p>1. 0110220101 - Ahmad Luthfi Taqiyuddin</p>
      <p>2. 0110220078 - Ahmad Noval Fahmi</p>
      <p>3. 0110220087 - Chika Aulia Zahwa</p>
      <p>4. 0110220123 - Gunawan</p>
      <p>5. 0110220170 - Muhammad Ismail</p>
      <p>6. 0110220180 - Saffanah Jannati Azizah</p>
      </div>
      -->
    </footer>
</body>
</html>