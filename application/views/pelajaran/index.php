<div class="container">
    <div class="row">
        <!-- tombol -->
        <?php if($dasar_1 == 100) :?>
            <div class="col-12 mb-3">
                <a class="btn btn-sm btn-block btn-success text-light show-all">Tampilkan Semua Pelajaran</a>
            </div>
        <?php endif;?>

        <!-- Mufrodat 1 -->
            <?php if($dasar_1 == 100) :?>
                <div class="col-12 col-md-4 mb-3 hide">
                    <div class="card border-success">
                    <div class="card-header list-group-item-success d-flex justify-content-between">Mufrodat 1 <strong><span><?= date("H:i d-m-y", strtotime($tgl[1]))?></span></strong></div>
            <?php else:?>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card border-secondary">
                    <div class="card-header list-group-item-secondary d-flex justify-content-between">Mufrodat 1</div>
            <?php endif;?>
                <div class="card-body">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $dasar_1?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <?php if($dasar_1 == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 1')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 1')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php endif;?>
                </div>
            </div>
        </div>
        
        <!-- Mufrodat 2 -->
            <?php if($dasar_2 == 100) :?>
                <div class="col-12 col-md-4 mb-3 hide">
                    <div class="card border-success">
                    <div class="card-header list-group-item-success d-flex justify-content-between">Mufrodat 2 <strong><span><?= date("H:i d-m-y", strtotime($tgl[2]))?></span></strong></div>
            <?php else:?>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card border-secondary">
                    <div class="card-header list-group-item-secondary d-flex justify-content-between">Mufrodat 2</div>
            <?php endif;?>
                <div class="card-body">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $dasar_2?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- <?php if($dasar_2 == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 2')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 2')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php endif;?> -->
                    <?php if($dasar_2 == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 2')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php elseif($dasar_1 == 100 && $dasar_2 != 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 2')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 2')?>" class="btn btn-block btn-sm btn-secondary disabled"><i class="fa fa-lock mr-1"></i> Belajar</a>
                    <?php endif;?>
                </div>
            </div>
        </div>
        
        <!-- Mufrodat 3 -->
            <?php if($dasar_3 == 100) :?>
                <div class="col-12 col-md-4 mb-3 hide">
                    <div class="card border-success">
                    <div class="card-header list-group-item-success d-flex justify-content-between">Mufrodat 3 <strong><span><?= date("H:i d-m-y", strtotime($tgl[3]))?></span></strong></div>
            <?php else:?>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card border-secondary">
                    <div class="card-header list-group-item-secondary d-flex justify-content-between">Mufrodat 3</div>
            <?php endif;?>
                <div class="card-body">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $dasar_3?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- <?php if($dasar_3 == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 3')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 3')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php endif;?> -->
                    <?php if($dasar_3 == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 3')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php elseif($dasar_2 == 100 && $dasar_3 != 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 3')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 3')?>" class="btn btn-block btn-sm btn-secondary disabled"><i class="fa fa-lock mr-1"></i> Belajar</a>
                    <?php endif;?>
                </div>
            </div>
        </div>
        
        <!-- Mufrodat 4 -->
            <?php if($dasar_4 == 100) :?>
                <div class="col-12 col-md-4 mb-3 hide">
                    <div class="card border-success">
                    <div class="card-header list-group-item-success d-flex justify-content-between">Mufrodat 4 <strong><span><?= date("H:i d-m-y", strtotime($tgl[4]))?></span></strong></div>
            <?php else:?>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card border-secondary">
                    <div class="card-header list-group-item-secondary d-flex justify-content-between">Mufrodat 4</div>
            <?php endif;?>
                <div class="card-body">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $dasar_4?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- <?php if($dasar_4 == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 4')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 4')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php endif;?> -->
                    <?php if($dasar_4 == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 4')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php elseif($dasar_3 == 100 && $dasar_4 != 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 4')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 4')?>" class="btn btn-block btn-sm btn-secondary disabled"><i class="fa fa-lock mr-1"></i> Belajar</a>
                    <?php endif;?>
                </div>
            </div>
        </div>
        
        <!-- muannats mudzakkar -->
            <?php if($mm == 100) :?>
                <div class="col-12 col-md-4 mb-3 hide">
                    <div class="card border-success">
                    <div class="card-header list-group-item-success d-flex justify-content-between"><span class="arab">مُذَكَّرٌ وَ مُؤَنَّثٌ</span> <strong><span><?= date("H:i d-m-y", strtotime($tgl[5]))?></span></strong></div>
            <?php else:?>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card border-secondary">
                    <div class="card-header list-group-item-secondary d-flex justify-content-between arab">مُذَكَّرٌ وَ مُؤَنَّثٌ</div>
            <?php endif;?>
                <div class="card-body">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $mm?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <?php if($mm == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Muannats Mudzakkar')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php elseif($dasar_4 == 100 && $mm != 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Muannats Mudzakkar')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Muannats Mudzakkar')?>" class="btn btn-block btn-sm btn-secondary disabled"><i class="fa fa-lock mr-1"></i> Belajar</a>
                    <?php endif;?>
                </div>
            </div>
        </div>
        
        <!-- hadza hadzihi -->
            <?php if($hh == 100) :?>
                <div class="col-12 col-md-4 mb-3 hide">
                    <div class="card border-success">
                    <div class="card-header list-group-item-success d-flex justify-content-between"><span class="arab">هٰذَا / هٰذِهِ</span> <strong><span><?= date("H:i d-m-y", strtotime($tgl[6]))?></span></strong></div>
            <?php else:?>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card border-secondary">
                    <div class="card-header list-group-item-secondary d-flex justify-content-between arab">هٰذَا / هٰذِهِ</div>
            <?php endif;?>
                <div class="card-body">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $hh?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <?php if($hh == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Hadza Hadzihi')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php elseif($mm == 100 && $hh != 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Hadza Hadzihi')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Hadza Hadzihi')?>" class="btn btn-block btn-sm btn-secondary disabled"><i class="fa fa-lock mr-1"></i> Belajar</a>
                    <?php endif;?>
                </div>
            </div>
        </div>
        
        <!-- dzalika tilka -->
            <?php if($dt == 100) :?>
                <div class="col-12 col-md-4 mb-3 hide">
                    <div class="card border-success">
                    <div class="card-header list-group-item-success d-flex justify-content-between"><span class="arab">ذٰلِكَ / تِلْكَ</span> <strong><span><?= date("H:i d-m-y", strtotime($tgl[7]))?></span></strong></div>
            <?php else:?>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card border-secondary">
                    <div class="card-header list-group-item-secondary d-flex justify-content-between arab">ذٰلِكَ / تِلْكَ</div>
            <?php endif;?>
                <div class="card-body">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $dt?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <?php if($dt == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Dzalika Tilka')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php elseif($hh == 100 && $dt != 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Dzalika Tilka')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Dzalika Tilka')?>" class="btn btn-block btn-sm btn-secondary disabled"><i class="fa fa-lock mr-1"></i> Belajar</a>
                    <?php endif;?>
                </div>
            </div>
        </div>

        <!-- Mufrodat 5 -->
            <?php if($dasar_5 == 100) :?>
                <div class="col-12 col-md-4 mb-3 hide">
                    <div class="card border-success">
                    <div class="card-header list-group-item-success d-flex justify-content-between">Mufrodat 5 <strong><span><?= date("H:i d-m-y", strtotime($tgl[8]))?></span></strong></div>
            <?php else:?>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card border-secondary">
                    <div class="card-header list-group-item-secondary d-flex justify-content-between">Mufrodat 5</div>
            <?php endif;?>
                <div class="card-body">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $dasar_5?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <?php if($dasar_5 == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 5')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php elseif($dt == 100 && $dasar_5 != 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 5')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 5')?>" class="btn btn-block btn-sm btn-secondary disabled"><i class="fa fa-lock mr-1"></i> Belajar</a>
                    <?php endif;?>
                </div>
            </div>
        </div>
        
        <!-- Mufrodat 6 -->
            <?php if($dasar_6 == 100) :?>
                <div class="col-12 col-md-4 mb-3 hide">
                    <div class="card border-success">
                    <div class="card-header list-group-item-success d-flex justify-content-between">Mufrodat 6 <strong><span><?= date("H:i d-m-y", strtotime($tgl[9]))?></span></strong></div>
            <?php else:?>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card border-secondary">
                    <div class="card-header list-group-item-secondary d-flex justify-content-between">Mufrodat 6</div>
            <?php endif;?>
                <div class="card-body">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $dasar_6?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <?php if($dasar_6 == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 6')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php elseif($dasar_5 == 100 && $dasar_6 != 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 6')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 6')?>" class="btn btn-block btn-sm btn-secondary disabled"><i class="fa fa-lock mr-1"></i> Belajar</a>
                    <?php endif;?>
                </div>
            </div>
        </div>
        
        <!-- Kalimat 1 -->
            <?php if($k1 == 100) :?>
                <div class="col-12 col-md-4 mb-3 hide">
                    <div class="card border-success">
                    <div class="card-header list-group-item-success d-flex justify-content-between">Kalimat 1 <strong><span><?= date("H:i d-m-y", strtotime($tgl[10]))?></span></strong></div>
            <?php else:?>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card border-secondary">
                    <div class="card-header list-group-item-secondary d-flex justify-content-between">Kalimat 1</div>
            <?php endif;?>
                <div class="card-body">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $k1?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <?php if($k1 == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Kalimat 1')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php elseif($dasar_5 == 100 && $k1 != 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Kalimat 1')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Kalimat 1')?>" class="btn btn-block btn-sm btn-secondary disabled"><i class="fa fa-lock mr-1"></i> Belajar</a>
                    <?php endif;?>
                </div>
            </div>
        </div>
        
        <!-- Alif Lam -->
            <?php if($al == 100) :?>
                <div class="col-12 col-md-4 mb-3 hide">
                    <div class="card border-success">
                    <div class="card-header list-group-item-success d-flex justify-content-between"><span>Alif Lam (<b>ال</b>)</span> <strong><span><?= date("H:i d-m-y", strtotime($tgl[11]))?></span></strong></div>
            <?php else:?>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card border-secondary">
                    <div class="card-header list-group-item-secondary">Alif Lam (<b>ال</b>)</div>
            <?php endif;?>
                <div class="card-body">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $al?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <?php if($al == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Alif Lam')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php elseif($k1 == 100 && $al != 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Alif Lam')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Alif Lam')?>" class="btn btn-block btn-sm btn-secondary disabled"><i class="fa fa-lock mr-1"></i> Belajar</a>
                    <?php endif;?>
                </div>
            </div>
        </div>
        
        <!-- Mufrodat 7 -->
            <?php if($dasar_7 == 100) :?>
                <div class="col-12 col-md-4 mb-3 hide">
                    <div class="card border-success">
                    <div class="card-header list-group-item-success d-flex justify-content-between">Mufrodat 7 <strong><span><?= date("H:i d-m-y", strtotime($tgl[12]))?></span></strong></div>
            <?php else:?>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card border-secondary">
                    <div class="card-header list-group-item-secondary d-flex justify-content-between">Mufrodat 7</div>
            <?php endif;?>
                <div class="card-body">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $dasar_7?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- <?php if($dasar_7 == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 7')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 7')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php endif;?> -->
                    <?php if($dasar_7 == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 7')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php elseif($dasar_6 == 100 && $dasar_7 != 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 7')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 7')?>" class="btn btn-block btn-sm btn-secondary disabled"><i class="fa fa-lock mr-1"></i> Belajar</a>
                    <?php endif;?>
                </div>
            </div>
        </div>
        
        <!-- Mufrodat 8 -->
            <?php if($dasar_8 == 100) :?>
                <div class="col-12 col-md-4 mb-3 hide">
                    <div class="card border-success">
                    <div class="card-header list-group-item-success d-flex justify-content-between">Mufrodat 8 <strong><span><?= date("H:i d-m-y", strtotime($tgl[13]))?></span></strong></div>
            <?php else:?>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card border-secondary">
                    <div class="card-header list-group-item-secondary d-flex justify-content-between">Mufrodat 8</div>
            <?php endif;?>
                <div class="card-body">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $dasar_8?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- <?php if($dasar_8 == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 8')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 8')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php endif;?> -->
                    <?php if($dasar_8 == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 8')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php elseif($dasar_7 == 100 && $dasar_8 != 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 8')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 8')?>" class="btn btn-block btn-sm btn-secondary disabled"><i class="fa fa-lock mr-1"></i> Belajar</a>
                    <?php endif;?>
                </div>
            </div>
        </div>

        <!-- Mufrodat 9 -->
            <?php if($dasar_9 == 100) :?>
                <div class="col-12 col-md-4 mb-3 hide">
                    <div class="card border-success">
                    <div class="card-header list-group-item-success d-flex justify-content-between">Mufrodat 9 <strong><span><?= date("H:i d-m-y", strtotime($tgl[14]))?></span></strong></div>
            <?php else:?>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card border-secondary">
                    <div class="card-header list-group-item-secondary d-flex justify-content-between">Mufrodat 9</div>
            <?php endif;?>
                <div class="card-body">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $dasar_9?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- <?php if($dasar_9 == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 9')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 9')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php endif;?> -->
                    <?php if($dasar_9 == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 9')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php elseif($dasar_8 == 100 && $dasar_9 != 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 9')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 9')?>" class="btn btn-block btn-sm btn-secondary disabled"><i class="fa fa-lock mr-1"></i> Belajar</a>
                    <?php endif;?>
                </div>
            </div>
        </div>
        
        <!-- Mudzakkar ke Muannats -->
            <?php if($mm_2 == 100) :?>
                <div class="col-12 col-md-4 mb-3 hide">
                    <div class="card border-success">
                    <div class="card-header list-group-item-success d-flex justify-content-between"><span class="arab">مُذَكَّرٌ وَ مُؤَنَّثٌ جُزْءٌ ٢</span> <strong><span><?= date("H:i d-m-y", strtotime($tgl[15]))?></span></strong></div>
            <?php else:?>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card border-secondary">
                    <div class="card-header list-group-item-secondary d-flex justify-content-between arab">مُذَكَّرٌ وَ مُؤَنَّثٌ جُزْءٌ ٢</div>
            <?php endif;?>
                <div class="card-body">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $mm_2?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <?php if($mm_2 == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Muannats Mudzakkar 2')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php elseif($dasar_9 == 100 && $mm_2 != 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Muannats Mudzakkar 2')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Muannats Mudzakkar 2')?>" class="btn btn-block btn-sm btn-secondary disabled"><i class="fa fa-lock mr-1"></i> Belajar</a>
                    <?php endif;?>
                </div>
            </div>
        </div>

        <!-- Kalimat 2 -->
            <?php if($k2 == 100) :?>
                <div class="col-12 col-md-4 mb-3 hide">
                    <div class="card border-success">
                    <div class="card-header list-group-item-success d-flex justify-content-between">Kalimat 2 <strong><span><?= date("H:i d-m-y", strtotime($tgl[16]))?></span></strong></div>
            <?php else:?>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card border-secondary">
                    <div class="card-header list-group-item-secondary d-flex justify-content-between">Kalimat 2</div>
            <?php endif;?>
                <div class="card-body">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $k2?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <?php if($k2 == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Kalimat 2')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php elseif($mm_2 == 100 && $k2 != 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Kalimat 2')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Kalimat 2')?>" class="btn btn-block btn-sm btn-secondary disabled"><i class="fa fa-lock mr-1"></i> Belajar</a>
                    <?php endif;?>
                </div>
            </div>
        </div>

        <!-- Mufrodat 10 -->
            <?php if($dasar_10 == 100) :?>
                <div class="col-12 col-md-4 mb-3 hide">
                    <div class="card border-success">
                    <div class="card-header list-group-item-success d-flex justify-content-between">Mufrodat 10 <strong><span><?= date("H:i d-m-y", strtotime($tgl[17]))?></span></strong></div>
            <?php else:?>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card border-secondary">
                    <div class="card-header list-group-item-secondary d-flex justify-content-between">Mufrodat 10</div>
            <?php endif;?>
                <div class="card-body">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $dasar_10?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <?php if($dasar_10 == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 10')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php elseif($k2 == 100 && $dasar_10 != 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 10')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 10')?>" class="btn btn-block btn-sm btn-secondary disabled"><i class="fa fa-lock mr-1"></i> Belajar</a>
                    <?php endif;?>
                </div>
            </div>
        </div>

        <!-- Mufrodat 11 -->
            <?php if($dasar_11 == 100) :?>
                <div class="col-12 col-md-4 mb-3 hide">
                    <div class="card border-success">
                    <div class="card-header list-group-item-success d-flex justify-content-between">Mufrodat 11 <strong><span><?= date("H:i d-m-y", strtotime($tgl[18]))?></span></strong></div>
            <?php else:?>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card border-secondary">
                    <div class="card-header list-group-item-secondary d-flex justify-content-between">Mufrodat 11</div>
            <?php endif;?>
                <div class="card-body">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $dasar_11?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <?php if($dasar_11 == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 11')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php elseif($dasar_10 == 100 && $dasar_11 != 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 11')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 11')?>" class="btn btn-block btn-sm btn-secondary disabled"><i class="fa fa-lock mr-1"></i> Belajar</a>
                    <?php endif;?>
                </div>
            </div>
        </div>

        <!-- Kalimat 3 -->
            <?php if($k3 == 100) :?>
                <div class="col-12 col-md-4 mb-3 hide">
                    <div class="card border-success">
                    <div class="card-header list-group-item-success d-flex justify-content-between">Kalimat 3 <strong><span><?= date("H:i d-m-y", strtotime($tgl[19]))?></span></strong></div>
            <?php else:?>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card border-secondary">
                    <div class="card-header list-group-item-secondary d-flex justify-content-between">Kalimat 3</div>
            <?php endif;?>
                <div class="card-body">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $k3?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <?php if($k3 == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Kalimat 3')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php elseif($dasar_11 == 100 && $k3 != 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Kalimat 3')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Kalimat 3')?>" class="btn btn-block btn-sm btn-secondary disabled"><i class="fa fa-lock mr-1"></i> Belajar</a>
                    <?php endif;?>
                </div>
            </div>
        </div>

        <!-- Mufrodat 12 -->
            <?php if($dasar_12 == 100) :?>
                <div class="col-12 col-md-4 mb-3 hide">
                    <div class="card border-success">
                    <div class="card-header list-group-item-success d-flex justify-content-between">Mufrodat 12 <strong><span><?= date("H:i d-m-y", strtotime($tgl[20]))?></span></strong></div>
            <?php else:?>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card border-secondary">
                    <div class="card-header list-group-item-secondary d-flex justify-content-between">Mufrodat 12</div>
            <?php endif;?>
                <div class="card-body">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $dasar_12?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <?php if($dasar_12 == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 12')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php elseif($k3 == 100 && $dasar_12 != 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 12')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 12')?>" class="btn btn-block btn-sm btn-secondary disabled"><i class="fa fa-lock mr-1"></i> Belajar</a>
                    <?php endif;?>
                </div>
            </div>
        </div>
        
        <!-- Mufrodat 13 -->
            <?php if($dasar_13 == 100) :?>
                <div class="col-12 col-md-4 mb-3 hide">
                    <div class="card border-success">
                    <div class="card-header list-group-item-success d-flex justify-content-between">Mufrodat 13 <strong><span><?= date("H:i d-m-y", strtotime($tgl[21]))?></span></strong></div>
            <?php else:?>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card border-secondary">
                    <div class="card-header list-group-item-secondary d-flex justify-content-between">Mufrodat 13</div>
            <?php endif;?>
                <div class="card-body">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $dasar_13?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <?php if($dasar_13 == 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 13')?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php elseif($dasar_12 == 100 && $dasar_13 != 100) :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 13')?>" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-book mr-1"></i> Belajar</a>
                    <?php else :?>
                        <a href="<?= base_url()?>pelajaran?id=<?= MD5('Mufrodat 13')?>" class="btn btn-block btn-sm btn-secondary disabled"><i class="fa fa-lock mr-1"></i> Belajar</a>
                    <?php endif;?>
                </div>
            </div>
        </div>
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