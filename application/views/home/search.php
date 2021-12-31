<div class="container">
    <div class="row">
        <div class="col-sm">
            <?php if(!empty($keyword)){ ?>
                <h4 class="pb-3 pt-5">Hasil pencarian: <?= $keyword; ?></h4>    
            <?php }else{ ?>
                <h4 class="pb-3 pt-5">Hasil pencarian: </h4>  
            <?php } ?>
        </div>

        <?php if(empty($keyword)){ ?>
            <?php redirect(base_url() ) ?>
        <?php }elseif(!empty($data) ) { ?>
            <?php foreach ($data as $buku) : ?>
                
                <div class="col-sm pt-5">

                    <a href="<?php echo base_url('index.php/home/detail/').$buku['id'];?>" class="link-detail">
                        <div class="card h-100">
                            <img src="<?php echo base_url('public/gambar/').$buku['gambar'];?>" class="card-img-top" alt="...">
                            <div class="judul card-body">
                                <p class="card-text"><?= $buku['nama']; ?></p>
                            </div>
                            <div class="card-footer">
                                <p class="text-muted">Rp. <?= $buku['harga']; ?></p>
                            </div>
                        </div>  
                    </a>
                </div>        

            <?php endforeach; ?>
        <?php }else { ?>
            <div class="col-sm pt-5">
                <img class="" src="<?php echo base_url('public/gambar/data-not-found.png') ?>" alt="">
            </div>
        <?php } ?>
        

    </div>
</div>


