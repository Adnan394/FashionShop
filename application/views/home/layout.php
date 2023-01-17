<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $title ?></title>
    <link href="<?=base_url();?>assets/img/main.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css" />
</head>

<body>
    <header class="header-top d-none d-md-block p-primary bg-white shadow-sm fixed-top">
        <div class="row">
            <div class="col col-md-3 d-flex flex-row align-items-center">
                <img src="<?=base_url();?>assets/img/main.png" width="50px">
                <h1 class="fw-700 color-darken-2 color-primary">GANDL</h1>
            </div>
            <div class="col col-md-6">
                <ul class="navbar-nav d-flex flex-row justify-content-center gap-3 fw-600">
                    <li class="nav-item <?php echo ($active=== 'home') ? 'active' : '' ?>">
                        <a class="nav-link" aria-current="page" href="<?= base_url();?>">HOME</a>
                    </li>
                    <li class="nav-item <?php echo ($active=== 'produk') ? 'active' : '' ?>">
                        <a class="nav-link" href="<?=base_url();?>produk">PRODUK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url();?>#rekomendasi">REKOMENDASI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url();?>#about">ABOUT</a>
                    </li>
                </ul>
            </div>
            <div class="col d-flex flex-row fs-3">
                <div class="header-content-detail ms-auto">
                    <a href="<?=base_url();?>Transaksi/data_keranjang" class="color-darken"><i
                            class="bi bi-cart3 me-3"></i></a>
                    <!-- profile  -->
                    <div class="btn-group">
                        <img src="<?=base_url();?>assets/dataimg/<?=($user==null) ? 'default.png' : $user->image?>"
                            width="35px" class="profile dropdown-toggle border-radius" data-bs-toggle="dropdown"
                            aria-expanded="false">
                        <ul class="dropdown-menu">
                            <li>
                                <div class="dropdown-item"><b><?=($user==null) ? 'Guest' : $user->username?></b></div>
                            </li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item" href="<?=base_url();?>Profile">Profile</a></li>
                            <li><a class="dropdown-item" href="<?=base_url();?>Alamat">Setting Alamat</a></li>
                            <li><a class="dropdown-item" href="<?=base_url();?>Transaksi/data_checkout">Pesanan Saya</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <?php if($user==null) :?>
                                <a class="dropdown-item" href="<?= base_url()?>Auth">Login</a>
                                <?php else : ?>
                                <a class="dropdown-item" href="<?= base_url()?>Auth/logout">Logout</a>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                    <!-- end profile  -->
                </div>
            </div>
        </div>

    </header>
    <header class="header-bottom d-block d-md-none p-primary bg-white shadow-sm fixed-top">
        <div class="row d-flex justify-content-between">
            <div class="col col-6 d-flex flex-row align-items-center justify-content-center">
                <img src="<?=base_url();?>assets/img/main.png" width="40px">
                <h1 class="fw-700 color-darken-2 color-primary">GANDL</h1>
            </div>
            <div class="col col-6 d-flex flex-row">
                <div class="header-content-detail ms-auto">
                    <a href="<?=base_url();?>Transaksi/data_keranjang" class="color-darken fs-1"><i
                            class="bi bi-cart3 me-3"></i></a>
                    <!-- profile  -->
                    <div class="btn-group pb-2">
                        <img src="<?=base_url();?>assets/dataimg/<?=($user==null) ? 'default.png' : $user->image?>"
                            width="35px" class="profile dropdown-toggle border-radius" data-bs-toggle="dropdown"
                            aria-expanded="false">
                        <ul class="dropdown-menu">
                            <li>
                                <div class="dropdown-item"><b><?=($user==null) ? 'Guest' : $user->username?></b></div>
                            </li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item" href="<?=base_url();?>Profile">Profile</a></li>
                            <li><a class="dropdown-item" href="<?=base_url();?>Alamat">Setting Alamat</a></li>
                            <li><a class="dropdown-item" href="<?=base_url();?>Transaksi/data_checkout">Pesanan Saya</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <?php if($user==null) :?>
                                <a class="dropdown-item" href="<?= base_url()?>Auth">Login</a>
                                <?php else : ?>
                                <a class="dropdown-item" href="<?= base_url()?>Auth/logout">Logout</a>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                    <!-- end profile  -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <ul class="navbar-nav d-flex flex-row justify-content-center gap-3 fw-600" style="font-size: 0.75em;">
                    <li class="nav-item <?php echo ($active=== 'home') ? 'active' : '' ?>">
                        <a class="nav-link" aria-current="page" href="<?= base_url();?>">HOME</a>
                    </li>
                    <li class="nav-item <?php echo ($active=== 'produk') ? 'active' : '' ?>">
                        <a class="nav-link" href="<?=base_url();?>produk">PRODUK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url();?>#rekomendasi">REKOMENDASI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url();?>#about">ABOUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <?php echo($body) ?>

    <footer class="bc-secondary p-5 color-white">
        <div class="row d-flex justify-content-center">

            <div class="col col-6 col-md-2 mb-5">
                <p>CONTACT</p>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="https://wa.me/6283156437871" class="nav-link" target="_blank"><i
                                class="bi bi-whatsapp me-2"></i>whatsapp</a>
                    </li>
                    <li class="nav-item ">
                        <a href="https://www.instagram.com/adnangandul" class="nav-link" target="_blank"><i
                                class="bi bi-instagram me-2"></i>instagram</a>
                    </li>
                    <li class="nav-item">
                        <a href="adnanega82@gmail.com" class="nav-link"><i class="bi bi-envelope-at me-2"
                                target="_blank"></i>E-mail</a>
                    </li>
                    <li class="nav-item">
                        <a href="linkedin.com/adnang394" class="nav-link" target="_blank"><i
                                class="bi bi-linkedin me-2"></i>linkedin</a>
                    </li>
                    <li class="nav-item">
                        <a href="github.com/adnan394" class="nav-link"><i class="bi bi-github me-2"
                                target="_blank"></i>Github</a>
                    </li>
                </ul>
            </div>
            <div class="col col-6 col-md-2">
                <p>NAVIGASI</p>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url();?>">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?=base_url();?>produk">Produk</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url();?>#rekomendasi">Rekomendasi</a>
                    </li>
                </ul>
            </div>
            <div class="col col-6 col-md-2">
                <P>PRODUK</P>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url();?>">Blouse Dress</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?=base_url();?>produk">Midi Dress</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url();?>#kategori">Kemeja</a>
                    </li>

                </ul>
            </div>
            <div class="col col-6 col-md-2">
                <P>BAHAN</P>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url();?>">Katun Crinkle</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?=base_url();?>produk">Crepe Crinkle</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url();?>#kategori">Poplin Crinkle</a>
                    </li>

                </ul>
            </div>
        </div>
        <p class="mt-5 text-center">&copy; Copyright by ❤ Adnan Ega Maulana</p>

    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="<?=base_url();?>assets/js/script.js"></script>
</body>

</html>