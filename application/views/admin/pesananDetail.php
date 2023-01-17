<div class="card">
    <div class="card-body">
        <h5 class="card-title">Detail Data Barang</h5>
        <a href="<?=base_url();?>Dashboard/siapkirim/<?=$pesan->id?>" type="button" class="btn btn-primary mb-3">Barang
            Siap Kirim?</a>

        <!-- Horizontal Form -->
        <?= form_open_multipart(base_url()) ?>
        <input type="hidden" name="id" value="<?=$pesan->id?>">
        <div class="row mb-3">
            <label for="id" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="id" name="id" value="<?=$pesan->id?>" required disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="iduser" class="col-sm-2 col-form-label">ID USER</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="iduser" name="iduser" value="<?=$pesan->id_user?>" required
                    disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="namauser" class="col-sm-2 col-form-label">NAMA USER</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="namauser" name="namauser" value="<?=$pesan->nama_user?>"
                    required disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="nohp" class="col-sm-2 col-form-label">NO HP</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nohp" name="nohp" value="<?=$pesan->nohp?>" required
                    disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">ALAMAT</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$pesan->alamat?>" required
                    disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="idbarang" class="col-sm-2 col-form-label">ID BARANG</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="idbarang" name="idbarang" value="<?=$pesan->id_barang?>"
                    required disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="namabarang" class="col-sm-2 col-form-label">NAMA BARANG</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="namabarang" name="namabarang" value="<?=$pesan->judul?>"
                    required disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="gambar" class="col-sm-2 col-form-label">GAMBAR BARANG</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="gambar" name="gambar" value="<?=$pesan->gambar_barang?>"
                    required disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="harga" class="col-sm-2 col-form-label">HARGA BARANG</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="harga" name="harga" value="<?=$pesan->harga?>" required
                    disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ukuran" class="col-sm-2 col-form-label">UKURAN BARANG</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="ukuran" name="ukuran" value="<?=$pesan->ukuran?>" required
                    disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="warna" class="col-sm-2 col-form-label">WARNA BARANG</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="warna" name="warna" value="<?=$pesan->warna?>" required
                    disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="jasa" class="col-sm-2 col-form-label">JASA PENGIRIMAN</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="jasa" name="jasa" value="<?=$pesan->jasa_pengiriman?>"
                    required disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="bayar" class="col-sm-2 col-form-label">METODE BAYAR</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="bayar" name="bayar" value="<?=$pesan->metode_bayar?>"
                    required disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="total" class="col-sm-2 col-form-label">TOTAL</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="total" name="total" value="<?=$pesan->total?>" required
                    disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="status" class="col-sm-2 col-form-label">STATUS PENGIRIMAN</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="status" name="status" value="<?=$pesan->status_pengiriman?>"
                    required disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="order" class="col-sm-2 col-form-label">ORDER</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="order" name="order" value="<?=$pesan->timestamp?>" required
                    disabled>
            </div>
        </div>

        <div class="">
            <a href="<?= base_url();?>Dashboard" class="btn btn-danger">Close</a>
        </div>
        <?= form_close() ?>
    </div>
</div>