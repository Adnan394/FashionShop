<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Table Mahasiswa</h5>
                    <a href=" <?= base_url();?>Barang/add" class="btn btn-primary mb-3"><i
                            class="bi bi-plus-lg"></i>Tambah Data</a>
                    <!-- Default Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">ID</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Gambar 1</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Ukuran</th>
                                <th scope="col">Warna</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no=1;
                            ?>
                            <?php foreach($barang as $row): ?>
                            <tr>
                                <th><?=$no?></th>
                                <td><?=$row->id?></td>
                                <td><?=$row->judul?></td>
                                <td> <img src="<?= base_url();?>assets\dataimg\<?=$row->gambar1?>" width="50px"></td>
                                <td><?=$row->harga?></td>
                                <td><?=$row->deskripsi?></td>
                                <td><?=$row->ukuran?></td>
                                <td><?=$row->warna?></td>
                                <td>
                                    <a href="<?= base_url();?>Barang/edit/<?=$row->id?>" type="button"
                                        class="btn btn-outline-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a href="<?= base_url();?>Barang/hapus/<?=$row->id?>" type="button"
                                        class="btn btn-outline-danger"><i class="bi bi-x-square-fill"></i></a>
                                </td>
                            </tr>

                            <?php $no++ ?>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                    <!-- End Default Table Example -->
                </div>
            </div>
        </div>
    </div>
</section>