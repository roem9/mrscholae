<?php
    // function
        function awal($kata, $awal){
            $text = substr($kata, 0, 2);
            $text = substr($kata, 2);
            $text = $awal . $text;
            return $text;
        }

        function akhir($kata, $akhir){
            $data = strlen($kata);
            $text = substr($kata, 0, $data-2);
            $text = $text . $akhir;
            return $text;
        }

        function huwa($kata){
            return $kata;
        }
        
        function huma_lk($kata){
            $t1 = "ا";
            return $kata . $t1;
        }

        function hum($kata){
            $t1 = "ُوْا";
            return $kata . $t1;
        }

        // hiya dan anta
        function hiya($kata){
            $t1 = "تْ";
            return $kata . $t1;
        }

        // huma pr dan antuma
        function huma_pr($kata){
            $t1 = "تَا";
            return $kata . $t1;
        }

        function hunna($kata){
            $satu = substr($kata, 0, 10);
            $t1 = "ْنَ";
            return $satu . $t1;
        }

        function anta($kata){
            $satu = substr($kata, 0, 10);
            $t1 = "ْتَ";
            return $satu . $t1;
        }
        
        function antuma($kata){
            $satu = substr($kata, 0, 10);
            $t1 = "ْتُمَا";
            return $satu . $t1;
        }
        
        function antum($kata){
            $satu = substr($kata, 0, 10);
            $t1 = "ْتُمْ";
            return $satu . $t1;
        }

        function anti($kata){
            $satu = substr($kata, 0, 10);
            $t1 = "ْتِ";
            return $satu . $t1;
        }

        function antunna($kata){
            $satu = substr($kata, 0, 10);
            $t1 = "ْتُنَّ";
            return $satu . $t1;
        }

        function ana($kata){
            $satu = substr($kata, 0, 10);
            $t1 = "ْتُ";
            return $satu . $t1;
        }
        
        function nahnu($kata){
            $satu = substr($kata, 0, 10);
            $t1 = "ْنَا";
            return $satu . $t1;
        }
    // function

    if(isset($kata)){
        $option = [
            huwa($kata),
            huma_lk($kata),
            hum($kata),
            hiya($kata),
            huma_pr($kata),
            hunna($kata),
            anta($kata),
            antuma($kata),
            antum($kata),
            anti($kata),
            antunna($kata),
            ana($kata),
            nahnu($kata)
        ];
    
        shuffle($option);
    }
