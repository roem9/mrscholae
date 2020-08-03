        <div class="container">
            <div class="row">
                <div class="col-12 mb-3">
                    <a href="<?= base_url()?>mufrodat" class="btn btn-sm btn-success"><i class="fa fa-home mr-1"></i>Menu Utama</a>
                </div>
                <?php 
                    $data = COUNT($mufrodat);
                    for ($i=1; $i < $data ; $i++) :?>
                    <?php $j = $i - 1;?>
                    <!-- <div class="col-12 col-md-4 mb-3"> -->
                        <?php if($mufrodat[$i]['mufrodat'] == 100) :?>
                            <div class="col-12 col-md-4 mb-3 hide">
                            <div class="card border-success">
                            <div class="card-header list-group-item-success d-flex justify-content-between"><span class="arab"><?= $mufrodat[$i]['title']?></span> <strong><span><?= date("H:i d-m-y", strtotime($mufrodat[$i]['tgl']))?></span></strong></div>
                        <?php else:?>
                            <div class="col-12 col-md-4 mb-3">
                            <div class="card border-secondary">
                            <div class="card-header list-group-item-secondary d-flex justify-content-between arab"><?= $mufrodat[$i]['title']?></div>
                        <?php endif;?>
                            <div class="card-header list-group-item-info d-flex justify-content-between"><?= $mufrodat[$i]['title_arti']?><span class="badge badge-danger"><?= $mufrodat[$i]['count']?></span></div>
                            <div class="card-body">
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: <?= $mufrodat[$i]['mufrodat']?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><?= floor($mufrodat[$i]['mufrodat'])?>%</div>
                                </div>
                                <?php if($mufrodat[$i]['mufrodat'] == 100) :?>
                                    <a href="<?= base_url()?>mufrodat?id=<?= MD5($mufrodat[$i]['latihan'])?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                                <?php else :?>
                                    <a href="<?= base_url()?>mufrodat?id=<?= MD5($mufrodat[$i]['latihan'])?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                <?php endfor;?>
            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>
<script>
    // $(".hide").hide();

    // $(".show-all").click(function(){
    //     $(".hide").show();
    //     $(".show-all").hide();
    // })
</script>