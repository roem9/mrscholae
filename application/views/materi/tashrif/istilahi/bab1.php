<?php
    function amr($kata){
        $data = substr($kata, 4, 10);
        if(substr($kata, 10, 2) != "ُ"){
            $data = "اِ" . $data . "ْ";
        } else {
            $data = "اُ" . $data . "ْ";
        }
        return $data;
    }

    function masdar($kata){
        $satu = substr($kata, 0, 6);
        $t1 = "ْ";
        $dua = substr($kata, 8, 2);
        $t2 = "ًا";
        $data = $satu . $t1 . $dua . $t2;
        return $data;
    }

    function fail($kata){
        $satu = substr($kata, 0, 4);
        $t1 = "ا";
        $dua = substr($kata, 4, 2);
        $t2 = "ِ";
        $tiga = substr($kata, 8, 2);
        $t3 = "ٌ";
        $data = $satu . $t1 . $dua . $t2 . $tiga . $t3;
        return $data;
    }

    // dari mudhori
    function maful($kata){
        $t1 = "مَ";
        $satu = substr($kata, 4, 8);
        $t2 = "وْ";
        $dua = substr($kata, 12, 2);
        $t3 = "ٌ";
        $data = $t1 . $satu . $t2 . $dua . $t3;
        return $data;
    }

    // dari maful
    function zaman($kata){
        $satu = substr($kata, 0, 10);
        $t1 = "َ";
        $dua = substr($kata, 16, 4);
        $data = $satu . $t1 . $dua;
        return $data;
    }

    // fiil mahmuz
    function amr_mahmuz($kata){
        $satu = substr($kata, 8, 6);
        $t1 = "ْ";
        $data = $satu . $t1;
        return $data;
    }

    function fail_mahmuz($kata){
        $t1 = "آ";
        $satu = substr(fail($kata), 6);
        $data = $t1 . $satu;
        return $data;
    }

    // fiil mudhoaf
    function amr_mudhoaf($kata){
        $satu = substr($kata, 4, 8);
        $t1 = "َ";
        $data = $satu . $t1;
        return $data;
    }

    function masdar_mudhoaf($kata){
        $satu = substr($kata, 0, 8);
        $t1 = "ًا";
        $data = $satu . $t1;
        return $data;
    }
