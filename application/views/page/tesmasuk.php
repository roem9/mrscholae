<?php
    $dhomir = ["أَنَا"];
    $huruf = ["بِ", "فِيْ", "عَلَى", "مِنْ", "مَعَ", "إلَى"];
    
    $fiil1 = ["أَجْلِسُ", "أُطْفِئُ", "أَفْتَحُ", "أُغْلِقُ", "أُعَلِّقُ", "أَنَامُ", "أَضَعُ"];
    $isim1 = ["الْمِصْبَاحَ", "الصَّبَاحِ", "النَّافِذَةَ", "الْبَابَ", "الْجِدَارِ", "اللَّيْلِ", "الْفِرَاشِ", "الْمِفْتَاحِ", "الْمِرْآةَ", "السَّرِيْرِ", "الْفِرَاشَ", "الْبِلَاطَةِ"];

    $fiil2 = ["أَكْتُبُ", "أَذْهَبُ", "أَخْرُجُ", "أَقْرَأُ", "أَدْرُسُ", "أَلْعَبُ", "أَشْرَبُ"];
    $isim2 = ["الْفَصْلِ", "الْمَسْجِدِ", "الْكِتَابَ", "الْمَاءَ", "الْبَيْتِ", "الدَّرْسَ", "الْمَيْدَانِ"];

    $fiil3 = ["أُنَظِّفُ", "أَطْبَخُ", "أُشْعِلُ", "أَطْرُقُ", "أُرَتِّبُ", "أَذْهَبُ","أَكْنُسُ"];
    $isim3 = ["الطَّعَامَ", "الْبَابَ", "السُّوْقِ","الْمِصْبَاحَ", "الْفِرَاشَ", "الْغُرفَةَ", "الْبِلاَطَ"];

    $fiil4 = ["أَجْمَعُ","أَسْقُطُ","أَحْتَرِمُ","أَسْأَلُ","أَرْجِعُ","أَدَّخِرُ","أُعَلِّمُ"];
    $isim4 = ["الزُّبَالَةَ","الْحَمَّامِ","الْبَيْتِ","الطُّلَّابَ","الْمُدَرِّسَ","الْفُلُوْسَ"];

    $fiil5 = ["أُقَسِّمُ","أَلْبِسُ","أَرْكَبُ","اَحْرُقُ","أَسْتَيْقِظُ","آخُذُ","أَطْلُبُ"];
    $isim5 =["الصُّبْحِ","السَّيَّارَةَ","الثَّوْبَ","الْهَدِيَّةَ","الطَّعَامَ","الْخَشَبَ","الْأَصْدِقَاءِ","الطَّعَامَ","الْمَطْبَخِ"];

    $fiil6 = ["اَتَّجِهُ","اَحْفَظُ","اَحْمِلُ","أَتَكَلَّمُ","اَقُصُّ","اَسْمَعُ","اُسَاعِدُ"];
    $isim6 =["الْمُدَرِّسِ","الْمُدَرِّسَ","الْقُرْآنَ","السَّبُّوْرَةِ","الْمَسْجِدِ","الْقِصَّةَ","الدَّرْسَ","الصَّوْتَ"];

