<h1 class="hero-title font-secondary m-nav pt-5 text-center color-primary fs-head">Daftar Produk</h1>
<div class="d-flex justify-content-end px-5 m-3">
    <a href="" class="text-dark" data-bs-toggle="dropdown" style="text-decoration: none;"><i
            class="bi bi-funnel me-2"></i>Filter</a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="<?=base_url();?>Produk/kategori/blouse">blouse</a></li>
        <li><a class="dropdown-item" href="<?=base_url();?>Produk/kategori/midi">midi</a></li>
        <li><a class="dropdown-item" href="<?=base_url();?>Produk/kategori/kemeja">kemeja</a></li>
        <hr>
        <li class="px-3">
            <form action="<?=base_url();?>Produk/filter" method="post">
                <label for="" class="text-muted">Filter Harga</label>
                <input type="number" name="min" placeholder="Min harga" id="" class="form-control mb-2">
                <input type="number" name="max" placeholder="Max Harga" id="" class="form-control mb-2">
                <button type="submit" class="btn main">submit</button>
            </form>
        </li>
        <hr>
        <li><a href="<?=base_url();?>Produk" class="text-danger px-3" style="text-decoration: none;">Hapus Filter</a>
        </li>
    </ul>
</div>
<div class="kategori-content  mb-5 d-flex flex-wrap gap-3 justify-content-center">
    <?php foreach($barang as $brg):?>
    <input type="hidden" name="id" value="<?=$brg->id?>">
    <div class="card" style="width: 18rem;">
        <!-- <img src="<?=base_url();?>assets/img/unggulan1.jpeg" height="200px"> -->
        <div id="item1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">s
                <div class="carousel-item active">
                    <img src="<?=base_url();?>assets/dataimg/<?=$brg->gambar1?>" class="d-block w-100" height="200px">
                </div>
                <!-- <div class="carousel-item">
                    <img src="<?=base_url();?>assets/img/unggulan2.jpeg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="<?=base_url();?>assets/img/unggulan3.jpeg" class="d-block w-100">
                </div> -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#item1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#item1" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <p><?=$brg->judul?></p>
            <div class="row" style="height: 100px; overflow:auto;">
                <small class="text-muted"><?=$brg->deskripsi?></small>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <p class="color-primary"><?=$brg->harga?></p>
                </div>
                <div class="col d-flex justify-content-end">
                    <?php if($brg->status == 1) :?>
                    <p class="text-success">Ready</p>
                    <?php else : ?>
                    <p class="text-danger">Habis</p>
                    <?php endif;?>
                </div>
            </div>
            <div class="row d-flex flex-row ">
                <div class="col">
                    <a href="<?=base_url();?>Produk/detail_produk/<?=$brg->id?>"
                        class="btn outline-main w-100 <?=($brg->status==0)?'disabled':''?>">Detail</a>
                </div>
                <div class="col">
                    <a href="" class="btn main w-100 <?=($brg->status==0)?'disabled':''?>">Beli</a>
                </div>
            </div>

        </div>
    </div>
    <!-- <div class="card" style="width: 18rem;">
        <div id="item2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?=base_url();?>assets/img/midi1.jpeg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="<?=base_url();?>assets/img/midi2.jpeg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="<?=base_url();?>assets/img/midi3.jpeg" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#item2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#item2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="card-body">
            <p>Baju wanita model Midi Dress terbaik murah berbagai varian warna</p>
            <div class="row">
                <div class="col">
                    <p class="color-primary">Rp 150.000</p>
                </div>
                <div class="col d-flex justify-content-end">
                    <p>100 Terjual</p>
                </div>
            </div>

            <div class="row d-flex flex-row ">
                <div class="col">
                    <a href="" class="btn outline-main w-100">Keranjang</a>
                </div>
                <div class="col">
                    <a href="" class="btn main w-100">Beli</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <div id="item3" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?=base_url();?>assets/img/kemeja2.jpeg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="<?=base_url();?>assets/img/kemeja.jpeg" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#item3" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#item3" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="card-body">
            <p>Baju wanita terbaru Setelan Kemeja murah model hits kekinian</p>
            <div class="row">
                <div class="col">
                    <p class="color-primary">Rp 150.000</p>
                </div>
                <div class="col d-flex justify-content-end">
                    <p>100 Terjual</p>
                </div>
            </div>

            <div class="row d-flex flex-row ">
                <div class="col">
                    <a href="" class="btn outline-main w-100">Keranjang</a>
                </div>
                <div class="col">
                    <a href="" class="btn main w-100">Beli</a>
                </div>
            </div>
        </div>
    </div> -->
    <?php endforeach; ?>
</div>