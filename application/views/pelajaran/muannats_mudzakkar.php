<div class="container">
            <?php if( $this->session->flashdata('pesan') ) : ?>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <?= $this->session->flashdata('pesan');?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-12 mb-2">
                    <a href="<?= base_url()?>pelajaran" class="btn btn-sm btn-success"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
                <!-- <div class="col-12 mb-3">
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
                </div> -->
                <?php if(!empty($latihan[0]) && !empty($latihan[1]) && !empty($latihan[2]) && !empty($latihan[3])):?>
                    <div class="col-12 mb-1">
                        <div class="alert alert-success" style="font-size: 14px"><i class="fa fa-check-circle mr-1 text-success"></i>Anda telah menyelesaikan pelajaran ini</div>
                    </div>
                <?php endif;?>
                <div class="col-12">
                    <div class="alert alert-warning"><i class="fa fa-exclamation-circle text-warning mr-1"></i>Bahasa Arab memiliki pengelompokan Isim (Kata Benda) berdasarkan jenis, apakah untuk laki-laki (<strong>مُذَكَّرٌ</strong>) atau perempuan (<strong>مُؤَنَّثٌ</strong>)</div>
                </div>
                <div class="col-12 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success">Ciri-ciri Kata Benda laki-laki (<strong>مُذَكَّرٌ</strong>)</li>
                        <li class="list-group-item">
                            <ol class="pl-3">
                                <li>Nama-nama yang digunakan oleh laki-laki :<br><span> <strong>نُوْحٌ</strong> ، <strong>يُوْسُفُ</strong> ، <strong>أَحْمَدُ</strong> ، <strong>زَيْدٌ</strong> ، <strong>أُسَامَةُ</strong> ، <strong>طَلْحَةُ</strong></span></li><br>
                                <li>Kata bahasa Arab yang tidak diakhiri Ta Marbuthoh (<span class="arab" style="font-size: 16px">ة</span>) : <br><span style="font-size: 16px"><strong>كِـتَابٌ</strong> , <strong>قَلَمٌ</strong> , <strong>مَكْتَبٌ</strong> , <strong>مَاءٌ</strong></span>
                                </li>
                            </ol>
                        </li>
                    </ul>
                </div>
                <div class="col-12 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success">Ciri-ciri Kata Benda Perempuan (<strong>مُؤَنَّثٌ</strong>)</li>
                        <li class="list-group-item">
                            <ol class="pl-3">
                                <li>Nama-nama yang digunakan oleh perempuan :<br><span> <strong>عَائِشَةُ</strong> ، <strong>خَدِيْجَةُ</strong> ، <strong>فَاطِمَةُ</strong> ، <strong>هِنْدٌ</strong> ، <strong>زَيْنَبُ</strong> ، <strong>مَرْيَمُ</strong></span></li><br>
                                <li>Kata bahasa Arab yang diakhiri Ta Marbuthoh (<span class="arab" style="font-size: 16px">ة</span>) : <br><span><strong>سَبُّوْرَةٌ</strong> , <strong>حَقِيْبَةٌ</strong> , <strong>مِسْطَرَةٌ</strong> , <strong>مِلْعَقَةٌ</strong></span>
                                </li>
                            </ol>
                        </li>
                    </ul>
                </div>
                <div class="col-12 mb-3">
                    <div class="alert alert-warning"><i class="fa fa-exclamation-circle text-warning mr-1"></i><strong>Pengecualian</strong><br>Anggota tubuh yang berpasangan masuk kedalam kategori muannats. <strong>أُذُنٌ</strong> (telinga) ، <strong>عَيْنٌ</strong> (mata) ، <strong>يَدٌ</strong> (tangan) ، <strong>رِجْلٌ</strong> (kaki)</div>
                </div>
                <div class="col-12">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-warning">Latihan</li>
                        <?php if($latihan[0]):?>
                            <li class="list-group-item"><a href="<?= base_url()?>pelajaran?latihan=<?= MD5($materi)?>&i=1" class="btn btn-sm btn-block btn-success"><div class="d-flex justify-content-between">Latihan 1 <span><?= date("H:i d-m-y", strtotime($latihan[0]['waktu']))?></span></div></a></li>
                        <?php else :?>
                            <li class="list-group-item"><a href="<?= base_url()?>pelajaran?latihan=<?= MD5($materi)?>&i=1" class="btn btn-sm btn-block btn-danger">Latihan 1</a></li>
                        <?php endif;?>
                        <?php if($latihan[1]):?>
                            <li class="list-group-item"><a href="<?= base_url()?>pelajaran?latihan=<?= MD5($materi)?>&i=2" class="btn btn-sm btn-block btn-success"><div class="d-flex justify-content-between">Latihan 2 <span><?= date("H:i d-m-y", strtotime($latihan[1]['waktu']))?></span></div></a></li>
                        <?php else :?>
                            <li class="list-group-item"><a href="<?= base_url()?>pelajaran?latihan=<?= MD5($materi)?>&i=2" class="btn btn-sm btn-block btn-danger">Latihan 2</a></li>
                        <?php endif;?>
                        <?php if($latihan[2]):?>
                            <li class="list-group-item"><a href="<?= base_url()?>pelajaran?latihan=<?= MD5($materi)?>&i=3" class="btn btn-sm btn-block btn-success"><div class="d-flex justify-content-between">Latihan 3 <span><?= date("H:i d-m-y", strtotime($latihan[2]['waktu']))?></span></div></a></li>
                        <?php else :?>
                            <li class="list-group-item"><a href="<?= base_url()?>pelajaran?latihan=<?= MD5($materi)?>&i=3" class="btn btn-sm btn-block btn-danger">Latihan 3</a></li>
                        <?php endif;?>
                        <?php if($latihan[3]):?>
                            <li class="list-group-item"><a href="<?= base_url()?>pelajaran?latihan=<?= MD5($materi)?>&i=4" class="btn btn-sm btn-block btn-success"><div class="d-flex justify-content-between">Latihan 4 <span><?= date("H:i d-m-y", strtotime($latihan[3]['waktu']))?></span></div></a></li>
                        <?php else :?>
                            <li class="list-group-item"><a href="<?= base_url()?>pelajaran?latihan=<?= MD5($materi)?>&i=4" class="btn btn-sm btn-block btn-danger">Latihan 4</a></li>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="overlay"></div>