?> 
        <div class="container" id="container-content">
        <?php if(isset($kata)):?>
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="form-group">
                        <label for="font">Ukuran Font</label>
                        <select name="font" id="font" class="form-control form-control-sm">
                            <option value="16px">Pilih Ukuran Font</option>
                            <option value="16px">16</option>
                            <option value="18px">18</option>
                            <option value="20px">20</option>
                            <option value="22px">22</option>
                            <option value="24px">24</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-12 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-danger d-flex justify-content-between">Kata</li>
                        <li class="list-group-item"><?= $kata_dasar?></li>
                        <li class="list-group-item"><?= $arti?></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success d-flex justify-content-end">ضَمِيْرٌ غَائِبٌ مُذَكَّرٌ</li>
                        <li class="list-group-item">
                            <table class="table table-sm" border=1>
                                <tr>
                                    <th class="text-center">Pola</th>
                                    <th class="text-center">Akhir</th>
                                    <th class="text-center">Dhomir</th>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= huwa($kata)?></td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">هُوَ</td>
                                </tr>
                                <tr>
                                    <!-- <td class="text-center">يَفْعُلَانِ</td> -->
                                    <td class="text-center"><?= huma_lk($kata)?></td>
                                    <td class="text-center">ـَ انِ</td>
                                    <td class="text-center">هُمَا</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= hum($kata)?></td>
                                    <td class="text-center">ـُ وْنَ</td>
                                    <td class="text-center">هُمْ</td>
                                </tr>
                            </table>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-md-6 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success d-flex justify-content-end">ضَمِيْرٌ غَائِبٌ مُؤَنَّثٌ</li>
                        <li class="list-group-item">
                            <table class="table table-sm" border=1>
                                <tr>
                                    <th class="text-center">Pola</th>
                                    <th class="text-center">Akhir</th>
                                    <th class="text-center">Dhomir</th>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= hiya($kata)?></td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">هِيَ</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= huma_pr($kata)?></td>
                                    <td class="text-center">ـَ انِ</td>
                                    <td class="text-center">هُمَا</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= hunna($kata)?></td>
                                    <td class="text-center">ـْ نَ</td>
                                    <td class="text-center">هُنَّ</td>
                                </tr>
                            </table>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success d-flex justify-content-end"><span>ضَمِيْرٌ مُخَاطَبٌ مُذَكَّرٌ</span></li>
                        <li class="list-group-item">
                            <table class="table table-sm" border=1>
                                <tr>
                                    <th class="text-center">Pola</th>
                                    <th class="text-center">Akhir</th>
                                    <th class="text-center">Dhomir</th>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= anta($kata)?></td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">أَنْتَ</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= antuma($kata)?></td>
                                    <td class="text-center">ـَ انِ</td>
                                    <td class="text-center">أَنْتُمَا</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= antum($kata)?></td>
                                    <td class="text-center">ـُ وْنَ</td>
                                    <td class="text-center">أَنْتُمْ</td>
                                </tr>
                            </table>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success d-flex justify-content-end"><span>ضَمِيْرٌ مُخَاطَبٌ مُؤَنَّثٌ</span></li>
                        <li class="list-group-item">
                            <table class="table table-sm" border=1>
                                <tr>
                                    <th class="text-center">Pola</th>
                                    <th class="text-center">Akhir</th>
                                    <th class="text-center">Dhomir</th>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= anti($kata)?></td>
                                    <td class="text-center">ـِ يْنَ</td>
                                    <td class="text-center">أَنْتِ</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= antuma($kata)?></td>
                                    <td class="text-center">ـَ انِ</td>
                                    <td class="text-center">أَنْتُمَا</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= antunna($kata)?></td>
                                    <td class="text-center">ـْ نَ</td>
                                    <td class="text-center">أَنْتُنَّ</td>
                                </tr>
                            </table>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success d-flex justify-content-end"><span>ضَمِيْرٌ مُتَكَلِّمٌ</span></li>
                        <li class="list-group-item">
                            <table class="table table-sm" border=1>
                                <tr>
                                    <th class="text-center">Pola</th>
                                    <th class="text-center">Akhir</th>
                                    <th class="text-center">Dhomir</th>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= ana($kata)?></td>
                                    <td class="text-center">ـ</td>
                                    <td class="text-center">أَنَا</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= nahnu($kata)?></td>
                                    <td class="text-center">ـ</td>
                                    <td class="text-center">نَحْنُ</td>
                                </tr>
                            </table>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-warning">Latihan Fi'il Madhi</li>
                        <li class="list-group-item d-flex justify-content-between">
                            <?php if($latihan):?>
                                <a href="#modalDhomir" data-toggle="modal" class="modalDhomir btn btn-sm btn-success">Latihan</a>
                                <span class="btn btn-sm"><i class="fa fa-check-circle text-success"></i></span>
                            <?php else:?>
                                <a href="#modalDhomir" data-toggle="modal" class="modalDhomir btn btn-sm btn-danger">Latihan</a>
                                <span class="btn btn-sm"><i class="fa fa-times-circle text-danger"></i></span>
                            <?php endif;?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 mb-3">
                    <a href="<?= base_url()?>tahmidi/fiil/madhi" class="btn btn-sm btn-success"><i class="fa fa-arrow-left"></i> kembali</a>
                </div>
            </div>
        <?php else:?>
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-warning"><i class="fa fa-exclamation-circle text-warning mr-3"></i> terjadi kesalahan kembali ke <a href="<?= base_url()?>fiil/mudhori" class="text-primary">menu utama</a></div>
                </div>
            </div>
        <?php endif;?>
        </div>
    </div>
</div>

<div class="overlay"></div>

<!-- kumpulan modal -->

    <!-- Modal Dhomir -->
        <div class="modal fade" id="modalDhomir" tabindex="-1" role="dialog" aria-labelledby="modalDhomirLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalDhomirLabel"><?= $kata_dasar?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url()?>latihan/add_latihan" method="post" id="latihan">
                        <input type="hidden" name="latihan" value="<?= $latih?>">
                        <input type="hidden" name="materi" value="madhi">
                        <input type="hidden" name="mustawa" value="tahmidi">
                        <input type="hidden" name="redirect" value="tahmidi/fiil/madhi">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="col-12 d-flex justify-content-end p-0">
                                    <label for="d2">هُمَا مُذَكَّرٌ</label>
                                </div>
                                <select name="d2" id="d2" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="col-12 d-flex justify-content-end p-0">
                                    <label for="d4">هِيَ</label>
                                </div>
                                <select name="d4" id="d4" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="col-12 d-flex justify-content-end p-0">
                                    <label for="d3">هُمْ</label>
                                </div>
                                <select name="d3" id="d3" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="col-12 d-flex justify-content-end p-0">
                                    <label for="d1">هُوَ</label>
                                </div>
                                <select name="d1" id="d1" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="col-12 d-flex justify-content-end p-0">
                                    <label for="d5">هُمَا مُؤَنَّثٌ</label>
                                </div>
                                <select name="d5" id="d5" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="col-12 d-flex justify-content-end p-0">
                                    <label for="d12">أَنْتُنَّ</label>
                                </div>
                                <select name="d12" id="d12" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="col-12 d-flex justify-content-end p-0">
                                    <label for="d7">أَنْتَ</label>
                                </div>
                                <select name="d7" id="d7" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="col-12 d-flex justify-content-end p-0">
                                    <label for="d8">أَنْتُمَا</label>
                                </div>
                                <select name="d8" id="d8" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="col-12 d-flex justify-content-end p-0">
                                    <label for="d9">أَنْتُمْ</label>
                                </div>
                                <select name="d9" id="d9" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="col-12 d-flex justify-content-end p-0">
                                    <label for="d10">أَنْتِ</label>
                                </div>
                                <select name="d10" id="d10" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="col-12 d-flex justify-content-end p-0">
                                    <label for="d6">هُنَّ</label>
                                </div>
                                <select name="d6" id="d6" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="col-12 d-flex justify-content-end p-0">
                                    <label for="d14">نَحْنُ</label>
                                </div>
                                <select name="d14" id="d14" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="col-12 d-flex justify-content-end p-0">
                                    <label for="d11">أَنْتُمَا</label>
                                </div>
                                <select name="d11" id="d11" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="col-12 d-flex justify-content-end p-0">
                                    <label for="d13">أَنَا</label>
                                </div>
                                <select name="d13" id="d13" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="cek-dhomir btn btn-sm btn-primary">Simpan Jawaban</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- Modal Dhomir -->
    
