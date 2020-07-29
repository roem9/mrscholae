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
        return "هُوَ " . $kata;
    }
    
    function huma_lk($kata){
        $t1 = "ا";
        return "هُمَا (مُذَكَّرٌ) " . $kata . $t1;
    }

    function hum($kata){
        $t1 = "ُوْا";
        return "هُمْ " . $kata . $t1;
    }

    // hiya dan anta
    function hiya($kata){
        $t1 = "تْ";
        return "هِيَ " . $kata . $t1;
    }

    // huma pr dan antuma
    function huma_pr($kata){
        $t1 = "تَا";
        return "هُمَا (مُؤَنَّثٌ) " . $kata . $t1;
    }

    function hunna($kata){
        $satu = substr($kata, 0, 10);
        $t1 = "ْنَ";
        return "هُنَّ " . $satu . $t1;
    }

    function anta($kata){
        $satu = substr($kata, 0, 10);
        $t1 = "ْتَ";
        return "أَنْتَ " . $satu . $t1;
    }
    
    function antuma($kata){
        $satu = substr($kata, 0, 10);
        $t1 = "ْتُمَا";
        return "أَنْتُمَا " . $satu . $t1;
    }
    
    function antum($kata){
        $satu = substr($kata, 0, 10);
        $t1 = "ْتُمْ";
        return "أَنْتُمْ " . $satu . $t1;
    }

    function anti($kata){
        $satu = substr($kata, 0, 10);
        $t1 = "ْتِ";
        return "أَنْتِ " . $satu . $t1;
    }

    function antunna($kata){
        $satu = substr($kata, 0, 10);
        $t1 = "ْتُنَّ";
        return "أَنْتُنَّ " . $satu . $t1;
    }

    function ana($kata){
        $satu = substr($kata, 0, 10);
        $t1 = "ْتُ";
        return "أَنَا " . $satu . $t1;
    }
    
    function nahnu($kata){
        $satu = substr($kata, 0, 10);
        $t1 = "ْنَا";
        return "نَحْنُ " . $satu . $t1;
    }
// function