<script>
    $("#tema").addClass("active");
    
    
    $(".modal-kalimat").click(function(){
        const id = $(this).data("id");
        $("#judul").html('Makna Kalimat')
        $.ajax({
            url : "<?= base_url()?>mufrodat/get_data_kalimat",
            method : "POST",
            data : {id : id},
            async : true,
            dataType : "json",
            success : function(data){
                html = '<ul class="list-group">'+
                        '<li class="list-group-item text-right" id="arab" style="font-size: 24px">'+data.kalimat_arab+'</li>'+
                        '<li class="list-group-item list-group-item-info" id="indo">'+data.arti+'</li>'+
                    '</ul>';
                $("#isi").html(html);
            }
        })
    })

    $(".modal-kata").click(function(){
        const id = $(this).data("id");
        $("#judul").html('Makna Perkata')
        $.ajax({
            url : "<?= base_url()?>mufrodat/get_data_kata",
            method : "POST",
            data : {id : id},
            async : true,
            dataType : "json",
            success : function(data){
                html = '<ul class="list-group">';

                for (let i = 0; i < data.length; i++) {
                    if(i % 2 == 0){
                        html += '<li class="list-group-item d-flex justify-content-between align-items-center">'+
                            data[i].arti+
                            '<span style="font-size: 20px">'+data[i].kata_arab+'</span>'+
                        '</li>';
                    } else {
                        html += '<li class="list-group-item d-flex justify-content-between align-items-center list-group-item-info">'+
                            data[i].arti+
                            '<span style="font-size: 20px">'+data[i].kata_arab+'</span>'+
                        '</li>';
                    }
                }
                    
                $("#isi").html(html);
            }
        })
    })
    
    $("#font").change(function(){
        let font = $(this).val();
        $("[id='container-content']").css("font-size", font)
    })
</script>