<!-- kumpulan modal -->

<script>    
    // modal dhomir
        $(".cek-dhomir").click(function(){
            if($("#d1").val() == "<?= huwa($kata)?>" && $("#d2").val() == "<?= huma_lk($kata)?>" && $("#d3").val() == "<?= hum($kata)?>" && $("#d4").val() == "<?= hiya($kata)?>" && $("#d5").val() == "<?= huma_pr($kata)?>" && $("#d6").val() == "<?= hunna($kata)?>" && $("#d7").val() == "<?= anta($kata)?>" && $("#d8").val() == "<?= antuma($kata)?>" && $("#d9").val() == "<?= antum($kata)?>" && $("#d10").val() == "<?= anti($kata)?>" && $("#d11").val() == "<?= antuma($kata)?>" && $("#d12").val() == "<?= antunna($kata)?>" && $("#d13").val() == "<?= ana($kata)?>" && $("#d14").val() == "<?= nahnu($kata)?>"){
                Swal.fire({
                    text: "!أَحْسَنْتَ",
                    icon: 'success',
                }).then((result) => {
                    if (result.value) {
                        $('#latihan').submit();
                    }
                })
            } else if($("#d1").val() == "" && $("#d2").val() == "" && $("#d3").val() == "" && $("#d4").val() == "" && $("#d5").val() == "" && $("#d6").val() == "" && $("#d7").val() == "" && $("#d8").val() == "" && $("#d9").val() == "" && $("#d10").val() == "" && $("#d11").val() == "" && $("#d12").val() == "" && $("#d13").val() == "" && $("#d14").val() == ""){
                Swal.fire({
                    icon: 'error',
                    text: 'soalnya dijawab dulu yaa'
                })
            } else {
                if($("#d1").val() != "<?= huwa($kata)?>"){
                    $("#d1").val("")
                }
                if($("#d2").val() != "<?= huma_lk($kata)?>"){
                    $("#d2").val("")
                }
                if($("#d3").val() != "<?= hum($kata)?>"){
                    $("#d3").val("")
                }
                if($("#d4").val() != "<?= hiya($kata)?>"){
                    $("#d4").val("")
                }
                if($("#d5").val() != "<?= huma_pr($kata)?>"){
                    $("#d5").val("")
                }
                if($("#d6").val() != "<?= hunna($kata)?>"){
                    $("#d6").val("")
                }
                if($("#d7").val() != "<?= anta($kata)?>"){
                    $("#d7").val("")
                }
                if($("#d8").val() != "<?= antum($kata)?>"){
                    $("#d8").val("")
                }
                if($("#d9").val() != "<?= antum($kata)?>"){
                    $("#d9").val("")
                }
                if($("#d10").val() != "<?= anti($kata)?>"){
                    $("#d10").val("")
                }
                if($("#d11").val() != "<?= antum($kata)?>"){
                    $("#d11").val("")
                }
                if($("#d12").val() != "<?= antunna($kata)?>"){
                    $("#d12").val("")
                }
                if($("#d13").val() != "<?= ana($kata)?>"){
                    $("#d13").val("")
                }
                if($("#d14").val() != "<?= nahnu($kata)?>"){
                    $("#d14").val("")
                }

                Swal.fire({
                    icon: 'error',
                    text: 'ada yang salah, coba lagi yaa'
                })
            }
        })
    // modal dhomir

    $("#font").change(function(){
        let font = $(this).val();
        $("#container-content").css("font-size", font)
    })
</script>
