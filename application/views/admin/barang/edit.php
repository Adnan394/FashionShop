<div class="card">
    <div class="card-body">
        <h5 class="card-title">Edit Data Barang</h5>
        <!-- status barang  -->
        <?php if($barang->status == 1) :?>
        <a href="<?=base_url();?>Barang/barang_ready/<?=$barang->id?>" class="btn btn-primary mb-3">Ready</a>
        <?php else:?>
        <a href="<?=base_url();?>Barang/barang_habis/<?=$barang->id?>" class="btn btn-danger mb-3">Habis</a>
        <?php endif;?>

        <!-- produk unggulan  -->
        <?php if($barang->unggulan == 0) :?>
        <a href="<?=base_url();?>Barang/unggulan/<?=$barang->id?>" class="btn btn-primary mb-3">Jadikan Produk
            Unggulan</a>
        <?php else:?>
        <a href="<?=base_url();?>Barang/no_unggulan/<?=$barang->id?>" class="btn btn-danger mb-3">Hapus Produk
            Unggulan</a>
        <?php endif;?>


        <!-- Horizontal Form -->
        <?= form_open_multipart(base_url('Barang/edit_save')) ?>
        <input type="hidden" name="id" value="<?=$barang->id?>">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText" name="judul" value="<?=$barang->judul?>"
                    required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputext3" class="col-sm-2 col-form-label">Gambar 1</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="inputkota" name="gambar1" value="<?=$barang->gambar1?>"
                    required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="inputDate" name="harga" value="<?=$barang->harga?>"
                    required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <input type="textarea" class="form-control" id="inputDate" name="deskripsi"
                    value="<?=$barang->deskripsi?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputuk" class="col-sm-2 col-form-label">Ukuran</label>
            <div class="col-sm-10">
                <?php foreach($ukuran as $uk): ?>
                <input type="checkbox" class="form-check-input" id="inputuk" name="uk_list[]"
                    value="<?= $uk->ukuran ?>"> <?= $uk->ukuran ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputwarna" class="col-sm-2 col-form-label">Warna</label>
            <div class="col-sm-10">
                <?php foreach($warna as $war): ?>
                <input type="checkbox" class="form-check-input" id="inputwarna" name="warna_list[]"
                    value="<?= $war->warna ?>"> <?= $war->warna ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="row mb-3">
            <?php
        $kat = $this->db->get('kategori')->result();
        ?>
            <label for="#selectwar" class="col-sm-2 col-form-label">kategori</label>
            <div class="col-sm-10">
                <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example" id="selectwar"
                    name="kategori" required>
                    <option selected>Pilih Kategori</option>
                    <?php foreach($kat as $k) : ?>
                    <option value="<?=$k->kategori?>"><?=$k->kategori?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="">
            <a href="<?= base_url();?>barang" class="btn btn-danger">Close</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <?= form_close() ?>
    </div>
</div>