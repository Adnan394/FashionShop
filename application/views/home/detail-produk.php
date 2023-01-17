<div class="container d-flex flex-column align-items-center">
    <h1 class="hero-title font-secondary m-nav pt-5 text-center color-primary fs-head">Detail Produk</h1>
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12 col-md-6">
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
                    <p><?=$barang->deskripsi?></p>
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
                    <form action="<?=base_url();?>Transaksi/keranjang" method="post" enctype="multipart/form-data">
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
                        <label for="#selectwar" class="col-sm-2 col-form-label">Ukuran</label>
                        <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example"
                            id="selectwar" name="warna" required>
                            <option selected>Pilih Warna</option>
                            <?php foreach($war as $brg) : ?>
                            <option value="<?=$brg?>"><?=$brg?></option>
                            <?php endforeach; ?>
                        </select>
                        <button type="submit" class="btn main">Masukan Keranjang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>