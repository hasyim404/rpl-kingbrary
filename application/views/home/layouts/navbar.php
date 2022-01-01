<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WalkingLibrary | <?= $title; ?></title>
    <link rel="shortcut icon" type="image" href="<?php echo base_url('public/gambar/logo.png') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/style.css');?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar Info -->
    <nav class="nav-info d-flex justify-content-end">
        <a href="#about">About</a>
        <a href="<?= base_url('index.php/home/faq') ?>">FaQ</a>
    </nav>

    <!-- Main Navbar -->
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
                            <li><a class="dropdown-item" href="#!">Pemrograman</a></li>
                            <li><a class="dropdown-item" href="#!">Remaja</a></li>
                            <li><a class="dropdown-item" href="#!">Kesehatan</a></li>
                            <li><a class="dropdown-item" href="#!">Umum</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Search -->
                <?php echo form_open('home/search') ?>
                    <div class="d-flex search input-group ">
                        <input name="keyword" class="form-control" type="search" placeholder="Cari Judul Buku, Penulis" aria-label="Search">
                        <span class="input-group-text"><button type="submit"><i class="fas fa-search"></i></button></span>
                    </div>
                <?php echo form_close() ?>

                <!-- Profile -->
                <?php
                    if($this->session->has_userdata('email')){
                        $email = $this->session->email;
                    }else{
                        $email = 'Guest';
                    }
                ?>
                <div class="d-flex identity-profile ml-2">
                    <div class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle link-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle fa-2x"></i> 
                            <span>
                                 <?=$email?>
                            </span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php 
                                if ($this->session->has_userdata('email')) { ?>
                                <?php 
                                } else { ?>
                                    <li><a class="dropdown-item py-2" href="<?= base_url('index.php/auth/registration') ?>">Register</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="login-btn dropdown-item py-2" href="<?= base_url('index.php/auth/login') ?> ">Login</a></li>
                            <?php
                                }
                            ?>

                            <?php
                                if ($this->session->has_userdata('email')) { ?> 
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="logout-btn dropdown-item py-2" href="<?= base_url('index.php/auth/logout') ?>"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                            <?php
                                } 
                            ?>
                            
                            
                        </ul>
                    </div>
                </div>

                <!-- Cart -->
                <a href="<?= base_url('index.php/home/keranjang') ?>" class=""><img src="<?php echo base_url('public/gambar/keranjang.svg')?>" alt=""></a>    
            </div>
        </div>
    </nav>

