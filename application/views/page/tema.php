<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-warning" role="alert">
                Jaga kesehatan. Tetap di rumah yaa <i class="fa fa-smile text-warning"></i>
            </div>
        </div>
        <div class="col-12">
            <div class="alert alert-info"><i class="fa fa-info-circle text-info mr-1"></i> belajar lebih terarah disertai latihan-latihan. baca manfaat yang dapat teman-teman dapatkan dari aplikasi ini <a href="<?= base_url()?>tentang">disini</a></div>
        </div>
    </div>
    <?php if( $this->session->flashdata('pesan') ) : ?>
        <div class="row">
            <div class="col-12 col-md-6">
                <?= $this->session->flashdata('pesan');?>
                </div>
        </div>
    <?php endif; ?>
    <div class="row">
        <?php foreach ($tema as $tema) :?>
            <div class="col-12 mb-2">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-info text-right d-flex justify-content-between" style="font-size: 1.5em">
                        <a href="<?= base_url()?>mufrodat/bagian/<?= $tema['id_tema']?>">
                            <?= $tema['tema']?>
                        </a>
                        <span><a target="_blank" href="<?= base_url()?>mufrodat/cetak/<?= $tema['id_tema']?>"><i class="fa fa-file-pdf text-danger"></i></a></span>
                    </li>
                </ul>
            </div>
        <?php endforeach;?>
    </div>
</div>

<script>
    $("#tema").addClass("active");
</script>

