        <div class="container">
            <div class="row">

                <!-- tombol -->
                <?php if($mufrodat[1]['mufrodat'] == 100) :?>
                    <div class="col-12 mb-3">
                        <a class="btn btn-sm btn-block btn-success text-light show-all">Tampilkan Semua Mufrodat</a>
                    </div>
                <?php endif;?>

                <!-- Mufrodat 1 -->
                <!-- <div class="col-12 col-md-4 mb-3"> -->
                    <?php if($mufrodat[1]['mufrodat'] == 100) :?>
                        <div class="col-12 col-md-4 mb-3 hide">
                        <div class="card border-success">
                        <div class="card-header list-group-item-success d-flex justify-content-between"><span class="arab">الْأُسْرَةُ ١</span> <strong><span><?= date("H:i d-m-y", strtotime($mufrodat[1]['tgl']))?></span></strong></div>
                    <?php else:?>
                        <div class="col-12 col-md-4 mb-3">
                        <div class="card border-secondary">
                        <div class="card-header list-group-item-secondary d-flex justify-content-between arab">الْأُسْرَةُ ١</div>
                    <?php endif;?>
                        <div class="card-header list-group-item-info d-flex justify-content-between">Anggota Keluarga <span class="badge badge-danger"><?= $mufrodat[1]['count']?></span></div>
                        <div class="card-body">
                            <div class="progress mb-3">
                                <div class="progress-bar bg-info" role="progressbar" style="width: <?= $mufrodat[1]['mufrodat']?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <?php if($mufrodat[1]['mufrodat'] == 100) :?>
                                <a href="<?= base_url()?>mufrodat?id=<?= MD5('Mufrodat 1')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                            <?php else :?>
                                <a href="<?= base_url()?>mufrodat?id=<?= MD5('Mufrodat 1')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                
                <?php 
                    $data = COUNT($mufrodat);
                    for ($i=2; $i < $data+1 ; $i++) :?>
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
                                    <div class="progress-bar bg-info" role="progressbar" style="width: <?= $mufrodat[$i]['mufrodat']?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <?php if($mufrodat[$i]['mufrodat'] == 100) :?>
                                    <a href="<?= base_url()?>mufrodat?id=<?= MD5($mufrodat[$i]['latihan'])?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                                <?php elseif($mufrodat[$i-1]['mufrodat'] == 100 && $mufrodat[$i]['mufrodat'] != 100) :?>
                                    <a href="<?= base_url()?>mufrodat?id=<?= MD5($mufrodat[$i]['latihan'])?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                                <?php else :?>
                                    <a href="<?= base_url()?>mufrodat?id=<?= MD5($mufrodat[$i]['latihan'])?>" class="btn btn-block btn-sm btn-secondary disabled"><i class="fa fa-lock mr-1"></i> Belajar</a>
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
    $(".hide").hide();

    $(".show-all").click(function(){
        $(".hide").show();
        $(".show-all").hide();
    })
</script>