?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="bahasa">Pilih Bahasa</label>
                        <select name="bahasa" id="bahasa" class="form-control">
                            <option value="">Pilih Bahasa</option>
                            <option value="Baku" selected>Bahasa Baku</option>
                            <option value="Teman">Bahasa Teman</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-3">
                    <ul class="list-group" id="wazan">
                        <li class="list-group-item list-group-item-info d-flex justify-content-end"><b>الوزن</b></li>
                        <li class="list-group-item">
                            <?php 
                                $madhi = "فَعَلَ";
                                $mudhori = "يَفْعُلُ";
                            ?>
                            <table class="table table-sm" style="font-size: 20px; width: 100%" border=1>
                                <tr>
                                    <td class="text-center"><?= $madhi?></td>
                                    <td class="text-right">الفعل الماضى</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= $mudhori?></td>
                                    <td class="text-right">الفعل المضارع</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= amr($mudhori)?></td>
                                    <td class="text-right">الفعل الأمر</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= masdar($madhi)?></td>
                                    <td class="text-right">المصدر</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= fail($madhi)?></td>
                                    <td class="text-right">اسم الفاعل</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= maful($mudhori)?></td>
                                    <td class="text-right">اسم المفعول</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= zaman(maful($mudhori))?></td>
                                    <td class="text-right">اسم الزمان</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= zaman(maful($mudhori))?></td>
                                    <td class="text-right">اسم المكان</td>
                                </tr>
                            </table>
                        </li>
                    </ul>
                    <ul class="list-group" id="shohih_salim">
                        <li class="list-group-item list-group-item-info d-flex justify-content-end"><b>الصحيح السالم</b></li>
                        <li class="list-group-item">
                            <?php 
                                $madhi = "نَصَرَ";
                                $mudhori = "يَنْصُرُ";
                            ?>
                            <table class="table table-sm" style="font-size: 20px; width: 100%" border=1>
                                <tr>
                                    <td class="text-center"><?= $madhi?></td>
                                    <td class="text-right">الفعل الماضى</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= $mudhori?></td>
                                    <td class="text-right">الفعل المضارع</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= amr($mudhori)?></td>
                                    <td class="text-right">الفعل الأمر</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= masdar($madhi)?></td>
                                    <td class="text-right">المصدر</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= fail($madhi)?></td>
                                    <td class="text-right">اسم الفاعل</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= maful($mudhori)?></td>
                                    <td class="text-right">اسم المفعول</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= zaman(maful($mudhori))?></td>
                                    <td class="text-right">اسم الزمان</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= zaman(maful($mudhori))?></td>
                                    <td class="text-right">اسم المكان</td>
                                </tr>
                            </table>
                        </li>
                    </ul>
                    
                    <ul class="list-group" id="shohih_mahmuz">
                        <li class="list-group-item list-group-item-info d-flex justify-content-end"><b>الصحيح المهموز</b></li>
                        <li class="list-group-item">
                            <?php 
                                $madhi = "أَمَرَ";
                                $mudhori = "يَأْمُرُ";
                            ?>
                            <table class="table table-sm" style="font-size: 20px; width: 100%" border=1>
                                <tr>
                                    <td class="text-center"><?= $madhi?></td>
                                    <td class="text-right">الفعل الماضى</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= $mudhori?></td>
                                    <td class="text-right">الفعل المضارع</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= amr_mahmuz($mudhori)?></td>
                                    <td class="text-right">الفعل الأمر</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= masdar($madhi)?></td>
                                    <td class="text-right">المصدر</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= fail_mahmuz($madhi)?></td>
                                    <td class="text-right">اسم الفاعل</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= maful($mudhori)?></td>
                                    <td class="text-right">اسم المفعول</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= zaman(maful($mudhori))?></td>
                                    <td class="text-right">اسم الزمان</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= zaman(maful($mudhori))?></td>
                                    <td class="text-right">اسم المكان</td>
                                </tr>
                            </table>
                        </li>
                    </ul>
                    
                    <ul class="list-group" id="shohih_mudhoaf">
                        <li class="list-group-item list-group-item-info d-flex justify-content-end"><b>الصحيح المضعف</b></li>
                        <li class="list-group-item">
                            <?php 
                                $madhi = "مَدَّ";
                                $mudhori = "يَمُدُّ";
                            ?>
                            <table class="table table-sm" style="font-size: 20px; width: 100%" border=1>
                                <tr>
                                    <td class="text-center"><?= $madhi?></td>
                                    <td class="text-right">الفعل الماضى</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= $mudhori?></td>
                                    <td class="text-right">الفعل المضارع</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= amr_mudhoaf($mudhori)?></td>
                                    <td class="text-right">الفعل الأمر</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= masdar_mudhoaf($madhi)?></td>
                                    <td class="text-right">المصدر</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= fail_mahmuz($madhi)?></td>
                                    <td class="text-right">اسم الفاعل</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= maful($mudhori)?></td>
                                    <td class="text-right">اسم المفعول</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= zaman(maful($mudhori))?></td>
                                    <td class="text-right">اسم الزمان</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= zaman(maful($mudhori))?></td>
                                    <td class="text-right">اسم المكان</td>
                                </tr>
                            </table>
                        </li>
                    </ul>
                </div>
        </div>
    </div>
</div>

<div class="overlay"></div>

