        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 mb-3">
                    <a id="backHome" class="btn btn-sm btn-danger text-light"><i class="fa fa-times"></i></a>
                </div>
                <div class="col-12 mb-1">
                    <div class="alert alert-warning"><i class="fa fa-exclamation-circle text-warning mr-1"></i>Terjemahkan kata berikut ini ke dalam Bahasa Arab dengan jenis <strong>مُؤَنَّثٌ</strong>, lalu pilih tombol <strong>simpan</strong> untuk menyimpan jawaban</div>
                </div>
            </div>
            <?php 
                $urut = 0;
                foreach ($mufrodat as $i => $kalimat) :
                $urut++?>

                <div class="col-12 col-md-12 mb-3">
                    <div class="form-group">
                        <label for="<?=$i?>"><strong><?= $i+1?>. <?= $kalimat['soal']?></strong></label>
                        <span class="icon-cek-<?= $i?>"></span>
                        <input type="hidden" name="kunci<?=$i?>" value="<?= $kalimat['jawaban']?>">
                        <input type="hidden" name="j<?= $i?>" id="jawaban<?=$i?>">
                        <div class="d-flex justify-content-between">
                            <a id="btnEdit<?=$i?>" class="btn btn-sm btn-success text-light edit" data-id="<?= $i?>" style="display: none">ganti</a>
                            <h5 class="text-right" id="j<?=$i?>"></h5>
                        </div>
                        
                        <div id="select<?=$i?>">
                                <textarea name="jaw<?=$i?>" id="jaw<?=$i?>" class="form-control" readonly></textarea>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <?php 
                                            $huruf = $kalimat['huruf'];
                                            shuffle($huruf);
                                            foreach ($huruf as $k => $data) :?>
                                                <div class="radio-toolbar mr-3">
                                                    <a data-id="<?= $data?>|<?= $i?>" class="btn border-dark btn-md btn-secondary text-light mt-1 mb-1 arab input-btn" style="height: 40px; width: 40px; border-width: 2px"><b><?= $data?></b></a>
                                                </div>
                                        <?php endforeach;?>
                                    </div>
                                </div>
                                <a class="btn btn-block btn-sm btn-info text-light cek" data-id="<?= $i?>|1">Simpan</a>
                                <a class="btn btn-block btn-sm btn-danger text-light hapus" data-id="<?= $i?>">Hapus</a>
                            </div>
                    </div>
                </div>
            <?php endforeach;?>

            <div class="row">
                <form action="<?= base_url()?>latihan/add_latihan" method="post" id="latihan">
                    <input type="hidden" name="materi" value="<?= $materi?>">
                    <input type="hidden" name="latihan" value="<?= $title?>">
                    <input type="hidden" name="redirect" value="<?= $redirect?>">
                </form>
                <div class="col-12 col-md-12 mb-3">
                    <a id="simpanJawaban" data-id="<?= COUNT($mufrodat)?>" class="btn btn-block btn-primary text-light">Simpan</a>
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
                $(".icon-cek-"+i).html(`<i class="fa fa-times-circle text-danger"></i>`);
            } else {
                $(".icon-cek-"+i).html(`<i class="fa fa-check-circle text-success"></i>`);
            }
        }
        if(benar == 0){
            Swal.fire({
                icon: 'error',
                title: 'oppss',
                text: 'ada jawaban yang kurang tepat'
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
            confirmButtonText: '<a href="<?= base_url($redirect)?>">Ya</a>',
            cancelButtonText: 'Tidak'
        })
    })

    $(".input-btn").click(function(){
        let data = $(this).data("id");
        data = data.split("|");
        let kata = data[0];
        let id = data[1];
        
        let html = $("#jaw"+id).val();

        $("#jaw"+id).val(html + "" + kata);
    })

    $(".cek").click(function(){
        let data = $(this).data("id");
        data = data.split("|");
        let id = data[0];
        let total = data[1];
        html = $("#jaw"+id).val();

        if(html === 'undefined'){
            html = '-';
        }

        if(html == $("input[name='kunci"+id+"']").val()){
            $("#j"+id).html(html);
            $("#jawaban"+id).val("betul");
            $("#select"+id).hide();
            $("#btnEdit"+id).show();
        } else {
            $("#j"+id).html(html);
            $("#jawaban"+id).val("salah");
            $("#select"+id).hide();
            $("#btnEdit"+id).show();
        }
    })

    $(".hapus").click(function(){
        let id = $(this).data("id");
        let answer = $("#jaw"+id).val();
        if (answer.charAt(answer.length-2) == "ّ"){
            hapus = answer.slice(0,-3);
        } else if(answer.charAt(answer.length-1) == "ا"){
            hapus = answer.slice(0,-1);
        } else {
            hapus = answer.slice(0,-2);
        }
        $("#jaw"+id).val(hapus);
    })

    $(".edit").click(function(){
        let id = $(this).data("id");

        $("#btnEdit"+id).hide();
        $("#j"+id).html("");
        $("#jawaban"+id).val("");
        $("#select"+id).show();
    });
</script>