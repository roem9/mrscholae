        <div class="container">
            <div class="row">
                <div class="col-12 mb-2">
                    <a href="<?= base_url()?>awwal" class="btn btn-sm btn-success"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <?php if($latihan[0]):?>
                        <div class="card">
                            <div class="card-header list-group-item-success d-flex justify-content-between">Dhomir Munfashil <span><i class="fa fa-check-circle text-success"></i></span></div>
                            <div class="card-body">
                                <a href="<?= base_url()?>awwal/dhomir/munfashil" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Mulai Belajar</a>
                            </div>
                        </div>
                    <?php else:?>
                        <div class="card border-danger">
                            <div class="card-header list-group-item-danger d-flex justify-content-between">Dhomir Munfashil <span><i class="fa fa-times-circle text-danger"></i></span></div>
                            <div class="card-body">
                                <a href="<?= base_url()?>awwal/dhomir/munfashil" class="btn btn-block btn-sm btn-danger"><i class="fa fa-book mr-1"></i> Mulai Belajar</a>
                            </div>
                        </div>
                    <?php endif;?>
                </div>

                <div class="col-12 col-md-4 mb-3">
                    <?php if($latihan[1]):?>
                        <div class="card">
                            <div class="card-header list-group-item-success d-flex justify-content-between">Dhomir Muttasil <span><i class="fa fa-check-circle text-success"></i></span></div>
                            <div class="card-body">
                                <a href="<?= base_url()?>awwal/dhomir/muttashil" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Mulai Belajar</a>
                            </div>
                        </div>
                    <?php else:?>
                        <div class="card border-danger">
                            <div class="card-header list-group-item-danger d-flex justify-content-between">Dhomir Muttasil <span><i class="fa fa-times-circle text-danger"></i></span></div>
                            <div class="card-body">
                                <a href="<?= base_url()?>awwal/dhomir/muttashil" class="btn btn-block btn-sm btn-danger"><i class="fa fa-book mr-1"></i> Mulai Belajar</a>
                            </div>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>