?>
        <div class="container">
            <?php if( $this->session->flashdata('pesan') ) : ?>
                <div class="row">
                    <div class="col-12">
                        <?=$this->session->flashdata('pesan')?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-12 col-md-12 mb-3">
                    <ul class="list-group" id="teman">
                        <li class="list-group-item list-group-item-danger d-flex justify-content-between">Tes Masuk</li>
                    </ul>
                </div>
            </div>
            <div id="mufrodat1">
                <?php 
                    $urut = 0;
                    foreach ($kalimat1 as $i => $kalimat) :
                    $urut++?>

                    <div class="col-12 col-md-12 mb-3">
                        <div class="form-group">
                            <label for="<?=$i?>"><?= $urut?>. <?= $kalimat['kalimat']?></label>
                            <input type="hidden" name="kunci<?=$i?>" value="<?= $kalimat['arab']?>">
                            <input type="hidden" name="j<?= $i?>" id="jawaban<?=$i?>">
                            <h5 class="text-right" id="j<?=$i?>"></h5>
                            <a id="btnEdit<?=$i?>" class="btn btn-block btn-sm btn-success text-light edit" data-id="<?= $i?>" style="display: none">ubah jawaban</a>
                            
                            <div id="select<?=$i?>">
                                <?php foreach ($kalimat['kata'] as $x => $kata) :?>
                                    <?php if($kata['jenis'] == 'huruf'):?>
                                        <select name="<?= $i.$x?>" id="<?= $i.$x?>" class="form-control form-control-lg mb-2">
                                            <option value="">Pilih Jawaban</option>
                                            <?php foreach ($huruf as $data) :?>
                                                <option value="<?= $data?>"><?= $data?></option>
                                            <?php endforeach;?>
                                        </select>
                                    <?php elseif($kata['jenis'] == 'fiil'):?>
                                        <select name="<?= $i.$x?>" id="<?= $i.$x?>" class="form-control form-control-lg mb-2">
                                            <option value="">Pilih Jawaban</option>
                                            <?php foreach ($fiil1 as $data) :?>
                                                <option value="<?= $data?>"><?= $data?></option>
                                            <?php endforeach;?>
                                        </select>
                                    <?php elseif($kata['jenis'] == 'dhomir'):?>
                                        <select name="<?= $i.$x?>" id="<?= $i.$x?>" class="form-control form-control-lg mb-2">
                                            <option value="">Pilih Jawaban</option>
                                            <?php foreach ($dhomir as $data) :?>
                                                <option value="<?= $data?>"><?= $data?></option>
                                            <?php endforeach;?>
                                        </select>
                                    <?php elseif($kata['jenis'] == 'isim'):?>
                                        <select name="<?= $i.$x?>" id="<?= $i.$x?>" class="form-control form-control-lg mb-2">
                                            <option value="">Pilih Jawaban</option>
                                            <?php foreach ($isim1 as $data) :?>
                                                <option value="<?= $data?>"><?= $data?></option>
                                            <?php endforeach;?>
                                        </select>
                                    <?php endif;?>
                                <?php endforeach;?>
                                <a class="btn btn-block btn-sm btn-info text-light cek" data-id="<?= $i?>|<?= COUNT($kalimat['kata'])?>">simpan jawaban</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
                
                <div class="d-flex justify-content-end">
                    <a href="#" id="nextMufrodat1" class="btn btn-sm btn-success text-light"><i class="fa fa-arrow-right"></i> Next</a>
                </div>
            </div>
            
            <div id="mufrodat2">
                <?php foreach ($kalimat2 as $kalimat) :
                    $urut++;
                    $i++;
                    ?>

                    <div class="col-12 col-md-12 mb-3">
                        <div class="form-group">
                            <label for="<?=$i?>"><?= $urut?>. <?= $kalimat['kalimat']?></label>
                            <input type="hidden" name="kunci<?=$i?>" value="<?= $kalimat['arab']?>">
                            <input type="hidden" name="j<?= $i?>" id="jawaban<?=$i?>">
                            <h5 class="text-right" id="j<?=$i?>"></h5>
                            <a id="btnEdit<?=$i?>" class="btn btn-block btn-sm btn-success text-light edit" data-id="<?= $i?>" style="display: none">ubah jawaban</a>
                            
                            <div id="select<?=$i?>">
                                <?php foreach ($kalimat['kata'] as $x => $kata) :?>
                                    <?php if($kata['jenis'] == 'huruf'):?>
                                        <select name="<?= $i.$x?>" id="<?= $i.$x?>" class="form-control form-control-lg mb-2">
                                            <option value="">Pilih Jawaban</option>
                                            <?php foreach ($huruf as $data) :?>
                                                <option value="<?= $data?>"><?= $data?></option>
                                            <?php endforeach;?>
                                        </select>
                                    <?php elseif($kata['jenis'] == 'fiil'):?>
                                        <select name="<?= $i.$x?>" id="<?= $i.$x?>" class="form-control form-control-lg mb-2">
                                            <option value="">Pilih Jawaban</option>
                                            <?php foreach ($fiil2 as $data) :?>
                                                <option value="<?= $data?>"><?= $data?></option>
                                            <?php endforeach;?>
                                        </select>
                                    <?php elseif($kata['jenis'] == 'dhomir'):?>
                                        <select name="<?= $i.$x?>" id="<?= $i.$x?>" class="form-control form-control-lg mb-2">
                                            <option value="">Pilih Jawaban</option>
                                            <?php foreach ($dhomir as $data) :?>
                                                <option value="<?= $data?>"><?= $data?></option>
                                            <?php endforeach;?>
                                        </select>
                                    <?php elseif($kata['jenis'] == 'isim'):?>
                                        <select name="<?= $i.$x?>" id="<?= $i.$x?>" class="form-control form-control-lg mb-2">
                                            <option value="">Pilih Jawaban</option>
                                            <?php foreach ($isim2 as $data) :?>
                                                <option value="<?= $data?>"><?= $data?></option>
                                            <?php endforeach;?>
                                        </select>
                                    <?php endif;?>
                                <?php endforeach;?>
                                <a class="btn btn-block btn-sm btn-info text-light cek" data-id="<?= $i?>|<?= COUNT($kalimat['kata'])?>">simpan jawaban</a>
                            </div>
                        </div>
                    </div>

                <?php endforeach;?>
                
                <div class="d-flex justify-content-between">
                    <a href="#" id="backMufrodat2" class="btn btn-sm btn-success text-light"><i class="fa fa-arrow-left"></i> back</a>
                    <a href="#" id="nextMufrodat2" class="btn btn-sm btn-success text-light"><i class="fa fa-arrow-right"></i> Next</a>
                </div>
            </div>
            
            <div id="mufrodat3">
                <?php foreach ($kalimat3 as $kalimat) :
                    $urut++;
                    $i++;
                    ?>

                    <div class="col-12 col-md-12 mb-3">
                        <div class="form-group">
                            <label for="<?=$i?>"><?= $urut?>. <?= $kalimat['kalimat']?></label>
                            <input type="hidden" name="kunci<?=$i?>" value="<?= $kalimat['arab']?>">
                            <input type="hidden" name="j<?= $i?>" id="jawaban<?=$i?>">
                            <h5 class="text-right" id="j<?=$i?>"></h5>
                            <a id="btnEdit<?=$i?>" class="btn btn-block btn-sm btn-success text-light edit" data-id="<?= $i?>" style="display: none">ubah jawaban</a>
                            
                            <div id="select<?=$i?>">
                                <?php foreach ($kalimat['kata'] as $x => $kata) :?>
                                    <?php if($kata['jenis'] == 'huruf'):?>
                                        <select name="<?= $i.$x?>" id="<?= $i.$x?>" class="form-control form-control-lg mb-2">
                                            <option value="">Pilih Jawaban</option>
                                            <?php foreach ($huruf as $data) :?>
                                                <option value="<?= $data?>"><?= $data?></option>
                                            <?php endforeach;?>
                                        </select>
                                    <?php elseif($kata['jenis'] == 'fiil'):?>
                                        <select name="<?= $i.$x?>" id="<?= $i.$x?>" class="form-control form-control-lg mb-2">
                                            <option value="">Pilih Jawaban</option>
                                            <?php foreach ($fiil3 as $data) :?>
                                                <option value="<?= $data?>"><?= $data?></option>
                                            <?php endforeach;?>
                                        </select>
                                    <?php elseif($kata['jenis'] == 'dhomir'):?>
                                        <select name="<?= $i.$x?>" id="<?= $i.$x?>" class="form-control form-control-lg mb-2">
                                            <option value="">Pilih Jawaban</option>
                                            <?php foreach ($dhomir as $data) :?>
                                                <option value="<?= $data?>"><?= $data?></option>
                                            <?php endforeach;?>
                                        </select>
                                    <?php elseif($kata['jenis'] == 'isim'):?>
                                        <select name="<?= $i.$x?>" id="<?= $i.$x?>" class="form-control form-control-lg mb-2">
                                            <option value="">Pilih Jawaban</option>
                                            <?php foreach ($isim3 as $data) :?>
                                                <option value="<?= $data?>"><?= $data?></option>
                                            <?php endforeach;?>
                                        </select>
                                    <?php endif;?>
                                <?php endforeach;?>
                                <a class="btn btn-block btn-sm btn-info text-light cek" data-id="<?= $i?>|<?= COUNT($kalimat['kata'])?>">simpan jawaban</a>
                            </div>
                        </div>
                    </div>

                <?php endforeach;?>
                
                <div class="d-flex justify-content-between">
                    <a href="#" id="backMufrodat3" class="btn btn-sm btn-success text-light"><i class="fa fa-arrow-left"></i> back</a>
                    <a href="#" id="nextMufrodat3" class="btn btn-sm btn-success text-light"><i class="fa fa-arrow-right"></i> Next</a>
                </div>
            </div>
            
            <div id="mufrodat4">
                <?php foreach ($kalimat4 as $kalimat) :
                    $urut++;
                    $i++;
                    ?>

                    <div class="col-12 col-md-12 mb-3">
                        <div class="form-group">
                            <label for="<?=$i?>"><?= $urut?>. <?= $kalimat['kalimat']?></label>
                            <input type="hidden" name="kunci<?=$i?>" value="<?= $kalimat['arab']?>">
                            <input type="hidden" name="j<?= $i?>" id="jawaban<?=$i?>">
                            <h5 class="text-right" id="j<?=$i?>"></h5>
                            <a id="btnEdit<?=$i?>" class="btn btn-block btn-sm btn-success text-light edit" data-id="<?= $i?>" style="display: none">ubah jawaban</a>
                            
                            <div id="select<?=$i?>">
                                <?php foreach ($kalimat['kata'] as $x => $kata) :?>
                                    <?php if($kata['jenis'] == 'huruf'):?>
                                        <select name="<?= $i.$x?>" id="<?= $i.$x?>" class="form-control form-control-lg mb-2">
                                            <option value="">Pilih Jawaban</option>
                                            <?php foreach ($huruf as $data) :?>
                                                <option value="<?= $data?>"><?= $data?></option>
                                            <?php endforeach;?>
                                        </select>
                                    <?php elseif($kata['jenis'] == 'fiil'):?>
                                        <select name="<?= $i.$x?>" id="<?= $i.$x?>" class="form-control form-control-lg mb-2">
                                            <option value="">Pilih Jawaban</option>
                                            <?php foreach ($fiil4 as $data) :?>
                                                <option value="<?= $data?>"><?= $data?></option>
                                            <?php endforeach;?>
                                        </select>
                                    <?php elseif($kata['jenis'] == 'dhomir'):?>
                                        <select name="<?= $i.$x?>" id="<?= $i.$x?>" class="form-control form-control-lg mb-2">
                                            <option value="">Pilih Jawaban</option>
                                            <?php foreach ($dhomir as $data) :?>
                                                <option value="<?= $data?>"><?= $data?></option>
                                            <?php endforeach;?>
                                        </select>
                                    <?php elseif($kata['jenis'] == 'isim'):?>
                                        <select name="<?= $i.$x?>" id="<?= $i.$x?>" class="form-control form-control-lg mb-2">
                                            <option value="">Pilih Jawaban</option>
                                            <?php foreach ($isim4 as $data) :?>
                                                <option value="<?= $data?>"><?= $data?></option>
                                            <?php endforeach;?>
                                        </select>
                                    <?php endif;?>
                                <?php endforeach;?>
                                <a class="btn btn-block btn-sm btn-info text-light cek" data-id="<?= $i?>|<?= COUNT($kalimat['kata'])?>">simpan jawaban</a>
                            </div>
                        </div>
                    </div>

                <?php endforeach;?>
                
                <div class="d-flex justify-content-between">
                    <a href="#" id="backMufrodat4" class="btn btn-sm btn-success text-light"><i class="fa fa-arrow-left"></i> back</a>
                    <a href="#" id="nextMufrodat4" class="btn btn-sm btn-success text-light"><i class="fa fa-arrow-right"></i> Next</a>
                </div>
            </div>
            
            <div id="mufrodat5">
                <?php foreach ($kalimat5 as $kalimat) :
                    $urut++;
                    $i++;
                    ?>

                    <div class="col-12 col-md-12 mb-3">
                        <div class="form-group">
                            <label for="<?=$i?>"><?= $urut?>. <?= $kalimat['kalimat']?></label>
                            <input type="hidden" name="kunci<?=$i?>" value="<?= $kalimat['arab']?>">
                            <input type="hidden" name="j<?= $i?>" id="jawaban<?=$i?>">
                            <h5 class="text-right" id="j<?=$i?>"></h5>
                            <a id="btnEdit<?=$i?>" class="btn btn-block btn-sm btn-success text-light edit" data-id="<?= $i?>" style="display: none">ubah jawaban</a>
                            
                            <div id="select<?=$i?>">
                                <?php foreach ($kalimat['kata'] as $x => $kata) :?>
                                    <?php if($kata['jenis'] == 'huruf'):?>
                                        <select name="<?= $i.$x?>" id="<?= $i.$x?>" class="form-control form-control-lg mb-2">
                                            <option value="">Pilih Jawaban</option>
                                            <?php foreach ($huruf as $data) :?>
                                                <option value="<?= $data?>"><?= $data?></option>
                                            <?php endforeach;?>
                                        </select>
                                    <?php elseif($kata['jenis'] == 'fiil'):?>
                                        <select name="<?= $i.$x?>" id="<?= $i.$x?>" class="form-control form-control-lg mb-2">
                                            <option value="">Pilih Jawaban</option>
                                            <?php foreach ($fiil5 as $data) :?>
                                                <option value="<?= $data?>"><?= $data?></option>
                                            <?php endforeach;?>
                                        </select>
                                    <?php elseif($kata['jenis'] == 'dhomir'):?>
                                        <select name="<?= $i.$x?>" id="<?= $i.$x?>" class="form-control form-control-lg mb-2">
                                            <option value="">Pilih Jawaban</option>
                                            <?php foreach ($dhomir as $data) :?>
                                                <option value="<?= $data?>"><?= $data?></option>
                                            <?php endforeach;?>
                                        </select>
                                    <?php elseif($kata['jenis'] == 'isim'):?>
                                        <select name="<?= $i.$x?>" id="<?= $i.$x?>" class="form-control form-control-lg mb-2">
                                            <option value="">Pilih Jawaban</option>
                                            <?php foreach ($isim5 as $data) :?>
                                                <option value="<?= $data?>"><?= $data?></option>
                                            <?php endforeach;?>
                                        </select>
                                    <?php endif;?>
                                <?php endforeach;?>
                                <a class="btn btn-block btn-sm btn-info text-light cek" data-id="<?= $i?>|<?= COUNT($kalimat['kata'])?>">simpan jawaban</a>
                            </div>
                        </div>
                    </div>

                <?php endforeach;?>
                
                <div class="d-flex justify-content-between">
                    <a href="#" id="backMufrodat5" class="btn btn-sm btn-success text-light"><i class="fa fa-arrow-left"></i> back</a>
                    <a href="#" id="nextMufrodat5" class="btn btn-sm btn-success text-light"><i class="fa fa-arrow-right"></i> Next</a>
                </div>
            </div>
            
            <div id="mufrodat6">
                <?php foreach ($kalimat6 as $kalimat) :
                    $urut++;
                    $i++;
                    ?>

                    <div class="col-12 col-md-12 mb-3">
                        <div class="form-group">
                            <label for="<?=$i?>"><?= $urut?>. <?= $kalimat['kalimat']?></label>
                            <input type="hidden" name="kunci<?=$i?>" value="<?= $kalimat['arab']?>">
                            <input type="hidden" name="j<?= $i?>" id="jawaban<?=$i?>">
                            <h5 class="text-right" id="j<?=$i?>"></h5>
                            <a id="btnEdit<?=$i?>" class="btn btn-block btn-sm btn-success text-light edit" data-id="<?= $i?>" style="display: none">ubah jawaban</a>
                            
                            <div id="select<?=$i?>">
                                <?php foreach ($kalimat['kata'] as $x => $kata) :?>
                                    <?php if($kata['jenis'] == 'huruf'):?>
                                        <select name="<?= $i.$x?>" id="<?= $i.$x?>" class="form-control form-control-lg mb-2">
                                            <option value="">Pilih Jawaban</option>
                                            <?php foreach ($huruf as $data) :?>
                                                <option value="<?= $data?>"><?= $data?></option>
                                            <?php endforeach;?>
                                        </select>
                                    <?php elseif($kata['jenis'] == 'fiil'):?>
                                        <select name="<?= $i.$x?>" id="<?= $i.$x?>" class="form-control form-control-lg mb-2">
                                            <option value="">Pilih Jawaban</option>
                                            <?php foreach ($fiil6 as $data) :?>
                                                <option value="<?= $data?>"><?= $data?></option>
                                            <?php endforeach;?>
                                        </select>
                                    <?php elseif($kata['jenis'] == 'dhomir'):?>
                                        <select name="<?= $i.$x?>" id="<?= $i.$x?>" class="form-control form-control-lg mb-2">
                                            <option value="">Pilih Jawaban</option>
                                            <?php foreach ($dhomir as $data) :?>
                                                <option value="<?= $data?>"><?= $data?></option>
                                            <?php endforeach;?>
                                        </select>
                                    <?php elseif($kata['jenis'] == 'isim'):?>
                                        <select name="<?= $i.$x?>" id="<?= $i.$x?>" class="form-control form-control-lg mb-2">
                                            <option value="">Pilih Jawaban</option>
                                            <?php foreach ($isim6 as $data) :?>
                                                <option value="<?= $data?>"><?= $data?></option>
                                            <?php endforeach;?>
                                        </select>
                                    <?php endif;?>
                                <?php endforeach;?>
                                <a class="btn btn-block btn-sm btn-info text-light cek" data-id="<?= $i?>|<?= COUNT($kalimat['kata'])?>">simpan jawaban</a>
                            </div>
                        </div>
                    </div>

                <?php endforeach;?>
                
                <div class="d-flex justify-content-between">
                    <a href="#" id="backMufrodat6" class="btn btn-sm btn-success text-light"><i class="fa fa-arrow-left"></i> back</a>
                    <a href="#" id="simpanJawaban" data-id="<?= COUNT($kalimat1) + COUNT($kalimat2) + COUNT($kalimat3) + COUNT($kalimat4) + COUNT($kalimat5) + COUNT($kalimat6)?>" class="btn btn-sm btn-primary text-light">Cek Jawaban</a>
                </div>
            </div>

            <div class="row">
                <form action="<?= base_url()?>Tes/formpendaftaran" method="post" id="latihan">
                    <input type="hidden" name="hasil" value="lulus">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>

