<?php
    $option = [
        "هُوَ",
        "هُمَا",
        "هُمْ",
        "هِيَ",
        "هُنَّ",
        "أَنْتَ",
        "أَنْتُمَا",
        "أَنْتُمْ",
        "أَنْتِ",
        "أَنْتُنَّ",
        "أَنَا",
        "نَحْنُ"
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
                    <li class="list-group-item list-group-item-danger d-flex justify-content-between">Pengantar</li>
                    <li class="list-group-item" id="baku">Kata ganti atau dhomir. Bahasa Arab memiliki keistimewaan dalam penggunaan kata ganti (dhomir). Setiap kelompok/orang memiliki penggunaan kata ganti (dhomir) yang berbeda, disesuaikan dengan jumlah (sendiri, berdua dan bertiga/lebih), jenis perempuan (muannats) dan jenis laki-laki (mudzakkar).</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between">Kata Ganti Orang Ketiga <span>ضَمِيْرٌ غَائِبٌ</span></li>
                    <li class="list-group-item list-group-item-primary d-flex justify-content-between">Jenis Laki-laki <span>مُذَكَّرٌ</span></li>
                    <li class="list-group-item d-flex justify-content-between">Dia(Lk) <span>هُوَ</span></li>
                    <li class="list-group-item d-flex justify-content-between">Mereka berdua(Lk) <span>هُمَا</span></li>
                    <li class="list-group-item d-flex justify-content-between">Mereka(Lk) <span>هُمْ</span></li>
                </ul>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between">Kata Ganti Orang Ketiga <span>ضَمِيْرٌ غَائِبٌ</span></li>
                    <li class="list-group-item list-group-item-primary d-flex justify-content-between">Jenis Perempuan <span>مُؤَنَّثٌ</span></li>
                    <li class="list-group-item d-flex justify-content-between">Dia(Pr) <span>هِيَ</span></li>
                    <li class="list-group-item d-flex justify-content-between">Mereka berdua(Pr) <span>هُمَا</span></li>
                    <li class="list-group-item d-flex justify-content-between">Mereka(Pr) <span>هُنَّ</span></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between">Kata Ganti Orang Kedua <span>ضَمِيْرٌ مُخَاطَبٌ</span></li>
                    <li class="list-group-item list-group-item-primary d-flex justify-content-between">Jenis Laki-laki <span>مُذَكَّرٌ</span></li>
                    <li class="list-group-item d-flex justify-content-between">Kamu(Lk) <span>أَنْتَ</span></li>
                    <li class="list-group-item d-flex justify-content-between">Kalian berdua(Lk) <span>أَنْتُمَا</span></li>
                    <li class="list-group-item d-flex justify-content-between">Kalian (Lk) <span>أَنْتُمْ</span></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between">Kata Ganti Orang Kedua <span>ضَمِيْرٌ مُخَاطَبٌ</span></li>
                    <li class="list-group-item list-group-item-primary d-flex justify-content-between">Jenis Perempuan <span>مُؤَنَّثٌ</span></li>
                    <li class="list-group-item d-flex justify-content-between">Kamu(Pr) <span>أَنْتِ</span></li>
                    <li class="list-group-item d-flex justify-content-between">Kalian berdua(Pr) <span>أَنْتُمَا</span></li>
                    <li class="list-group-item d-flex justify-content-between">Kalian (Pr) <span>أَنْتُنَّ</span></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between">Kata Ganti Orang Pertama <span>ضَمِيْرٌ مُتَكَلِّمٌ</span></li>
                    <li class="list-group-item list-group-item-primary d-flex justify-content-between">Jenis Perempuan / Laki-laki</li>
                    <li class="list-group-item d-flex justify-content-between">Saya <span>أَنَا</span></li>
                    <li class="list-group-item d-flex justify-content-between">Kami/Kita <span>نَحْنُ</span></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-warning">Latihan Dhomir</li>
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
                        <h5 class="modal-title" id="modalDhomirLabel">ضَمِيْرٌ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url()?>latihan/add_latihan" method="post" id="latihan">
                        <input type="hidden" name="latihan" value="Latihan 1">
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
            if($("#d1").val() == "هُوَ" && $("#d2").val() == "هُمَا" && $("#d3").val() == "هُمْ" && $("#d4").val() == "هِيَ" && $("#d5").val() == "هُمَا" && $("#d6").val() == "هُنَّ" && $("#d7").val() == "أَنْتَ" && $("#d8").val() == "أَنْتُمَا" && $("#d9").val() == "أَنْتُمْ" && $("#d10").val() == "أَنْتِ" && $("#d11").val() == "أَنْتُمَا" && $("#d12").val() == "أَنْتُنَّ" && $("#d13").val() == "أَنَا" && $("#d14").val() == "نَحْنُ"){
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
                if($("#d1").val() != "هُوَ"){
                    $("#d1").val("")
                }
                if($("#d2").val() != "هُمَا"){
                    $("#d2").val("")
                }
                if($("#d3").val() != "هُمْ"){
                    $("#d3").val("")
                }
                if($("#d4").val() != "هِيَ"){
                    $("#d4").val("")
                }
                if($("#d5").val() != "هُمَا"){
                    $("#d5").val("")
                }
                if($("#d6").val() != "هُنَّ"){
                    $("#d6").val("")
                }
                if($("#d7").val() != "أَنْتَ"){
                    $("#d7").val("")
                }
                if($("#d8").val() != "أَنْتُمَا"){
                    $("#d8").val("")
                }
                if($("#d9").val() != "أَنْتُمْ"){
                    $("#d9").val("")
                }
                if($("#d10").val() != "أَنْتِ"){
                    $("#d10").val("")
                }
                if($("#d11").val() != "أَنْتُمَا"){
                    $("#d11").val("")
                }
                if($("#d12").val() != "أَنْتُنَّ"){
                    $("#d12").val("")
                }
                if($("#d13").val() != "أَنَا"){
                    $("#d13").val("")
                }
                if($("#d14").val() != "نَحْنُ"){
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
</script>