if(isset($materi['fiil'])){
    $option = [
        [
            "arti" => "Dia (lk) telah menghafal pelajaran",
            "kata" => huwa($materi['fiil'])
        ],
        [
            "arti" => "Dia berdua (lk) telah menghafal pelajaran",
            "kata" => huma_lk($materi['fiil'])
        ],
        [
            "arti" => "Mereka (lk) telah menghafal pelajaran",
            "kata" => hum($materi['fiil'])
        ],
        [
            "arti" => "Dia (pr) telah menghafal pelajaran",
            "kata" => hiya($materi['fiil'])
        ],
        [
            "arti" => "Dia berdua (pr) telah menghafal pelajaran",
            "kata" => huma_pr($materi['fiil'])
        ],
        [
            "arti" => "Mereka (pr) telah menghafal pelajaran",
            "kata" => hunna($materi['fiil'])
        ],
        [
            "arti" => "Kamu (lk) telah menghafal pelajaran",
            "kata" => anta($materi['fiil'])
        ],
        [
            "arti" => "Kalian berdua (lk) telah menghafal pelajaran",
            "kata" => antuma($materi['fiil'])
        ],
        [
            "arti" => "Kalian (lk) telah menghafal pelajaran",
            "kata" => antum($materi['fiil'])
        ],
        [
            "arti" => "Kamu (pr) telah menghafal pelajaran",
            "kata" => anti($materi['fiil'])
        ],
        [
            "arti" => "Kalian berdua (pr) telah menghafal pelajaran",
            "kata" => antuma($materi['fiil'])
        ],
        [
            "arti" => "Kalian (pr) telah menghafal pelajaran",
            "kata" => antunna($materi['fiil'])
        ],
        [
            "arti" => "Saya telah menghafal pelajaran",
            "kata" => ana($materi['fiil'])
        ],
        [
            "arti" => "Kami telah menghafal pelajaran",
            "kata" => nahnu($materi['fiil'])
        ]
    ];
    // shuffle($option);
}
?>
<div class="container">
        <div class="row">
            <div class="col-12 col-md-12 mb-3">
                <a href="<?= base_url()?>awwal/ungkapan" class="btn btn-sm btn-success text-light"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-12">
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
            <div class="col-12 mb-2">
                <?php if(!empty($message)):?>
                    <?= $message;?>
                <?php endif;?>
            </div>
        </div>
        <div class="row d-flex justify-content-end" id="container-content">
            <?php foreach ($option as $option) :?>
                <div class="col-12 col-md-4 mb-2">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between">
                            <a class="" data-container="body" data-toggle="popover" data-placement="top" data-content="<?= $option['arti']?>">
                                <i class="fa fa-info-circle text-info fa-lg"></i>
                            </a>
                            <?= $option['kata'] . " " . $materi['ket']?>
                        </li>
                    </ul>
                </div>
            <?php endforeach;?>
        </div>
        
        <div class="row">
            <div class="col-12">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-warning">Latihan</li>
                    <li class="list-group-item">
                        <form action="<?= base_url()?>awwal/ungkapan/s-19/latihan" method="post">
                            <input type="hidden" name="latihan" value="Latihan 1">
                            <input type="hidden" name="fiil" value="فَتَحَ">
                            <input type="hidden" name="ket" value="الْبَابَ">
                            <?php if($latihan1):?>
                                <input type="submit" value="Latihan 1" class="btn btn-sm btn-block btn-success">
                            <?php else:?>
                                <input type="submit" value="Latihan 1" class="btn btn-sm btn-block btn-danger">
                            <?php endif;?>
                        </form>
                    </li>
                    <li class="list-group-item">
                        <form action="<?= base_url()?>awwal/ungkapan/s-19/latihan" method="post">
                            <input type="hidden" name="latihan" value="Latihan 2">
                            <input type="hidden" name="fiil" value="كَتَبَ">
                            <input type="hidden" name="ket" value="الدَّرْسَ">
                            <?php if($latihan2):?>
                                <input type="submit" value="Latihan 2" class="btn btn-sm btn-block btn-success">
                            <?php else:?>
                                <input type="submit" value="Latihan 2" class="btn btn-sm btn-block btn-danger">
                            <?php endif;?>
                        </form>
                    </li>
                    <li class="list-group-item">
                        <form action="<?= base_url()?>awwal/ungkapan/s-19/latihan" method="post">
                            <input type="hidden" name="latihan" value="Latihan 3">
                            <input type="hidden" name="fiil" value="ذَهَبَ">
                            <input type="hidden" name="ket" value="اِلَى السُّوقِ">
                            <?php if($latihan3):?>
                                <input type="submit" value="Latihan 3" class="btn btn-sm btn-block btn-success">
                            <?php else:?>
                                <input type="submit" value="Latihan 3" class="btn btn-sm btn-block btn-danger">
                            <?php endif;?>
                        </form>
                    </li>
                    <!-- <li class="list-group-item"><a href="<?= base_url()?>awwal/ungkapan/s-19/latihan/1" class="btn btn-sm btn-block btn-success">Latihan 1</a></li>
                    <li class="list-group-item"><a href="<?= base_url()?>awwal/ungkapan/s-19/latihan/2" class="btn btn-sm btn-block btn-success">Latihan 2</a></li>
                    <li class="list-group-item"><a href="<?= base_url()?>awwal/ungkapan/s-19/latihan/3" class="btn btn-sm btn-block btn-success">Latihan 3</a></li> -->
                </ul>
            </div>
        </div>
      </div>
    </div>
</div>

<div class="overlay"></div>
<script>
    $("#font").change(function(){
        let font = $(this).val();
        $("#container-content").css("font-size", font)
    })
</script>