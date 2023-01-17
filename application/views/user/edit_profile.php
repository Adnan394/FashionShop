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
        <h1 class="text-center m-3">Edit Profile</h1>
        <?=$this->session->flashdata('pesan')?>
        <div class="row d-flex flex-column align-items-center">
            <div class="col col-md-7">
                <form action="<?= base_url();?>Profile/update_profile_save/<?=$user->id?>" method="post"
                    enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="name"
                                value="<?=$user->name?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputusername" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputusername" name="username" size="20"
                                value="<?=$user->username?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputemail" name="email"
                                value="<?=$user->email?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputnohp" class="col-sm-2 col-form-label">No Hp</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputnohp" name="nohp"
                                value="<?=$user->nohp?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputttl" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="inputttl" name="ttl"
                                value="<?=$user->tanggal_lahir?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputjk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputjk" name="jk"
                                value="<?=$user->jenis_kelamin?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputjk" class="col-sm-2 col-form-label">Foto Profile</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="inputjk" name="profile" required>
                        </div>
                    </div>
                    <div class="">
                        <button type="submit" class="btn main" id="addSave">Save</button>
                        <a href="<?= base_url();?>Home" class="btn btn-secondary">Close</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>