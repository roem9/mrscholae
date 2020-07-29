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

    if(isset($materi['fiil'])){
        $option = [
            huwa($materi['fiil']). " " . $materi['ket'],
            huma_lk($materi['fiil']). " " . $materi['ket'],
            hum($materi['fiil']). " " . $materi['ket'],
            hiya($materi['fiil']). " " . $materi['ket'],
            huma_pr($materi['fiil']). " " . $materi['ket'],
            hunna($materi['fiil']). " " . $materi['ket'],
            anta($materi['fiil']). " " . $materi['ket'],
            antuma($materi['fiil']). " " . $materi['ket'],
            antum($materi['fiil']). " " . $materi['ket'],
            anti($materi['fiil']). " " . $materi['ket'],
            antunna($materi['fiil']). " " . $materi['ket'],
            ana($materi['fiil']). " " . $materi['ket'],
            nahnu($materi['fiil']). " " . $materi['ket']
        ];
        shuffle($option);
        
        $soal = [
            [
                "dhomir" => "هُوَ",
                "ket" => huwa($materi['fiil']) . " " . $materi['ket']
            ],
            [
                "dhomir" => "هُمَا (مُذَكَّرٌ)",
                "ket" => huma_lk($materi['fiil']) . " " . $materi['ket']
            ],
            [
                "dhomir" => "هُمْ",
                "ket" => hum($materi['fiil']) . " " . $materi['ket']
            ],
            [
                "dhomir" => "هِيَ",
                "ket" => hiya($materi['fiil']) . " " . $materi['ket']
            ],
            [
                "dhomir" => "هُمَا (مُؤَنَّثٌ)",
                "ket" => huma_pr($materi['fiil']) . " " . $materi['ket']
            ],
            [
                "dhomir" => "هُنَّ",
                "ket" => hunna($materi['fiil']) . " " . $materi['ket']
            ],
            [
                "dhomir" => "أَنْتَ",
                "ket" => anta($materi['fiil']) . " " . $materi['ket']
            ],
            [
                "dhomir" => "أَنْتُمَا",
                "ket" => antuma($materi['fiil']) . " " . $materi['ket']
            ],
            [
                "dhomir" => "أَنْتُمْ",
                "ket" => antum($materi['fiil']) . " " . $materi['ket']
            ],
            [
                "dhomir" => "أَنْتِ",
                "ket" => anti($materi['fiil']) . " " . $materi['ket']
            ],
            [
                "dhomir" => "أَنْتُمَا",
                "ket" => antuma($materi['fiil']) . " " . $materi['ket']
            ],
            [
                "dhomir" => "أَنْتُنَّ",
                "ket" => antunna($materi['fiil']) . " " . $materi['ket']
            ],
            [
                "dhomir" => "نَحْنُ",
                "ket" => nahnu($materi['fiil']) . " " . $materi['ket']
            ]
        ];
    }
?>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 mb-3">
                    <a id="backHome" class="btn btn-sm btn-success text-light"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-12 col-md-12 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-danger d-flex justify-content-end">أَكْمِلْ كَمَا فِي النَّمُوْذَج</li>
                    </ul>
                </div>
                <div class="col-12 col-md-12 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-warning d-flex justify-content-end">النَّمُوْذَج</li>
                        <li class="list-group-item d-flex justify-content-end">أَنَا <?= ana($materi['fiil']) . " " . $materi['ket']?></li>
                    </ul>
                </div>
            </div> -->
            <div class="row">
                <?php 
                    $urut = 0;
                    foreach ($materi as $i => $kalimat) :
                    $urut++?>

                    <div class="col-12 col-md-12 mb-3">
                        <div class="form-group">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-end">
                                    أ : <?= $kalimat['soal'];?>
                                </li>
                                <li class="list-group-item d-flex justify-content-end">
                                  <span>ب : نَعَمْ، <span id="j<?=$i?>"></span></span>
                                </li>
                            </ul>
                            <input type="hidden" name="kunci<?=$i?>" value="<?= $kalimat['jawaban']?>">
                            <input type="hidden" name="j<?= $i?>" id="jawaban<?=$i?>">
                            <a id="btnEdit<?=$i?>" class="btn btn-block btn-sm btn-success text-light edit" data-id="<?= $i?>" style="display: none">ubah jawaban</a>
                            
                            <div id="select<?=$i?>">
                                <select name="<?= $i?>1" id="<?= $i?>1" class="form-control form-control-lg mb-2">
                                    <option value="">Pilih Jawaban</option>
                                    <option value="<?= $kalimat['kata'] . 'هُ'?>"><?= $kalimat['kata'] . 'هُ'?></option>
                                    <option value="<?= $kalimat['kata'] . 'هَا'?>"><?= $kalimat['kata'] . 'هَا'?></option>
                                </select>
                                <a class="btn btn-block btn-sm btn-info text-light cek" data-id="<?= $i?>|1">simpan jawaban</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>

            <div class="row">
                <form action="<?= base_url()?>latihan/add_latihan" method="post" id="latihan">
                    <input type="hidden" name="mustawa" value="awwal">
                    <input type="hidden" name="hal" value="s-20">
                    <input type="hidden" name="materi" value="attabir">
                    <input type="hidden" name="latihan" value="<?= $latihan?>">
                    <input type="hidden" name="redirect" value="awwal/ungkapan/s-20">
                </form>
                <div class="col-12 col-md-12 mb-3">
                    <a id="simpanJawaban" data-id="<?= COUNT($materi)?>" class="btn btn-block btn-primary text-light">Simpan</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>

<script>
    $("#simpanJawaban").click(function(){
        let count = $(this).data("id");
        let benar = 1;
        for (let i = 0; i < count; i++) {
            cek = $("input[name='j"+i+"']").val();
            if(cek != 'betul'){
                benar = 0;
            }
        }
        if(benar == 0){
            Swal.fire({
                icon: 'error',
                title: 'oppss',
                text: 'ada soal yang jawabannya salah, cek lagi yaa'
            })
        } else {
            Swal.fire({
                text: "selamat! semua jawabanmu benar",
                icon: 'success',
                confirmButtonText: 'Simpan',
            }).then((result) => {
                if (result.value) {
                    $('#latihan').submit();
                }
            })
        }
    })

    $("#backHome").click(function(){
        Swal.fire({
            icon: 'question',
            text: 'pekerjaan Anda tidak akan tersimpan, yakin akan kembali?',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: '<a href="<?= base_url()?>awwal/ungkapan/s-20">Ya</a>',
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
            html += $("#"+id+""+1).val();
        }
        
        // console.log(html)

        if(html == $("input[name='kunci"+id+"']").val()){
            // Swal.fire({
            //     text: "jawaban Anda telah tersimpan",
            //     icon: 'success',
            // })
            $("#j"+id).html(html);
            $("#jawaban"+id).val("betul");
            $("#select"+id).hide();
            $("#btnEdit"+id).show();

        } else {
            // Swal.fire({
            //     icon: 'success',
            //     text: 'jawaban Anda telah tersimpan'
            // })
            
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
</script>