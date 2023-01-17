    <!-- hero  -->
    <!-- <div class="hero text-center d-flex flex-column justify-content-center m-nav" id="hero">
        <?=$this->session->flashdata('modalkeranjang')?>
        <div class="hero-content p-3">
            <h1 class="hero-title font-secondary color-primary fs-head">Gandl Fashion</h1>
            <p class="color-white">Penyedia Fashion Wanita terkini dengan Desain yang Fashionable</p>
            <a href="<?=base_url();?>Produk" class="btn btn-light"><i class="bi bi-arrow-down-circle me-3"></i>Lihat
                Semua
                Produk</a>
        </div>
    </div> -->
    <!-- end hero  -->


    <div id="hero" class="carousel slide m-nav" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <?php
            $data = $this->db->get('hero')->result();
            ?>
            <?php foreach($data as $d) : ?>
            <div class="carousel-item <?=($d->id==1)?'active':''?>">
                <img src="<?=base_url();?>assets/dataimg/<?=$d->image?>" class="d-block img-fluid" alt="...">
                <div class="carousel-caption">
                    <h5 class="font-secondary fs-head color-primary"><?=$d->judul?></h5>
                    <p><?=$d->deskripsi?></p>
                </div>
            </div>
            <?php endforeach;?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>







    <!-- produk unggulan  -->
    <div class="unggulan overflow-hidden p-primary mt-5" id="rekomendasi">
        <div class="row">
            <?php
            $this->db->where('unggulan', 1);
            $unggulan = $this->db->get('barang')->row();
            ?>
            <h1 class="hero-title font-secondary color-primary fs-head text-center mb-5">Produk Unggulan</h1>
            <div class="col-sm-12 col-md-4 d-flex justify-content-center">
                <img src="<?=base_url();?>assets/dataimg/<?=$unggulan->gambar1?>" width="300px" height="300px"
                    class="mb-3">
            </div>
            <div class=" col-sm-12 col-md-8">
                <div class="unggulan-content text-center">
                    <h3><?=$unggulan->judul?></h3>
                    <p class=""><?=$unggulan->deskripsi?></p>
                    <a href="<?=base_url();?>Produk/detail_produk/1" class="btn color-primary underline">Lihat
                        Produk</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end produk unggulan  -->



    <!-- bahan -->
    <div class="bahan bc-secondary p-primary mb-5" id="bahan">
        <h1 class="font-secondary color-primary fs-head text-center">Bahan Premium</h1>
        <h3 class="text-center color-white">"Crinkle"</h3>
    </div>
    <div class="bahan-content overflow-hidden">
        <div class="row p-primary d-flex justify-content-center">
            <div class="col-sm-12 col-md-3">
                <div class="card" style="width: 15rem;">
                    <div class="card-body">
                        <img src="<?=base_url();?>assets/img/crepcrinkle.png" class="w-100">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-8 ms-3">
                <h2>Crepe Crinkle</h2>
                <p>Jenis bahan crinkle crepe teksturnya paling kasar dari semua jenis bahan crinkle. Serat pada bahan
                    kain ini berbentuk seperti gelombang. Meskipun kasar, sifat bahan ini sangat lembut. Crinkle crepe
                    laris di Indonesia karena bahannya yang adem dan cocok digunakan di iklim tropis.</p>
            </div>
        </div>
        <hr>
        <div class="row p-primary d-flex justify-content-center">
            <div class="col-sm-12 col-md-8">
                <h2>Katun Crinkle</h2>
                <p>Adalah kain yang memiliki karakter permukaan dengan tekstur berkerut (wrinkle) nyaman dan lembut
                    serta tidak gerah saat dipakai, kain jatuh dan sedikit nerawang hingga bagus untuk di bentuk atau
                    dijadikan untuk hijab, pashmina, gaun, dress, blouse, pashmina, syal, dll.</p>
            </div>
            <div class="col-sm-12 col-md-3 ms-auto">
                <div class="card" style="width: 15rem;">
                    <div class="card-body">
                        <img src="<?=base_url();?>assets/img/katuncrinckle.jpg" class="w-100">
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row p-primary d-flex justify-content-center">
            <div class="col-sm-12 col-md-3">
                <div class="card" style="width: 15rem;">
                    <div class="card-body">
                        <img src="<?=base_url();?>assets/img/poplin.jpg" class="w-100">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-8 ms-3">
                <h2>Poplin Crinkle</h2>
                <p>Poplin merupakan istilah untuk jenis bahan kain yang memiliki anyaman sangat rapat dengan kontruksi
                    133x72. Artinya pada 1 inchi kain tersebut terdapat 133 helai benang lusi dan 72 helai benang pakan.
                    Kain katun poplin terbuat dari material 100% benang katun yang ditenun dengan model anyaman polos
                    atau plain</p>
            </div>
        </div>
    </div>
    <!-- end bahan -->

    <!-- about us  -->
    <div class="about bc-darken p-primary color-white p-3" id="about">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-10 text-left">
                <h1 class="font-secondary color-primary fs-head text-center mb-3">About</h1>
                <div class="row d-flex justify-content-center">
                    <div class="col col-10 col-md-6">
                        <img src="<?=base_url();?>assets/img/author.png" alt="" width="100px" class="border-radius me-3"
                            style="float:left;">
                        <p>Nama saya adnan ega maulana sebagai Owner dan developer website ini, untuk memenuhi tugas
                            akhir studi
                            independen di <a href="https://arkatama.id" target="_blank" class="text-white">PT Arkatama
                                Multi
                                Solusindo</a> membuat sebuah
                            website
                            toko online dengan
                            teknologi yang digunakan seperti : HTML, CSS, JS, Bootstrap, PHP, Codeigniter3, MySQL
                            database.</p>
                    </div>
                    <div class="col col-10 col-md-6 mb-3">
                        <p class="">GANDL FASHION adalah sebuah website yang menyediakan
                            layanan pembelian Fashion wanita dari
                            Perusahaan yang didirikan oleh Hendiko SB, di platform ini kami menyediakan berbagai baju
                            khususnya wanita dengan model yang kekinian, murah, dan yang pastinya berkualitas</p>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <!-- end about us  -->