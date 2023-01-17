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
    <div class="container mb-5">
        <h1 class="text-center m-3">Edit Alamat</h1>
        <div class="row d-flex flex-column align-items-center">
            <div class="col col-md-7">
                <form action="<?=base_url();?>Alamat/alamat_save" method="post">
                    <input type="hidden" value="<?=$user->id?>" name="id" id="">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">Provinsi</label>
                        <div class="col-sm-10 col-md-10">
                            <input type="text" class="form-control" id="inputEmail3" name="alamat[]" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">Kabupaten/Kota</label>
                        <div class="col-sm-10 col-md-10">
                            <input type="text" class="form-control" id="inputEmail3" name="alamat[]" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">Kecamatan</label>
                        <div class="col-sm-10 col-md-10">
                            <input type="text" class="form-control" id="inputEmail3" name="alamat[]" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">Desa/Kelurahan</label>
                        <div class="col-sm-10 col-md-10">
                            <input type="text" class="form-control" id="inputEmail3" name="alamat[]" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">Jalan/lainya</label>
                        <div class="col-sm-10 col-md-10">
                            <input type="text" class="form-control" id="inputEmail3" name="alamat[]" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">Kode Pos</label>
                        <div class="col-sm-10 col-md-10">
                            <input type="number" class="form-control" id="inputEmail3" name="alamat[]" required>
                        </div>
                    </div>
                    <div class="">
                        <button type="submit" class="btn main" id="addSave">Save</button>
                        <a href="<?= base_url();?>" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>