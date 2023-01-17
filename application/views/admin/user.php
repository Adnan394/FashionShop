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
                                <th scope="col">FOTO</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">USERNAME</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">NO HP</th>
                                <th scope="col">TTL</th>
                                <th scope="col">GENDER</th>
                                <th scope="col">ALAMAT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no=1;
                            ?>
                            <?php foreach($user as $row): ?>
                            <tr>
                                <th><?=$no?></th>
                                <td><img src="<?= base_url();?>assets\dataimg\<?=$row->image?>" width="50px"></td>
                                <td><?=$row->name?></td>
                                <td><?=$row->username?></td>
                                <td><?=$row->email?></td>
                                <td><?=$row->nohp?></td>
                                <td><?=$row->tanggal_lahir?></td>
                                <td><?=$row->jenis_kelamin?></td>
                                <td><?=$row->alamat?></td>
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