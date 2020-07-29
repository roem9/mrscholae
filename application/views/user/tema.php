        <div class="container">
            <?php if( $this->session->flashdata('pesan') ) : ?>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <?= $this->session->flashdata('pesan');?>
                        </div>
                </div>
            <?php endif; ?>
            <div class="row">
                <?php foreach ($tema as $tema) :?>
                    <div class="col-12 col-md-4 mb-3">
                        <ul class="list-group">
                            <?php if($tema['status'] == 'on'):?>
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between list-group-item-info">
                                        <?= $tema['tema']?>
                                        <span><i class="fa fa-check-circle text-success"></i></span>
                                    </div>
                                    <div class="card-body d-flex justify-content-between">
                                        <span class="btn btn-sm btn-outline-success">Kata Baru : <?= $tema['kata']?></span>
                                        <a href="<?= base_url()?>kosakata/bagian/<?=$tema['id_tema']?>" class="btn btn-sm btn-success">Mulai</a>
                                    </div>
                                </div>
                            <?php else:?>
                                <div class="card border-danger">
                                    <div class="card-header d-flex justify-content-between list-group-item-danger">
                                        <?= $tema['tema']?>
                                        <span><i class="fa fa-times-circle text-danger"></i></span>
                                    </div>
                                    <div class="card-body d-flex justify-content-between">
                                        <span class="btn btn-sm btn-outline-danger">Kata Baru : <?= $tema['kata']?></span>
                                        <a href="<?= base_url()?>kosakata/bagian/<?=$tema['id_tema']?>" class="btn btn-sm btn-danger">Mulai</a>
                                    </div>
                                </div>
                            <?php endif;?>
                        </ul>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>
<div class="overlay"></div>
<script>
    $("#tema").addClass("active");
</script>

