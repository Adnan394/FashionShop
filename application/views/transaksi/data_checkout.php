<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <link href="<?=base_url();?>assets/img/main.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css" />
</head>

<body>
    <div class="container">
        <div class="row d-flex flex-column align-items-center">
            <div class="col-sm-12 col-md-9 col-lg-7">
                <a href="<?=base_url();?>Home" class="btn btn-secondary mt-5">Kembali</a>
                <h1 class="text-center mt-4">Pesanan Saya</h1>
            </div>
        </div>
        <div class="row d-flex flex-column align-items-center">
            <div class="col-sm-12 col-md-9 col-lg-7">

                <?php foreach($barang as $d) :?>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col col-3 me-3">
                                <img src="<?=base_url();?>assets/dataimg/<?=$d->gambar_barang?>" alt="" width="100px">
                            </div>
                            <div class="col">
                                <p><?=$d->judul?></p>
                                <span>Varian Pilihan : <?=$d->warna . ', ' . $d->ukuran?></span>
                                <?php
                                    $status = $d->status_pengiriman;
                                    $this->db->where('id', $status);
                                    $stts = $this->db->get('status_pengiriman')->row();
                                ?>
                                <p>Status : <span class="color-primary"><?=$stts->status?></span></p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col ms-auto">
                                <a href="<?=base_url();?>Transaksi/checkout_delete/<?=$d->id?>"
                                    class="btn btn-danger">Cancel</a>
                                <a href="<?=base_url();?>Transaksi/checkout/<?=$d->id_barang?>"
                                    class="btn main">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</body>

</html>