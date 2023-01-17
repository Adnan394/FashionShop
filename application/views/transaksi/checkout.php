<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <link href="<?=base_url();?>assets/img/main.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css" />
</head>

<body>
    <div class="container mb-5">
        <h1 class="text-center m-3">Checkout Pesanan Anda</h1>
        <div class="row d-flex flex-column align-items-center">
            <div class="col col-md-7">
                <div class="card mb-5">
                    <img src="<?=base_url();?>assets/dataimg/<?=$barang->gambar1?>" alt="" class="w-100">
                    <?php 
                            $ukuran = $barang->ukuran;
                            $uk = explode(",", $ukuran);
                        ?>
                    <?php 
                            $warna = $barang->warna;
                            $war = explode(",", $warna);
                        ?>
                    <div class="card-body">
                        <h4><?=$barang->judul?></h4>
                        <p class="color-primary">Harga : Rp <?=$barang->harga?></p>
                        <p style="overflow:auto;"><?=$barang->deskripsi?></p>
                        <label for="">Ukuran : </label>
                        <?php foreach($uk as $u): ?>
                        <span><?=$u?>, </span>
                        <?php endforeach; ?>
                        <br>
                        <label for="">Warna : </label>
                        <?php foreach($war as $w): ?>
                        <span><?=$w?>, </span>
                        <?php endforeach; ?>
                        <hr>
                        <strong>Atas Nama</strong>
                        <p><?=$user->name?></p>
                        <hr>
                        <strong>NO Handphone</strong>
                        <p><?=$user->nohp?></p>
                        <hr>
                        <strong>Alamat</strong>
                        <p><?=$user->alamat?></p>
                        <form action="<?=base_url();?>Transaksi/checkout_save" method="post"
                            enctype="multipart/form-data">
                            <input type="hidden" value="<?=$user->id?>" name="id_user">
                            <input type="hidden" value="<?=$user->name?>" name="name">
                            <input type="hidden" value="<?=$user->nohp?>" name="nohp">
                            <input type="hidden" value="<?=$user->alamat?>" name="alamat">
                            <input type="hidden" value="<?=$barang->id?>" name="id_barang">
                            <input type="hidden" value="<?=$barang->gambar1?>" name="gambar_barang">
                            <input type="hidden" value="<?=$barang->judul?>" name="judul">
                            <input type="hidden" value="<?=$barang->harga?>" name="harga">
                            <label for="#selectuk" class="col-sm-2 col-form-label">Ukuran</label>
                            <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example"
                                id="selectuk" name="ukuran" required>
                                <option selected>Pilih Ukuran</option>
                                <?php foreach($uk as $brg) : ?>
                                <option value="<?=$brg?>"><?=$brg?></option>
                                <?php endforeach; ?>
                            </select>
                            <label for="#selectwar" class="col-sm-2 col-form-label">Warna</label>
                            <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example"
                                id="selectwar" name="warna" required>
                                <option selected>Pilih Warna</option>
                                <?php foreach($war as $brg) : ?>
                                <option value="<?=$brg?>"><?=$brg?></option>
                                <?php endforeach; ?>
                            </select>
                            <label for="#selectkirim" class="col-sm-4 col-form-label">Jasa Pengiriman</label>
                            <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example"
                                id="selectkirim" name="kirim" required>
                                <option selected>Jasa Pengiriman</option>
                                <option value="JNE">JNE</option>
                                <option value="J&T">J&T</option>
                                <option value="SiCepat">SiCepat</option>
                            </select>
                            <label for="#selectbayar" class="col-sm-4 col-form-label">metode Pembayaran</label>
                            <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example"
                                id="selectbayar" name="bayar" required>
                                <option selected>Metode Pembayaran</option>
                                <option value="COD">COD</option>
                            </select>
                            <strong>Total Bayar</strong><br>
                            <small>Harga Barang : <?=$barang->harga?></small><br>
                            <button type="submit" class="btn main">Checkout</button>
                            <a href="<?=base_url();?>Home" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>