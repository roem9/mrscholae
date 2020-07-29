
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 mb-3">
                    <a id="backHome" class="btn btn-sm btn-success text-light"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
            </div>
            <?php 
                $urut = 0;
                foreach ($mufrodat as $i => $kalimat) :
                $urut++?>

                <div class="col-12 col-md-12 mb-3">
                    <div class="form-group">
                        <label for="<?=$i?>"><?= $i+1?>. <?= $kalimat['arti']?></label>
                        <input type="hidden" name="kunci<?=$i?>" value="<?= $kalimat['kata_arab']?>">
                        <input type="hidden" name="j<?= $i?>" id="jawaban<?=$i?>">
                        <h5 class="text-right" id="j<?=$i?>"></h5>
                        <a id="btnEdit<?=$i?>" class="btn btn-block btn-sm btn-success text-light edit" data-id="<?= $i?>" style="display: none">ubah jawaban</a>
                        
                        <div id="select<?=$i?>">
                            <select name="<?= $i?>1" id="<?= $i?>1" class="form-control form-control-lg mb-2">
                                <option value="">Pilih Jawaban</option>
                                <?php foreach ($kata as $data) :?>
                                    <option value="<?= $data?>"><?= $data?></option>
                                <?php endforeach;?>
                            </select>
                            <a class="btn btn-block btn-sm btn-info text-light cek" data-id="<?= $i?>|1">simpan jawaban</a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>

            <div class="row">
                <form action="<?= base_url()?>latihan/latihan_mufrodat" method="post" id="latihan">
                    <input type="hidden" name="id_tema" value="<?= $id_tema?>">
                    <input type="hidden" name="latihan" value="Latihan 2">
                </form>
                <div class="col-12 col-md-12 mb-3">
                    <a id="simpanJawaban" data-id="<?= COUNT($kalimat)?>" class="btn btn-block btn-primary text-light">Simpan</a>
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
                text: 'ada soal yang belum terjawab, dijawab dulu yaa'
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
            confirmButtonText: '<a href="<?= base_url()?>kosakata/bagian/<?= $id_tema?>">Ya</a>',
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
</script>