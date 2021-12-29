
    <div class="container pt-5" >
        <div class="row">
            <div class="col-3">
                <img src="<?php echo base_url('public/gambar/rpl-php-example-image.jpeg') ?>" class="img-fluid rounded mx-auto d-block" alt="...">
            </div>
            <div class="col-6">
                <p>PROF. DR. IR. RIRI FITRI SARI, M.M., M.SC., DTM, SMIEEE</p>
                <h2>Rekayasa Perangkat Lunak Berorientasi Objek Menggunakan Php</h2>

                <div class="navbar navbar-expand-lg navbar-light border-bottom border-dark">
                    <ul class="navbar-nav detail-nav">
                        <li class="nav-item">
                            <h5><a class="nav-link active" aria-current="page" href="#deskripsi">Deskripsi Buku</a></h5>
                        </li>
                        <li class="nav-item">
                            <h5><a class="nav-link " href="#detail">Detail Buku</a></h5>
                        </li>
                    </ul>
                </div>

                <div class="mt-4">
                    <h6 id="deskripsi">Deskripsi Buku</h6>   
                    <p class="text">Buku Rekayasa Perangkat Lunak Berbasis Objek berbasis bahasa PHP ini dibuat untuk digunakan pada <span class="dots">...</span>
                        <span class="moreText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, provident Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, provident. </span>
                    </p>
                    <a class="read-more-btn d-flex justify-content-end" href="#!" >Baca Selengkapnya</a>

                    <h6 id="detail" class="mt-2">Detail Buku</h6>
                    <div class="tableDetail">
                        <table class="head">
                            <!-- 1 -->
                            <tr>
                                <td class="one">Jumlah Halaman</td>
                                <td >Penerbit</td>
                            </tr>
                            <tr>
                                <td class="two">304</td>
                                <td class="two">Andi Offest</td>
                            </tr>

                            <!-- 2 -->
                            <tr>
                                <td>Tanggal Terbit</td>
                                <td>Berat</td>
                            </tr>
                            <tr>
                                <td class="two">30 Nov 2021</td>
                                <td class="two">0.405 kg</td>
                            </tr>

                            <!-- 3 -->
                            <tr>
                                <td>ISBN</td>
                                <td >Lebar</td>
                            </tr>
                            <tr>
                                <td class="two">9786230117886</td>
                                <td class="two">16.0 cm</td>
                            </tr>

                            <!-- 4 -->
                            <tr>
                                <td>Bahasa</td>
                                <td>Panjang</td>
                            </tr>
                            <tr>
                                <td class="two">Indonesia</td>
                                <td class="two">23.0cm</td>
                            </tr>
                            
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="col-3">
                <div class="kotak">
                    <h5 class="text-secondary">Ingin beli berapa?</h5>
                    <h5>Jumlah Barang</h5>
                    <div class="border-bottom border-dark pb-2 d-flex justify-content-start">
                        <button class="mines"><i class="fas fa-minus"></i></button> 
                        <p class="px-3 value">    1   </p> 
                        <button class="plus"><i class="fas fa-plus"></i></button>
                    </div>
                    <div class="pt-2 pb-3 d-flex justify-content-between">
                        <h5>Subtotal: </h5>   
                        <h5>RP. 89.000</h5>
                    </div>
                    <div class="btnEnd d-flex justify-content-between">
                        <button class="btn-sm btnKeranjang"><i class="fas fa-shopping-cart"></i> keranjang</button>
                        <button class="btn-sm btnBeliSekarang">Beli Sekarang</button>
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- Diskusi -->
        <div class="row">
            <div class="col-9">
                <div class="diskusi">
                    <h5>Diskusi</h5>
                    <h5 class="namaBukuDiskusi mb-4">Rekayasa Perangkat Lunak Berorientasi Objek Menggunakan Php</h5>
                    <div class="kotakDiskusi d-flex bd-highlight mb-3">
                        <img class="discuss-logo p-2 bd-highlight" src="<?php echo base_url('public/gambar/discuss-logo.png') ?>" alt="">
                        <p class="p-2 bd-highlight" >Ada pertanyaan terkait buku ini? Diskusikan dengan admin di sini</p>
                        <button class="btn-sm ms-auto p-2 bd-highlight" >Tulis Pertanyaan</button>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-9">
                <div class="diskusiBox d-flex justify-content-start ">
                    <div class="row ">
                        <div class="col-1">
                            <img class="komentar-profile rounded-circle" width="50" height="50" src="https://dummyimage.com/50x50/ed62ed/ffffff" alt="">
                        </div>
                        <div class="col">
                            <p class="p1" >User Account <span>- [ tanggal ]</span></p><br>
                            <p class="p2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, eius?</p>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-9">
                <div class="diskusiBox reply">
                    <div class="row ">
                        <div class="col-2 d-flex justify-content-end">
                            <img class="komentar-profile rounded-circle" width="50" height="50" src="https://dummyimage.com/50x50/2e252e/ffffff" alt="">
                        </div>
                        <div class="col">
                            <p class="p1" >Admin Account <span>- [ tanggal ]</span></p><br>
                            <p class="p2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, eius?</p>   
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