<!-- kumpulan modal -->
    
    <!-- Modal Tiga Mudzakkar -->
        <div class="modal fade" id="modalTigaMudzakkar" tabindex="-1" role="dialog" aria-labelledby="modalTigaMudzakkarLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTigaMudzakkarLabel">يَفْعُلُ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="col-12 d-flex justify-content-end p-0">
                                <label for="1">هُوَ</label>
                            </div>
                            <textarea name="1" id="1" class="form-control form-control-sm" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="col-12 d-flex justify-content-end p-0">
                                <label for="2">هُمَا</label>
                            </div>
                            <textarea name="2" id="2" class="form-control form-control-sm" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="col-12 d-flex justify-content-end p-0">
                                <label for="3">هُمْ</label>
                            </div>
                            <textarea name="3" id="3" class="form-control form-control-sm" rows="1"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary">close</button> -->
                        <a class="cek-tiga-mudzakkar btn btn-sm btn-info text-light">Cek Jawaban</a>
                    </div>
                </div>
            </div>
        </div>
    <!-- Modal Tiga Mudzakkar -->
    
    <!-- Modal Tiga Muannats -->
        <div class="modal fade" id="modalTigaMuannats" tabindex="-1" role="dialog" aria-labelledby="modalTigaMuannatsLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTigaMuannatsLabel">يَفْعُلُ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="col-12 d-flex justify-content-end p-0">
                                <label for="4">هِيَ</label>
                            </div>
                            <textarea name="4" id="4" class="form-control form-control-sm" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="col-12 d-flex justify-content-end p-0">
                                <label for="5">هُمَا</label>
                            </div>
                            <textarea name="5" id="5" class="form-control form-control-sm" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="col-12 d-flex justify-content-end p-0">
                                <label for="6">هُنَّ</label>
                            </div>
                            <textarea name="6" id="6" class="form-control form-control-sm" rows="1"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary">close</button> -->
                        <a class="cek-tiga-muannats btn btn-sm btn-info text-light">Cek Jawaban</a>
                    </div>
                </div>
            </div>
        </div>
    <!-- Modal Tiga Muannats -->
    
    <!-- Modal Dua Mudzakkar -->
        <div class="modal fade" id="modalDuaMudzakkar" tabindex="-1" role="dialog" aria-labelledby="modalDuaMudzakkarLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalDuaMudzakkarLabel">يَفْعُلُ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="col-12 d-flex justify-content-end p-0">
                                <label for="7">أَنْتَ</label>
                            </div>
                            <textarea name="7" id="7" class="form-control form-control-sm" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="col-12 d-flex justify-content-end p-0">
                                <label for="8">أَنْتُمَا</label>
                            </div>
                            <textarea name="8" id="8" class="form-control form-control-sm" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="col-12 d-flex justify-content-end p-0">
                                <label for="9">أَنْتُمْ</label>
                            </div>
                            <textarea name="9" id="9" class="form-control form-control-sm" rows="1"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary">close</button> -->
                        <a class="cek-dua-mudzakkar btn btn-sm btn-info text-light">Cek Jawaban</a>
                    </div>
                </div>
            </div>
        </div>
    <!-- Modal Dua Mudzakkar -->
    
    <!-- Modal Dua Muannats -->
        <div class="modal fade" id="modalDuaMuannats" tabindex="-1" role="dialog" aria-labelledby="modalDuaMuannatsLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalDuaMuannatsLabel">يَفْعُلُ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="col-12 d-flex justify-content-end p-0">
                                <label for="10">أَنْتِ</label>
                            </div>
                            <textarea name="10" id="10" class="form-control form-control-sm" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="col-12 d-flex justify-content-end p-0">
                                <label for="11">أَنْتُمَا</label>
                            </div>
                            <textarea name="11" id="11" class="form-control form-control-sm" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="col-12 d-flex justify-content-end p-0">
                                <label for="12">أَنْتُنَّ</label>
                            </div>
                            <textarea name="12" id="12" class="form-control form-control-sm" rows="1"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary">close</button> -->
                        <a class="cek-dua-muannats btn btn-sm btn-info text-light">Cek Jawaban</a>
                    </div>
                </div>
            </div>
        </div>
    <!-- Modal Dua Muannats -->
    
    <!-- Modal Satu -->
        <div class="modal fade" id="modalSatu" tabindex="-1" role="dialog" aria-labelledby="modalSatuLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalSatuLabel">يَفْعُلُ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="col-12 d-flex justify-content-end p-0">
                                <label for="13">أَنَا</label>
                            </div>
                            <textarea name="13" id="13" class="form-control form-control-sm" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="col-12 d-flex justify-content-end p-0">
                                <label for="14">نَحْنُ</label>
                            </div>
                            <textarea name="14" id="14" class="form-control form-control-sm" rows="1"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary">close</button> -->
                        <a class="cek-satu btn btn-sm btn-info text-light">Cek Jawaban</a>
                    </div>
                </div>
            </div>
        </div>
    <!-- Modal Satu -->

    <!-- Modal Dhomir -->
        <div class="modal fade" id="modalDhomir" tabindex="-1" role="dialog" aria-labelledby="modalDhomirLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalDhomirLabel">يَفْعُلُ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url()?>latihan/latihan2" method="post" id="latihan">
                        <input type="hidden" name="latihan" value="Latihan 2">
                        <input type="hidden" name="id_materi" value="2">
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
    // bahasa
        $("#teman").hide();
        $("#baku").show();
        $("#bahasa").change(function(){
            let value = $(this).val();
            if(value == "Baku"){
                $("#teman").hide();
                $("#baku").show();
            } else if(value == "Teman"){
                $("#teman").show();
                $("#baku").hide();
            }
        })
    // bahasa
    
    // modal tiga mudzakkar
        $(".modalTigaMudzakkar").click(function(){
            $("#1").val("");
            $("#2").val("");
            $("#3").val("");
        })

        $(".cek-tiga-mudzakkar").click(function(){
            if($("#1").val() == "يَفْعُلُ" && $("#2").val() == "يَفْعُلَانِ" && $("#3").val() == "يَفْعُلُوْنَ"){
                Swal.fire({
                    icon: 'success',
                    text: '!أَحْسَنْتَ'
                })
            } else if($("#1").val() == "" || $("#2").val() == "" || $("#3").val() == ""){
                Swal.fire({
                    icon: 'error',
                    text: 'soalnya dijawab dulu yaa'
                })
            } else {
                if($("#1").val() != "يَفْعُلُ"){
                    $("#1").val("")
                }
                if($("#2").val() != "يَفْعُلَانِ"){
                    $("#2").val("")
                }
                if($("#3").val() != "يَفْعُلُوْنَ"){
                    $("#3").val("")
                }
                Swal.fire({
                    icon: 'error',
                    text: 'ada yang salah, coba lagi yaa'
                })
            }
        })
    // modal tiga mudzakkar
    
    // modal tiga muannats
        $(".modalTigaMuannats").click(function(){
            $("#4").val("");
            $("#5").val("");
            $("#6").val("");
        })

        $(".cek-tiga-muannats").click(function(){
            if($("#4").val() == "تَفْعُلُ" && $("#5").val() == "تَفْعُلَانِ" && $("#6").val() == "يَفْعُلْنَ"){
                Swal.fire({
                    icon: 'success',
                    text: '!أَحْسَنْتَ'
                })
            } else if($("#4").val() == "" || $("#5").val() == "" || $("#6").val() == ""){
                Swal.fire({
                    icon: 'error',
                    text: 'soalnya dijawab dulu yaa'
                })
            } else {
                if($("#4").val() != "تَفْعُلُ"){
                    $("#4").val("")
                }
                if($("#5").val() != "تَفْعُلَانِ"){
                    $("#5").val("")
                }
                if($("#6").val() != "يَفْعُلْنَ"){
                    $("#6").val("")
                }
                Swal.fire({
                    icon: 'error',
                    text: 'ada yang salah, coba lagi yaa'
                })
            }
        })
    // modal tiga muannats
    
    // modal dua mudzakkar
        $(".modalDuaMudzakkar").click(function(){
            $("#7").val("");
            $("#8").val("");
            $("#9").val("");
        })

        $(".cek-dua-mudzakkar").click(function(){
            if($("#7").val() == "تَفْعُلُ" && $("#8").val() == "تَفْعُلَانِ" && $("#9").val() == "تَفْعُلُوْنَ"){
                Swal.fire({
                    icon: 'success',
                    text: '!أَحْسَنْتَ'
                })
            } else if($("#7").val() == "" || $("#8").val() == "" || $("#9").val() == ""){
                Swal.fire({
                    icon: 'error',
                    text: 'soalnya dijawab dulu yaa'
                })
            } else {
                if($("#7").val() != "تَفْعُلُ"){
                    $("#7").val("")
                }
                if($("#8").val() != "تَفْعُلَانِ"){
                    $("#8").val("")
                }
                if($("#9").val() != "تَفْعُلُوْنَ"){
                    $("#9").val("")
                }
                Swal.fire({
                    icon: 'error',
                    text: 'ada yang salah, coba lagi yaa'
                })
            }
        })
    // modal dua mudzakkar
    
    // modal dua muannats
        $(".modalDuaMuannats").click(function(){
            $("#10").val("");
            $("#11").val("");
            $("#12").val("");
        })

        $(".cek-dua-muannats").click(function(){
            if($("#10").val() == "تَفْعُلِيْنَ" && $("#11").val() == "تَفْعُلَانِ" && $("#12").val() == "تَفْعُلْنَ"){
                Swal.fire({
                    icon: 'success',
                    text: '!أَحْسَنْتَ'
                })
            } else if($("#10").val() == "" || $("#11").val() == "" || $("#12").val() == ""){
                Swal.fire({
                    icon: 'error',
                    text: 'soalnya dijawab dulu yaa'
                })
            } else {
                if($("#10").val() != "تَفْعُلِيْنَ"){
                    $("#10").val("")
                }
                if($("#11").val() != "تَفْعُلَانِ"){
                    $("#11").val("")
                }
                if($("#12").val() != "تَفْعُلْنَ"){
                    $("#12").val("")
                }
                Swal.fire({
                    icon: 'error',
                    text: 'ada yang salah, coba lagi yaa'
                })
            }
        })
    // modal dua muannats
    
    // modal satu
        $(".modalSatu").click(function(){
            $("#13").val("");
            $("#14").val("");
        })

        $(".cek-satu").click(function(){
            if($("#13").val() == "أَفْعُلُ" && $("#14").val() == "نَفْعُلُ"){
                Swal.fire({
                    icon: 'success',
                    text: '!أَحْسَنْتَ'
                })
            } else if($("#13").val() == "" || $("#14").val() == ""){
                Swal.fire({
                    icon: 'error',
                    text: 'soalnya dijawab dulu yaa'
                })
            } else {
                if($("#13").val() != "أَفْعُلُ"){
                    $("#13").val("")
                }
                if($("#14").val() != "نَفْعُلُ"){
                    $("#14").val("")
                }

                Swal.fire({
                    icon: 'error',
                    text: 'ada yang salah, coba lagi yaa'
                })
            }
        })
    // modal satu
    
    // modal dhomir
        $(".modalDhomir").click(function(){
            $("#13").val("");
            $("#14").val("");
        })

        $(".cek-dhomir").click(function(){
            if($("#d1").val() == "يَفْعُلُ" && $("#d2").val() == "يَفْعُلَانِ" && $("#d3").val() == "يَفْعُلُوْنَ" && $("#d4").val() == "تَفْعُلُ" && $("#d5").val() == "تَفْعُلَانِ" && $("#d6").val() == "يَفْعُلْنَ" && $("#d7").val() == "تَفْعُلُ" && $("#d8").val() == "تَفْعُلَانِ" && $("#d9").val() == "تَفْعُلُوْنَ" && $("#d10").val() == "تَفْعُلِيْنَ" && $("#d11").val() == "تَفْعُلَانِ" && $("#d12").val() == "تَفْعُلْنَ" && $("#d13").val() == "أَفْعُلُ" && $("#d14").val() == "نَفْعُلُ"){
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
                if($("#d1").val() != "يَفْعُلُ"){
                    $("#d1").val("")
                }
                if($("#d2").val() != "يَفْعُلَانِ"){
                    $("#d2").val("")
                }
                if($("#d3").val() != "يَفْعُلُوْنَ"){
                    $("#d3").val("")
                }
                if($("#d4").val() != "تَفْعُلُ"){
                    $("#d4").val("")
                }
                if($("#d5").val() != "تَفْعُلَانِ"){
                    $("#d5").val("")
                }
                if($("#d6").val() != "يَفْعُلْنَ"){
                    $("#d6").val("")
                }
                if($("#d7").val() != "تَفْعُلُ"){
                    $("#d7").val("")
                }
                if($("#d8").val() != "تَفْعُلَانِ"){
                    $("#d8").val("")
                }
                if($("#d9").val() != "تَفْعُلُوْنَ"){
                    $("#d9").val("")
                }
                if($("#d10").val() != "تَفْعُلِيْنَ"){
                    $("#d10").val("")
                }
                if($("#d11").val() != "تَفْعُلَانِ"){
                    $("#d11").val("")
                }
                if($("#d12").val() != "تَفْعُلْنَ"){
                    $("#d12").val("")
                }
                if($("#d13").val() != "أَفْعُلُ"){
                    $("#d13").val("")
                }
                if($("#d14").val() != "نَفْعُلُ"){
                    $("#d14").val("")
                }

                Swal.fire({
                    icon: 'error',
                    text: 'ada yang salah, coba lagi yaa'
                })
            }
        })
    // modal dhomir
    
    $("#backHome").click(function(){
        Swal.fire({
            icon: 'question',
            text: 'yakin akan kembali ke menu utama?',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: '<a href="<?= base_url()?>level1">Ya</a>',
            cancelButtonText: 'Tidak'
        })
    })
</script>
