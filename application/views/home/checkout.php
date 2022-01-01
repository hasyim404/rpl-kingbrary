
<div class="container pt-5">
    <h1>Ayo Checkout!</h1>
    <div class="row mt-5">
        <div class="col-sm-8 pb-4">
            <div class="kotak">
                <div class="d-flex justify-content-start">
                    <i class="fas fa-map-marker-alt" style="font-size: 3vw;"></i> <h4 style="padding: 10px 5px;"> Alamat Tujuan Pengiriman</h4>
                </div>
                <br>

                <div style="padding: 5px 30px">
                    <h5>Belum ada alamat yang terdaftar</h5>
                </div>
                    
                <div class="d-flex justify-content-end">
                    <button class="btn-sm btnBeliSekarang bg-white text-black" style="border-style: solid; border-color: green;">+ Buat Alamat Pengiriman Yuk</button>
                </div>
            </div>
        </div>

        <div class="col-sm">
            <div class="kotak">
                <h4 class="d-flex justify-content-start">Metode Pembayaran</h4>
                <hr>
                <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        Pilih Metode Pembayaran
                    </button>
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item" href="#">Pembayaran 1</a></li>
                        <li><a class="dropdown-item" href="#">Pembayaran 2</a></li>
                        <li><a class="dropdown-item" href="#">Pembayaran 3</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8">
            <div class="kotak">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="<?php echo base_url('public/gambar/').$buku->gambar; ?>" class="img-fluid rounded mx-auto d-block" alt="...">
                    </div>

                    <div class="col-sm">
                        <h4><?= $buku->nama; ?></h4>
                        <br>
                        <p>Soft Cover 1 barang</p>
                        <br>
                        <h4>Rp. <?= $buku->harga; ?></h4>

                        <!-- Tambah/kurang -->
                        <div class="d-flex justify-content-start">
                            <button class="mines"><i class="fas fa-minus"></i></button> 
                            <p class="px-3 value">    1   </p> 
                            <button class="plus"><i class="fas fa-plus"></i></button>
                        </div>
                        <div class="d-flex justify-content-end">
                            <h4>Rp. <?= $buku->harga; ?></h4>
                        </div>
                        <div class="d-flex justify-content-end hapus">
                            <a href="#!"><i class="fas fa-trash-alt"></i> Hapus</a>
                        </div>                        
                    </div>
                </div>
            </div>
            <!-- Footer isi keranjang -->
            <div class="row">
                <div class="col-sm">
                    <div class="navbar navbar-light bg-success">
                        <div class="container-fluid">
                            <span class="navbar-brand mb-0 h1 text-white">Total Pesanan = 1</span>
                            <span class="navbar-brand mb-0 h1 text-white">Rp. <?= $buku->harga; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <!-- Rincian Belanja -->
            <div class="kotak">
                <h3 class="d-flex justify-content-start">Rincian Belanja</h3>
                <hr>
                <h4 class="d-flex justify-content-start pb-2">Total Biaya Belanja</h4>

                <div class="checkoutFont pt-2 pb-3 d-flex justify-content-between">
                    <h5>Total Belanja</h5>   
                    <h5>Rp. <?= $buku->harga; ?></h5>
                </div>
                <div class="checkoutFont pt-2 pb-3 d-flex justify-content-between">
                    <h5>Biaya Pengiriman</h5>   
                    <h5>-</h5>
                </div>
                <div class="checkoutFont pt-2 pb-3 d-flex justify-content-between">
                    <h5>Biaya Asuransi</h5>   
                    <h5>-</h5>
                </div>
                <div class="checkoutFont pt-2 pb-3 d-flex justify-content-between">
                    <h5>Diskon Belanja</h5>   
                    <h5>-</h5>
                </div>
                <hr>
                <div class="checkoutFont pt-2 pb-3 d-flex justify-content-between">
                    <h4>Total : </h4>   
                    <h4>Rp. <?= $buku->harga; ?></h4>
                </div>
                <div class="checkoutFont d-flex justify-content-center">
                    <button class="btn-sm btnBeliSekarang">Lanjut Ke Pembayaran Yuk</button>
                </div>

            </div>
        </div>
    </div>
</div>
