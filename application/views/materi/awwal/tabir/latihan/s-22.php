        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 mb-3">
                    <a id="backHome" class="btn btn-sm btn-success text-light"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
            </div>
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
                                    <?php foreach ($pilihan1 as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                                <select name="<?= $i?>2" id="<?= $i?>2" class="form-control form-control-lg mb-2">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($pilihan2 as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                                <a class="btn btn-block btn-sm btn-info text-light cek" data-id="<?= $i?>|2">simpan jawaban</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>

            <div class="row">
                <form action="<?= base_url()?>latihan/add_latihan" method="post" id="latihan">
                    <input type="hidden" name="mustawa" value="awwal">
                    <input type="hidden" name="hal" value="s-22">
                    <input type="hidden" name="materi" value="attabir">
                    <input type="hidden" name="latihan" value="<?= $latihan?>">
                    <input type="hidden" name="redirect" value="awwal/ungkapan/s-22">
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
            confirmButtonText: '<a href="<?= base_url()?>awwal/ungkapan/s-22">Ya</a>',
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
            html += $("#"+id+""+parseInt(i+1)).val();
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