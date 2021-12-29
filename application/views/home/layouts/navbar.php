<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walking Library</title>
    <link rel="shortcut icon" type="image" href="<?php echo base_url('public/gambar/logo.png') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/mystyle.css');?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>
    <nav class="nav-info d-flex justify-content-end">
        <a href="#about">About</a>
        <a href="#!">FaQ</a>
    </nav>
    <nav class="navbar sticky-top navbarOri navbar-expand-lg navbar-dark">
        <div class="container-fluid mx-2">
            <a class="navbar-brand" href="<?php echo base_url('index.php') ?>">
                <img src="<?php echo base_url('public/gambar/brand.svg') ?>" alt="" >
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('index.php') ?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Anak-Anak</a></li>
                            <li><a class="dropdown-item" href="#">Remaja</a></li>
                            <li><a class="dropdown-item" href="#">Dewasa</a></li>
                            <li><a class="dropdown-item" href="#">Lansia</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Search -->
                <form class="d-flex search input-group ">
                    <input class="form-control search" type="search" placeholder="Cari Produk, Judul Buku, Penulis" aria-label="Search">
                    <span class="input-group-text"><button href="#!"><i class="fas fa-search"></i></button></span>
                </form>

                <!-- Profile -->
                <div class="d-flex identity-profile ml-2">
                    <div class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle link-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle fa-2x"></i> 
                            <span>Username</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <!-- if else account -->
                            <li><a class="dropdown-item py-2" href="#">Register</a></li>
                            <li><a class="dropdown-item py-2" href="#">Login</a></li>
                            <li><a class="logout-btn dropdown-item py-2" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Cart -->
                <a href="#" class=""><img src="<?php echo base_url('public/gambar/keranjang.svg')?>" alt=""></a>    
            </div>
        </div>
    </nav>