<script>
    $("#simpanJawaban").click(function(){
        let count = $(this).data("id");
        let benar = 0
        for (let i = 0; i < count; i++) {
            cek = $("input[name='j"+i+"']").val();
            if(cek == 'betul'){
                benar++;
            }
        }
        let nilai = benar * 2.5;

        if(nilai >= 80){
            Swal.fire({
                title: ""+nilai,
                text: "selamat! Anda lulus",
                icon: 'success',
                showCancelButton: true,
                cancelButtonText: 'Nanti Saja',
                confirmButtonText: 'Daftar Sekarang',
            }).then((result) => {
                if (result.value) {
                    $('#latihan').submit();
                }
            })
        } else {
            Swal.fire({
                title: ""+nilai,
                text: "maaf! nilai Anda belum mencukupi. silahkan memperbaiki kembali jawaban Anda",
                icon: 'error',
                confirmButtonText: 'Simpan',
            })
        }
    })

    $("#backHome").click(function(){
        Swal.fire({
            icon: 'question',
            text: 'pekerjaan Anda tidak akan tersimpan, yakin akan kembali?',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: '<a href="<?= base_url()?>level1/materi/keempat">Ya</a>',
            cancelButtonText: 'Tidak'
        })
    })

    $(".cek").click(function(){
        let data = $(this).data("id");
        data = data.split("|");
        let id = data[0];
        let total = data[1];

        let html = '';
        for (let i = 0; i < total; i++) {
            if(i == total-1 || $("#"+id+""+i).val() == "بِ"){
                html += $("#"+id+""+i).val();
            } else {
                html += $("#"+id+""+i).val()+' ';
            }
        }
        
        console.log(html)

        if(html == $("input[name='kunci"+id+"']").val()){
            Swal.fire({
                text: "jawaban Anda telah tersimpan",
                icon: 'success',
            })
            $("#j"+id).html(html);
            $("#jawaban"+id).val("betul");
            $("#select"+id).hide();
            $("#btnEdit"+id).show();

        } else {
            Swal.fire({
                icon: 'success',
                text: 'jawaban Anda telah tersimpan'
            })
            
            $("#j"+id).html(html);
            $("#jawaban"+id).val("salah");
            $("#select"+id).hide();
            $("#btnEdit"+id).show();
        }
    })

    $(".edit").click(function(){
        let id = $(this).data("id");

        $("#btnEdit"+id).hide();
        $("#j"+id).html("");
        $("#jawaban"+id).val("");
        $("#select"+id).show();
    });

    
    $("#mufrodat1").show();
    $("#mufrodat2").hide();
    $("#mufrodat3").hide();
    $("#mufrodat4").hide();
    $("#mufrodat5").hide();
    $("#mufrodat6").hide();

    $("#backMufrodat2").click(function(){
        $("#mufrodat1").show();
        $("#mufrodat2").hide();
        $("#mufrodat3").hide();
        $("#mufrodat4").hide();
        $("#mufrodat5").hide();
        $("#mufrodat6").hide();
    })

    $("#nextMufrodat1, #backMufrodat3").click(function(){
        $("#mufrodat1").hide();
        $("#mufrodat2").show();
        $("#mufrodat3").hide();
        $("#mufrodat4").hide();
        $("#mufrodat5").hide();
        $("#mufrodat6").hide();
    })

    $("#nextMufrodat2, #backMufrodat4").click(function(){
        $("#mufrodat1").hide();
        $("#mufrodat2").hide();
        $("#mufrodat3").show();
        $("#mufrodat4").hide();
        $("#mufrodat5").hide();
        $("#mufrodat6").hide();
    })

    $("#nextMufrodat3, #backMufrodat5").click(function(){
        $("#mufrodat1").hide();
        $("#mufrodat2").hide();
        $("#mufrodat3").hide();
        $("#mufrodat4").show();
        $("#mufrodat5").hide();
        $("#mufrodat6").hide();
    })
    
    $("#nextMufrodat4, #backMufrodat6").click(function(){
        $("#mufrodat1").hide();
        $("#mufrodat2").hide();
        $("#mufrodat3").hide();
        $("#mufrodat4").hide();
        $("#mufrodat5").show();
        $("#mufrodat6").hide();
    })
    
    $("#nextMufrodat5").click(function(){
        $("#mufrodat1").hide();
        $("#mufrodat2").hide();
        $("#mufrodat3").hide();
        $("#mufrodat4").hide();
        $("#mufrodat5").hide();
        $("#mufrodat6").show();
    })

</script>