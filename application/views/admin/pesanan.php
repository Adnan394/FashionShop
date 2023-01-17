<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Table Data User</h5>
                    <!-- Default Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">ID</th>
                                <th scope="col">USER</th>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">BARANG</th>
                                <th scope="col">UKURAN</th>
                                <th scope="col">WARNA</th>
                                <th scope="col">STATUS</th>
                                <th scope="col">ACTION</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no=1;
                            ?>
                            <?php foreach($pesan as $row): ?>
                            <tr>
                                <th><?=$no?></th>
                                <td><?=$row->id?></td>
                                <td><?=$row->nama_user?></td>
                                <td><img src="<?= base_url();?>assets\dataimg\<?=$row->gambar_barang?>" width="50px">
                                </td>
                                <td><?=$row->judul?></td>
                                <td><?=$row->ukuran?></td>
                                <td><?=$row->warna?></td>
                                <?php 
                                $this->db->where('id', $row->status_pengiriman);
                                $stts = $this->db->get('status_pengiriman')->row();
                                ?>
                                <td>
                                    <?=$stts->status?>
                                </td>
                                <td>
                                    <a href="<?=base_url();?>Dashboard/detail_pesanan/<?=$row->id?>"
                                        class="btn btn-outline-warning">Detail</i></a>
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