
<div class="container pt-5 px-5">
  <?= $this->session->flashdata('message'); ?>
  <div class="row">
      <div class="col-sm-8">
        <!-- Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php echo base_url('public/gambar/carousel-img-600x300(1).png') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo base_url('public/gambar/carousel-img-600x300(3).png') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo base_url('public/gambar/carousel-img-600x300(4).png') ?>" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon rounded-carousel rounded-circle" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon rounded-carousel rounded-circle" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <!-- Image Promosi -->
      <div class="col-sm d-flex flex-column">
        <img class="mb-3" src="<?php echo base_url('public/gambar/carousel-img-sub-300x150(1).png') ?>" href="#" alt="">
        <img src="<?php echo base_url('public/gambar/carousel-img-sub-300x150(2).png') ?>" href="#" alt="">
      </div>
  </div>

  <div class="row">
    <h4 class="pb-3 pt-5">Buku-Buku Pilihan Hari Ini</h4>
    
    <?php foreach ($buku as $data) : ?>
      <div class="col-sm">

        <a href="<?php echo base_url('index.php/home/detail/').$data['id'];?>" class="link-detail">
          <div class="card h-100">
            <img src="<?php echo base_url('public/gambar/').$data['gambar'];?>" class="card-img-top" alt="...">
            <div class="judul card-body">
              <p class="card-text"><?= $data['nama']; ?></p>
            </div>
            <div class="card-footer">
              <p class="text-muted">Rp. <?= $data['harga']; ?></p>
            </div>
          </div>  
        </a>
      
      </div>
    <?php endforeach; ?>
  </div>
</div>