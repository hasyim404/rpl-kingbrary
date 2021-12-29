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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/mystyle.css');?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>
    <nav>
        <div class="nav-brand">
            <img src="<?php echo base_url('public/gambar/brand.svg') ?>" alt=""/>
        </div>
        <div class="nav-home">
            <a href="<?php echo base_url('index.php') ?>" style="text-decoration: none;" class="link-home">Home</a>
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
            <i class="fa fa-search fa-lg fa-fw" style="margin-top: -7px; margin-right: -10px;" aria-hidden="true"></i>
        </div>
        <div class="nav-login">
            <a href="#" style="text-decoration: none;" class="link-login">Login</a>
        </div>
        <div class="nav-keranjang">
            <a href="#" class="keranjang"><img src="<?php echo base_url('public/gambar/keranjang.svg')?>" alt=""></a>
        </div>
    </nav>