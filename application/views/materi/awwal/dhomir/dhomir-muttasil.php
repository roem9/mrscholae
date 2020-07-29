<?php
    $option = [
        "هُ",
        "هُمَا",
        "هُمْ",
        "هَا",
        "هُنَّ",
        "كَ",
        "كُمَا",
        "كُمْ",
        "كِ",
        "كُنَّ",
        "يْ",
        "نَا"
    ];

    shuffle($option);
?>
      <div class="container" id="container-content">
        <div class="row">
            <div class="col-12 mb-2">
                <a href="<?= base_url()?>awwal/dhomir" class="btn btn-sm btn-success"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
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
                    <li class="list-group-item list-group-item-danger d-flex justify-content-between">Definisi</li>
                    <li class="list-group-item" id="baku">Dhomir Muttasil adalah kata ganti atau dhomir yang bersambung dengan isim, fi'il, ataupun huruf</li>
                </ul>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="kata">Bersambung Dengan?</label>
                    <select name="kata" id="kata" class="form-control form-control-sm">
                        <option value="dasar">Pilih</option>
                        <option value="fiil">Fi'il</option>
                        <option value="isim">Isim</option>
                        <option value="huruf">Huruf</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row" id="dasar">
            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between">Kata Ganti Orang Ketiga <span>ضَمِيْرٌ غَائِبٌ</span></li>
                    <li class="list-group-item list-group-item-primary d-flex justify-content-between">Jenis Laki-laki <span>مُذَكَّرٌ</span></li>
                    <li class="list-group-item d-flex justify-content-between">هُ<span>هُوَ</span></li>
                    <li class="list-group-item d-flex justify-content-between">هُمَا <span>هُمَا</span></li>
                    <li class="list-group-item d-flex justify-content-between">هُمْ <span>هُمْ</span></li>
                </ul>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between">Kata Ganti Orang Ketiga <span>ضَمِيْرٌ غَائِبٌ</span></li>
                    <li class="list-group-item list-group-item-primary d-flex justify-content-between">Jenis Perempuan <span>مُؤَنَّثٌ</span></li>
                    <li class="list-group-item d-flex justify-content-between">هَا <span>هِيَ</span></li>
                    <li class="list-group-item d-flex justify-content-between">هُمَا <span>هُمَا</span></li>
                    <li class="list-group-item d-flex justify-content-between">هُنَّ <span>هُنَّ</span></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between">Kata Ganti Orang Kedua <span>ضَمِيْرٌ مُخَاطَبٌ</span></li>
                    <li class="list-group-item list-group-item-primary d-flex justify-content-between">Jenis Laki-laki <span>مُذَكَّرٌ</span></li>
                    <li class="list-group-item d-flex justify-content-between">كَ <span>أَنْتَ</span></li>
                    <li class="list-group-item d-flex justify-content-between">كُمَا <span>أَنْتُمَا</span></li>
                    <li class="list-group-item d-flex justify-content-between">كُمْ <span>أَنْتُمْ</span></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between">Kata Ganti Orang Kedua <span>ضَمِيْرٌ مُخَاطَبٌ</span></li>
                    <li class="list-group-item list-group-item-primary d-flex justify-content-between">Jenis Perempuan <span>مُؤَنَّثٌ</span></li>
                    <li class="list-group-item d-flex justify-content-between">كِ <span>أَنْتِ</span></li>
                    <li class="list-group-item d-flex justify-content-between">كُمَا <span>أَنْتُمَا</span></li>
                    <li class="list-group-item d-flex justify-content-between">كُنَّ <span>أَنْتُنَّ</span></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between">Kata Ganti Orang Pertama <span>ضَمِيْرٌ مُتَكَلِّمٌ</span></li>
                    <li class="list-group-item list-group-item-primary d-flex justify-content-between">Jenis Perempuan / Laki-laki</li>
                    <li class="list-group-item d-flex justify-content-between">يْ <span>أَنَا</span></li>
                    <li class="list-group-item d-flex justify-content-between">نَا <span>نَحْنُ</span></li>
                </ul>
            </div>
        </div>

        <div class="row" id="isim">
            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between">Kata Ganti Orang Ketiga <span>ضَمِيْرٌ غَائِبٌ</span></li>
                    <li class="list-group-item list-group-item-primary d-flex justify-content-between">Jenis Laki-laki <span>مُذَكَّرٌ</span></li>
                    <li class="list-group-item d-flex justify-content-between">كِـتَابُهُ<span>هُوَ</span></li>
                    <li class="list-group-item d-flex justify-content-between">كِـتَابُهُمَا <span>هُمَا</span></li>
                    <li class="list-group-item d-flex justify-content-between">كِـتَابُهُمْ <span>هُمْ</span></li>
                </ul>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between">Kata Ganti Orang Ketiga <span>ضَمِيْرٌ غَائِبٌ</span></li>
                    <li class="list-group-item list-group-item-primary d-flex justify-content-between">Jenis Perempuan <span>مُؤَنَّثٌ</span></li>
                    <li class="list-group-item d-flex justify-content-between">كِـتَابُهَا <span>هِيَ</span></li>
                    <li class="list-group-item d-flex justify-content-between">كِـتَابُهُمَا <span>هُمَا</span></li>
                    <li class="list-group-item d-flex justify-content-between">كِـتَابُهُنَّ <span>هُنَّ</span></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between">Kata Ganti Orang Kedua <span>ضَمِيْرٌ مُخَاطَبٌ</span></li>
                    <li class="list-group-item list-group-item-primary d-flex justify-content-between">Jenis Laki-laki <span>مُذَكَّرٌ</span></li>
                    <li class="list-group-item d-flex justify-content-between">كِـتَابُكَ <span>أَنْتَ</span></li>
                    <li class="list-group-item d-flex justify-content-between">كِـتَابُكُمَا <span>أَنْتُمَا</span></li>
                    <li class="list-group-item d-flex justify-content-between">كِـتَابُكُمْ <span>أَنْتُمْ</span></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between">Kata Ganti Orang Kedua <span>ضَمِيْرٌ مُخَاطَبٌ</span></li>
                    <li class="list-group-item list-group-item-primary d-flex justify-content-between">Jenis Perempuan <span>مُؤَنَّثٌ</span></li>
                    <li class="list-group-item d-flex justify-content-between">كِـتَابُكِ <span>أَنْتِ</span></li>
                    <li class="list-group-item d-flex justify-content-between">كِـتَابُكُمَا <span>أَنْتُمَا</span></li>
                    <li class="list-group-item d-flex justify-content-between">كِـتَابُكُنَّ <span>أَنْتُنَّ</span></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between">Kata Ganti Orang Pertama <span>ضَمِيْرٌ مُتَكَلِّمٌ</span></li>
                    <li class="list-group-item list-group-item-primary d-flex justify-content-between">Jenis Perempuan / Laki-laki</li>
                    <li class="list-group-item d-flex justify-content-between">كِـتَابِيْ <span>أَنَا</span></li>
                    <li class="list-group-item d-flex justify-content-between">كِـتَابُنَا <span>نَحْنُ</span></li>
                </ul>
            </div>
        </div>
        
        <div class="row" id="fiil">
            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between">Kata Ganti Orang Ketiga <span>ضَمِيْرٌ غَائِبٌ</span></li>
                    <li class="list-group-item list-group-item-primary d-flex justify-content-between">Jenis Laki-laki <span>مُذَكَّرٌ</span></li>
                    <li class="list-group-item d-flex justify-content-between">دَرَسَهُ<span>هُوَ</span></li>
                    <li class="list-group-item d-flex justify-content-between">دَرَسَهُمَا <span>هُمَا</span></li>
                    <li class="list-group-item d-flex justify-content-between">دَرَسَهُمْ <span>هُمْ</span></li>
                </ul>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between">Kata Ganti Orang Ketiga <span>ضَمِيْرٌ غَائِبٌ</span></li>
                    <li class="list-group-item list-group-item-primary d-flex justify-content-between">Jenis Perempuan <span>مُؤَنَّثٌ</span></li>
                    <li class="list-group-item d-flex justify-content-between">دَرَسَهَا <span>هِيَ</span></li>
                    <li class="list-group-item d-flex justify-content-between">دَرَسَهُمَا <span>هُمَا</span></li>
                    <li class="list-group-item d-flex justify-content-between">دَرَسَهُنَّ <span>هُنَّ</span></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between">Kata Ganti Orang Kedua <span>ضَمِيْرٌ مُخَاطَبٌ</span></li>
                    <li class="list-group-item list-group-item-primary d-flex justify-content-between">Jenis Laki-laki <span>مُذَكَّرٌ</span></li>
                    <li class="list-group-item d-flex justify-content-between">دَرَسَكَ <span>أَنْتَ</span></li>
                    <li class="list-group-item d-flex justify-content-between">دَرَسَكُمَا <span>أَنْتُمَا</span></li>
                    <li class="list-group-item d-flex justify-content-between">دَرَسَكُمْ <span>أَنْتُمْ</span></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between">Kata Ganti Orang Kedua <span>ضَمِيْرٌ مُخَاطَبٌ</span></li>
                    <li class="list-group-item list-group-item-primary d-flex justify-content-between">Jenis Perempuan <span>مُؤَنَّثٌ</span></li>
                    <li class="list-group-item d-flex justify-content-between">دَرَسَكِ <span>أَنْتِ</span></li>
                    <li class="list-group-item d-flex justify-content-between">دَرَسَكُمَا <span>أَنْتُمَا</span></li>
                    <li class="list-group-item d-flex justify-content-between">دَرَسَكُنَّ <span>أَنْتُنَّ</span></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between">Kata Ganti Orang Pertama <span>ضَمِيْرٌ مُتَكَلِّمٌ</span></li>
                    <li class="list-group-item list-group-item-primary d-flex justify-content-between">Jenis Perempuan / Laki-laki</li>
                    <li class="list-group-item d-flex justify-content-between">دَرَسَنِيْ <span>أَنَا</span></li>
                    <li class="list-group-item d-flex justify-content-between">دَرَسَنَا <span>نَحْنُ</span></li>
                </ul>
            </div>
        </div>
        
        <div class="row" id="huruf">
            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between">Kata Ganti Orang Ketiga <span>ضَمِيْرٌ غَائِبٌ</span></li>
                    <li class="list-group-item list-group-item-primary d-flex justify-content-between">Jenis Laki-laki <span>مُذَكَّرٌ</span></li>
                    <li class="list-group-item d-flex justify-content-between">لَـهُ<span>هُوَ</span></li>
                    <li class="list-group-item d-flex justify-content-between">لَـهُمَا <span>هُمَا</span></li>
                    <li class="list-group-item d-flex justify-content-between">لَـهُمْ <span>هُمْ</span></li>
                </ul>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between">Kata Ganti Orang Ketiga <span>ضَمِيْرٌ غَائِبٌ</span></li>
                    <li class="list-group-item list-group-item-primary d-flex justify-content-between">Jenis Perempuan <span>مُؤَنَّثٌ</span></li>
                    <li class="list-group-item d-flex justify-content-between">لَـهَا <span>هِيَ</span></li>
                    <li class="list-group-item d-flex justify-content-between">لَـهُمَا <span>هُمَا</span></li>
                    <li class="list-group-item d-flex justify-content-between">لَـهُنَّ <span>هُنَّ</span></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between">Kata Ganti Orang Kedua <span>ضَمِيْرٌ مُخَاطَبٌ</span></li>
                    <li class="list-group-item list-group-item-primary d-flex justify-content-between">Jenis Laki-laki <span>مُذَكَّرٌ</span></li>
                    <li class="list-group-item d-flex justify-content-between">لَـكَ <span>أَنْتَ</span></li>
                    <li class="list-group-item d-flex justify-content-between">لَـكُمَا <span>أَنْتُمَا</span></li>
                    <li class="list-group-item d-flex justify-content-between">لَـكُمْ <span>أَنْتُمْ</span></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between">Kata Ganti Orang Kedua <span>ضَمِيْرٌ مُخَاطَبٌ</span></li>
                    <li class="list-group-item list-group-item-primary d-flex justify-content-between">Jenis Perempuan <span>مُؤَنَّثٌ</span></li>
                    <li class="list-group-item d-flex justify-content-between">لَـكِ <span>أَنْتِ</span></li>
                    <li class="list-group-item d-flex justify-content-between">لَـكُمَا <span>أَنْتُمَا</span></li>
                    <li class="list-group-item d-flex justify-content-between">لَـكُنَّ <span>أَنْتُنَّ</span></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between">Kata Ganti Orang Pertama <span>ضَمِيْرٌ مُتَكَلِّمٌ</span></li>
                    <li class="list-group-item list-group-item-primary d-flex justify-content-between">Jenis Perempuan / Laki-laki</li>
                    <li class="list-group-item d-flex justify-content-between">لِيْ <span>أَنَا</span></li>
                    <li class="list-group-item d-flex justify-content-between">لَـنَا <span>نَحْنُ</span></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-12 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-warning">Latihan Dhomir Muttashil</li>
                    <li class="list-group-item d-flex justify-content-between">
                        <?php if($latihan) :?>
                            <a href="#modalDhomir" data-toggle="modal" class="modalDhomir btn btn-sm btn-success">Latihan</a>
                            <span class="btn btn-sm"><i class="fa fa-check-circle text-success"></i></span>
                        <?php else :?>
                            <a href="#modalDhomir" data-toggle="modal" class="modalDhomir btn btn-sm btn-danger">Latihan</a>
                            <span class="btn btn-sm"><i class="fa fa-times-circle text-danger"></i></span>
                        <?php endif;?>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 mb-3">
                <a href="<?= base_url('awwal/dhomir')?>" class="btn btn-sm btn-success text-light"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
        </div>
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
                        <h5 class="modal-title" id="modalDhomirLabel">ضَمِيْرٌ مُتَّصِلٌ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url()?>latihan/add_latihan" method="post" id="latihan">
                        <input type="hidden" name="latihan" value="Latihan 2">
                        <input type="hidden" name="mustawa" value="awwal">
                        <input type="hidden" name="materi" value="dhomir">
                        <input type="hidden" name="redirect" value="awwal/dhomir">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="d2">Mereka Berdua (Lk)</label>
                                <select name="d2" id="d2" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="d3">Mereka (Lk)</label>
                                <select name="d3" id="d3" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="d12">Kalian (Pr)</label>
                                <select name="d12" id="d12" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="d5">Mereka Berdua (Pr)</label>
                                <select name="d5" id="d5" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="d10">Kamu (Pr)</label>
                                <select name="d10" id="d10" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="d4">Dia (Pr)</label>
                                <select name="d4" id="d4" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="d7">Kamu (Lk)</label>
                                <select name="d7" id="d7" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="d8">Kalian Berdua (Lk)</label>
                                <select name="d8" id="d8" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="d9">Kalian (Lk)</label>
                                <select name="d9" id="d9" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="d1">Dia (Lk)</label>
                                <select name="d1" id="d1" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="d13">Saya</label>
                                <select name="d13" id="d13" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="d6">Mereka (Pr)</label>
                                <select name="d6" id="d6" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="d14">Kami / Kita</label>
                                <select name="d14" id="d14" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="d11">Kalian Berdua (Pr)</label>
                                <select name="d11" id="d11" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="cek-dhomir btn btn-sm btn-primary">Simpan Jawaban</button>
                            <!-- <a class="cek-dhomir btn btn-sm btn-info text-light">Cek Jawaban</a> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- Modal Dhomir -->
