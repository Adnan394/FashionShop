<section class="section dashboard">
    <a href="<?=base_url();?>Dashboard/hero" class="btn btn-primary">Tambah Hero</a>
    <div class="row mt-3 gap-3">

        <!-- Left side columns -->
        <?php foreach($data as $d):?>
        <div class="card shadow-sm" style="width: 16rem;">
            <img src="<?=base_url();?>assets/dataimg/<?=$d->image?>" alt="">
            <a href="<?=base_url();?>Dashboard/hero_hapus/<?=$d->id?>" class="btn btn-danger my-3"><i
                    class="bi bi-trash3-fill me-2"></i>Hapus</a>
        </div>
        <?php endforeach;?>
    </div>
</section>