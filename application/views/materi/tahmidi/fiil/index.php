        <div class="container">
            <div class="row">
                <div class="col-12 mb-2">
                    <a href="<?= base_url()?>tahmidi" class="btn btn-sm btn-success"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <?php if($madhi < 30):?>
                        <div class="card border-danger">
                            <div class="card-header list-group-item-danger d-flex justify-content-between">Pola Fi'il Madhi <span class="btn btn-sm btn-outline-danger"><?= $madhi?> / 30</span></div>
                            <div class="card-body">
                                <a href="<?= base_url()?>tahmidi/fiil/madhi" class="btn btn-block btn-sm btn-danger"><i class="fa fa-book mr-1"></i> Mulai Belajar</a>
                            </div>
                        </div>
                    <?php else:?>
                        <div class="card">
                            <div class="card-header list-group-item-success d-flex justify-content-between">Pola Fi'il Madhi <span><i class="fa fa-check-circle text-success"></i></span></div>
                            <div class="card-body">
                                <a href="<?= base_url()?>tahmidi/fiil/madhi" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Mulai Belajar</a>
                            </div>
                        </div>
                    <?php endif;?>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <?php if($mudhori < 30):?>
                        <div class="card border-danger">
                            <div class="card-header list-group-item-danger d-flex justify-content-between">Pola Fi'il Mudhori <span class="btn btn-sm btn-outline-danger"><?= $mudhori?> / 30</span></div>
                            <div class="card-body">
                                <a href="<?= base_url()?>tahmidi/fiil/mudhori" class="btn btn-block btn-sm btn-danger"><i class="fa fa-book mr-1"></i> Mulai Belajar</a>
                            </div>
                        </div>
                    <?php else:?>
                        <div class="card">
                            <div class="card-header list-group-item-success d-flex justify-content-between">Pola Fi'il Mudhori <span><i class="fa fa-check-circle text-success"></i></span></div>
                            <div class="card-body">
                                <a href="<?= base_url()?>tahmidi/fiil/mudhori" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Mulai Belajar</a>
                            </div>
                        </div>
                    <?php endif;?>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <?php if($amr < 30):?>
                        <div class="card border-danger">
                            <div class="card-header list-group-item-danger d-flex justify-content-between">Pola Fi'il Amr <span class="btn btn-sm btn-outline-danger"><?= $amr?> / 30</span></div>
                            <div class="card-body">
                                <a href="<?= base_url()?>tahmidi/fiil/amr" class="btn btn-block btn-sm btn-danger"><i class="fa fa-book mr-1"></i> Mulai Belajar</a>
                            </div>
                        </div>
                    <?php else:?>
                        <div class="card">
                            <div class="card-header list-group-item-success d-flex justify-content-between">Pola Fi'il Amr <span><i class="fa fa-check-circle text-success"></i></span></div>
                            <div class="card-body">
                                <a href="<?= base_url()?>tahmidi/fiil/amr" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Mulai Belajar</a>
                            </div>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>