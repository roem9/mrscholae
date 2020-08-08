        <div class="container">
            <div class="row">
                <?php 
                    if($user['username'] == "demo"){
                        $data = 3;
                    }
                    else {
                        $data = COUNT($tema);
                    }

                    for ($i=1; $i < $data ; $i++) :?>
                    <?php $j = $i - 1;?>
                    <!-- <div class="col-12 col-md-4 mb-3"> -->
                        <?php if($tema[$i]['mufrodat'] == 100) :?>
                            <div class="col-12 col-md-4 mb-3">
                            <div class="card border-success">
                            <div class="card-header list-group-item-success d-flex justify-content-between"><span class="arab"><?= $tema[$i]['title']?></span> <strong><span><?= date("H:i d-m-y", strtotime($tema[$i]['tgl']))?></span></strong></div>
                        <?php else:?>
                            <div class="col-12 col-md-4 mb-3">
                            <div class="card border-secondary">
                            <div class="card-header list-group-item-secondary d-flex justify-content-between arab"><?= $tema[$i]['title']?></div>
                        <?php endif;?>
                            <div class="card-header list-group-item-info d-flex justify-content-between"><?= $tema[$i]['title_arti']?><span class="badge badge-danger"><?= $tema[$i]['count']?></span></div>
                            <div class="card-body">
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: <?= $tema[$i]['mufrodat']?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><?= floor($tema[$i]['mufrodat'])?>%</div>
                                </div>
                                <?php if($tema[$i]['mufrodat'] == 100) :?>
                                    <a href="<?= base_url()?>mufrodat?tema=<?= MD5($tema[$i]['title_arti'])?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Mulai</a>
                                <?php else :?>
                                    <a href="<?= base_url()?>mufrodat?tema=<?= MD5($tema[$i]['title_arti'])?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Mulai</a>
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