<div class="card">
    <div class="card-body">
        <h5 class="card-title">Tambah Data Barang</h5>

        <!-- Horizontal Form -->
        <?= form_open_multipart(base_url('Dashboard/hero_save')) ?>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="judul" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inpugambar" class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="inpugambar" name="image" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputharga" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputharga" name="deskripsi" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputdes" class="col-sm-2 col-form-label">Action</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputdes" name="action" required>
            </div>
        </div>
        <div class="">
            <a href="<?= base_url();?>barang" class="btn btn-danger">Close</a>
            <button type="submit" class="btn btn-primary" id="addSave">Save</button>
        </div>
        <?= form_close() ?>
    </div>
</div>