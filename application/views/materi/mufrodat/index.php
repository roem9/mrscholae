        <div class="container">
            <?php if( $this->session->flashdata('pesan') ) : ?>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <?= $this->session->flashdata('pesan');?>
                        </div>
                </div>
            <?php endif; ?>
            <div class="row">
                <?php foreach ($mufrodat as $mufrodat) :?>
                    <div class="col-12 col-md-4 mb-3">
                        <ul class="list-group">
                            <?php if($mufrodat['status'] == 'on'):?>
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between list-group-item-success">
                                        <?= $mufrodat['tema']?>
                                        <span><i class="fa fa-check-circle text-success"></i></span>
                                    </div>
                                    <div class="card-header d-flex justify-content-between">
                                        <?= $mufrodat['arti_tema']?>
                                    </div>
                                    <div class="card-body">
                                        <div class="progress mb-3">
                                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span class="btn btn-sm btn-outline-success">Kata Baru : <?= $mufrodat['kata']?></span>
                                            <a href="<?= base_url()?>kosakata/bagian/<?=$mufrodat['id_mufrodat']?>" class="btn btn-sm btn-success">Mulai</a>
                                        </div>
                                    </div>
                                </div>
                            <?php else:?>
                                <div class="card border-secondary">
                                    <div class="card-header d-flex justify-content-between list-group-item-secondary">
                                        <?= $mufrodat['tema']?>
                                        <span><i class="fa fa-times-circle text-secondary"></i></span>
                                    </div>
                                    <div class="card-header d-flex justify-content-between">
                                        <?= $mufrodat['arti_tema']?>
                                    </div>
                                    <div class="card-body d-flex justify-content-between">
                                        <span class="btn btn-sm btn-outline-secondary">Kata Baru : <?= $mufrodat['kata']?></span>
                                        <a href="<?= base_url()?>kosakata/bagian/<?=$mufrodat['id_mufrodat']?>" class="btn btn-sm btn-secondary">Mulai</a>
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