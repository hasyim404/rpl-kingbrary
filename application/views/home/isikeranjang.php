
<!-- keranjang Belanja -->
<div class="container pt-5">
    <h1>Keranjang Belanja</h1>
    <div class="row mt-5">
        <div class="col-sm-8 mb-4">
            <div class="kotak mb-3">
                <div class="container-fluid">
                    <h5 class="d-flex justify-content-end">Hapus Beberapa</h5>
                </div>
            </div>
            

            <div class="kotak">
                <div class="row">
                    <div class="col-sm">
                        <img src="<?= base_url('public/gambar/empty-cart.png') ?>" alt="" class="img-fluid rounded mx-auto d-block">
                    </div>

                    <!-- <div class="col-sm-4">
                        <img src="<?php echo base_url('public/gambar/rpl-php-example-image.jpeg') ?>" class="img-fluid rounded mx-auto d-block" alt="...">
                    </div>
                    <div class="col-sm">
                        <h4>Rekayasa perangkat lunak Berorientasi Objek Menggunakan PHP</h4>
                        <br>
                        <p>Soft Cover 1 barang</p>
                        <br>
                        <h4>RP. 89.000</h4>

                         Tambah/kurang -->
                        <!-- <div class="d-flex justify-content-center">
                            <button class="mines"><i class="fas fa-minus"></i></button> 
                            <p class="px-3 value">    1   </p> 
                            <button class="plus"><i class="fas fa-plus"></i></button>
                        </div>
                        <div class="d-flex justify-content-end">
                            <h4>RP. 89.000</h4>
                        </div>
                        <div class="d-flex justify-content-end hapus">
                            <a href="#!"><i class="fas fa-trash-alt"></i> Hapus</a>
                        </div>    
                    </div> --> 
                </div>
            </div>

                <!-- Footer isi keranjang -->
                <div class="row mt-3">
                    <div class="col-sm">
                        <nav class="navbar navbar-light bg-success">
                            <div class="container-fluid">
                                <span class="navbar-brand mb-0 h1 text-white">Total Pesanan = </span>
                                <span class="navbar-brand mb-0 h1 text-white">-</span>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>


        <!-- Rincian Belanja -->
        <div class="col-sm-4">
            <div class="kotak">
                <h5 class="text-secondary d-flex justify-content-center">Rincian Belanja</h5>
                <div class="pt-2 pb-3 d-flex justify-content-between">
                    <h5>Total Keranjang:</h5>   
                    <h5>-</h5>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="my-3 btn-sm btnBeliSekarang">Lanjut ke Pembayaran Yuk</button>
                </div>
                
            </div>
        </div>
    </div>
</div>
