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
    <div class="container mb-3">
        <div class="row">
            <div class="col-sm-12">
                <div class="row d-flex justify-content-center mb-4">
                    <?=$this->session->flashdata('pesan')?>
                    <div class="col-sm-12 col-md-6 d-flex flex-column align-items-center pt-3 main">
                        <img src="<?=base_url();?>assets/dataimg/<?=$user->image?>" alt="" width="100px"
                            class="border-radius">
                        <p><?=$user->username?></p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-sm-12 col-md-6">
                        <div class="row">
                            <div class="col col-md-3">
                                <p>Nama</p>
                                <p>Username</p>
                                <p>Email</p>
                            </div>
                            <div class="col col-md-8">
                                <p>: <?=$user->name?></p>
                                <p>: <?=$user->username?></p>
                                <p>: <?=$user->email?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if($user->nohp==null) :?>
                <div class="row d-flex justify-content-center mt-5">
                    <div class="col-sm-12 col-md-6">
                        <h3>Lengkapi profile</h3>
                        <?=$this->session->flashdata('pesan')?>
                        <?php $this->load->view('user/edit_profile')?>
                    </div>
                </div>
                <?php else :?>
                <div class="row d-flex justify-content-center">
                    <div class="col-sm-12 col-md-6">
                        <div class="row">
                            <div class="col col-md-3">
                                <p>No HP</p>
                                <p>Tanggal Lahir</p>
                                <p>Jenis Kelamin</p>
                                <p>Alamat</p>
                            </div>
                            <div class="col col-md-8">
                                <p>: <?=$user->nohp?></p>
                                <p>: <?=$user->tanggal_lahir?></p>
                                <p>: <?=$user->jenis_kelamin?></p>
                                <p>: <?=$user->alamat?></p>
                            </div>
                        </div>
                        <a href="<?=base_url();?>Profile/update_profile" class="btn main">Edit Profile</a>
                        <a href="<?=base_url();?>" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>