<!-- kumpulan modal -->

<script>
    // modal dhomir
        $(".modalDhomir").click(function(){
            $("#13").val("");
            $("#14").val("");
        })

        $(".cek-dhomir").click(function(){
            if($("#d1").val() == "هُ" && $("#d2").val() == "هُمَا" && $("#d3").val() == "هُمْ" && $("#d4").val() == "هَا" && $("#d5").val() == "هُمَا" && $("#d6").val() == "هُنَّ" && $("#d7").val() == "كَ" && $("#d8").val() == "كُمَا" && $("#d9").val() == "كُمْ" && $("#d10").val() == "كِ" && $("#d11").val() == "كُمَا" && $("#d12").val() == "كُنَّ" && $("#d13").val() == "يْ" && $("#d14").val() == "نَا"){
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
                if($("#d1").val() != "هُ"){
                    $("#d1").val("")
                }
                if($("#d2").val() != "هُمَا"){
                    $("#d2").val("")
                }
                if($("#d3").val() != "هُمْ"){
                    $("#d3").val("")
                }
                if($("#d4").val() != "هَا"){
                    $("#d4").val("")
                }
                if($("#d5").val() != "هُمَا"){
                    $("#d5").val("")
                }
                if($("#d6").val() != "هُنَّ"){
                    $("#d6").val("")
                }
                if($("#d7").val() != "كَ"){
                    $("#d7").val("")
                }
                if($("#d8").val() != "كُمَا"){
                    $("#d8").val("")
                }
                if($("#d9").val() != "كُمْ"){
                    $("#d9").val("")
                }
                if($("#d10").val() != "كِ"){
                    $("#d10").val("")
                }
                if($("#d11").val() != "كُمَا"){
                    $("#d11").val("")
                }
                if($("#d12").val() != "كُنَّ"){
                    $("#d12").val("")
                }
                if($("#d13").val() != "يْ"){
                    $("#d13").val("")
                }
                if($("#d14").val() != "نَا"){
                    $("#d14").val("")
                }

                Swal.fire({
                    icon: 'error',
                    text: 'ada yang salah, coba lagi yaa'
                })

                return false;
            }
        })
    // modal dhomir

    $("#font").change(function(){
        let font = $(this).val();
        $("#container-content").css("font-size", font)
    })

    
    $("#dasar").show();
    $("#isim").hide();
    $("#huruf").hide();
    $("#fiil").hide();

    $("#kata").change(function(){
        let kata = $(this).val();
        if(kata == "dasar"){
            $("#dasar").show();
            $("#isim").hide();
            $("#huruf").hide();
            $("#fiil").hide();
        } else if(kata == "isim"){
            $("#dasar").hide();
            $("#isim").show();
            $("#huruf").hide();
            $("#fiil").hide();
        } else if(kata == "fiil"){
            $("#dasar").hide();
            $("#isim").hide();
            $("#fiil").show();
            $("#huruf").hide();
        } else if(kata == "huruf"){
            $("#dasar").hide();
            $("#isim").hide();
            $("#fiil").hide();
            $("#huruf").show();
        }
    })
</script>
