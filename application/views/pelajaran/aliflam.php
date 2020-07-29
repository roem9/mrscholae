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
                <div class="col-12 mb-1">
                    <div class="alert alert-warning"><i class="fa fa-exclamation-circle mr-1 text-warning"></i>Seluruh kata benda yang telah Anda hafal dari mufrodat 1 sampai dengan mufrodat 4 masih memiliki arti yang umum. Sebagai contoh kata <b>كِتَـابٌ</b> yang artinya buku. Buku yang dimaksud masih dalam bentuk umum (belum jelas). Kemudian untuk mengkhususkan arti dari suatu kata benda adalah dengan menambahkan Alif Lam (<b>ال</b>) sehingga menjadi <b>اَلْـكِتَابُ</b> yang memiliki arti buku (buku yang dimaksud sudah jelas). Dibawah ini adalah cara menambahkan Alif Lam (<b>ال</b>) untuk setiap kata benda dengan memperhatikan <b>huruf pertama</b> dari kata benda tersebut</div>
                </div>
                <div class="col-12 mb-3">
                    <ul class="list-group mb-3">
                        <li class="list-group-item list-group-item-success d-flex justify-content-between container-content">
                            <span>Huruf Qomariyah</span>
                            <a class="" data-container="body" data-toggle="popover" data-placement="top" data-content="menegaskan pembacaan dari huruf lam">
                                <i class="fa fa-info-circle text-info fa-lg"></i>
                            </a>
                        </li>
                        <li class="list-group-item text-right arab">
                            أ : أَبٌ = اَلْأَبُ
                        </li>
                        <li class="list-group-item text-right arab">
                            ب : بَابٌ = اَلْـبَابُ
                        </li>
                        <li class="list-group-item text-right arab">
                            ج : جَنَّةٌ = اَلْـجَنَّةُ
                        </li>
                        <li class="list-group-item text-right arab">
                            ح : حِمَارٌ = اَلْـحِمَارُ
                        </li>
                        <li class="list-group-item text-right arab">
                            خ : خُبْزٌ = اَلْـخُبْزُ
                        </li>
                        <li class="list-group-item text-right arab">
                            ع : عَيْنٌ = اَلْـعَيْنُ
                        </li>
                        <li class="list-group-item text-right arab">
                            غ : غَدَاءٌ = اَلْـغَدَاءُ
                        </li>
                        <li class="list-group-item text-right arab">
                            ف : فَمٌ = اَلْـفَمُ
                        </li>
                        <li class="list-group-item text-right arab">
                            ق : قَمَرٌ = اَلْـقَمَرُ
                        </li>
                        <li class="list-group-item text-right arab">
                            ك : كَلْبٌ = اَلْـكَلْبُ
                        </li>
                        <li class="list-group-item text-right arab">
                            م : مَاءٌ = اَلْـمَاءُ
                        </li>
                        <li class="list-group-item text-right arab">
                            و : وَلَدٌ = اَلْـوَلَدُ
                        </li>
                        <li class="list-group-item text-right arab">
                            هـ : هَوَاءٌ = اَلْـهَوَاءُ
                        </li>
                        <li class="list-group-item text-right arab">
                            ي : يَدٌ = اَلْـيَدُ
                        </li>
                    </ul>
                    
                    <ul class="list-group mb-3">
                        <li class="list-group-item list-group-item-success d-flex justify-content-between container-content">
                            <span>Huruf Syamsiah</span>
                            <a class="" data-container="body" data-toggle="popover" data-placement="top" data-content="menghilangkan pembacaan huruf lam">
                                <i class="fa fa-info-circle text-info fa-lg"></i>
                            </a>
                        </li>
                        <li class="list-group-item text-right arab">
                            ت : تَاجِرٌ = اَلتَّاجِرُ
                        </li>
                        <li class="list-group-item text-right arab">
                            ث : ثَوْبٌ = اَلثَّوْبُ
                        </li>
                        <li class="list-group-item text-right arab">
                            د : دِيْكٌ = اَلدِّيْكُ
                        </li>
                        <li class="list-group-item text-right arab">
                            ذ : ذَهَبٌ = اَلذَّهَبُ
                        </li>
                        <li class="list-group-item text-right arab">
                            ر : رَجُلٌ = اَلرَّجُلُ
                        </li>
                        <li class="list-group-item text-right arab">
                            ز : زَهْرَةٌ = اَلزَّهْرَةُ
                        </li>
                        <li class="list-group-item text-right arab">
                            س : سَمَكٌ = اَلسَّمَكُ
                        </li>
                        <li class="list-group-item text-right arab">
                            ش : شَمْسٌ = اَلشَّمْسُ
                        </li>
                        <li class="list-group-item text-right arab">
                            ص : صَدْرٌ = اَلصَّدْرُ
                        </li>
                        <li class="list-group-item text-right arab">
                            ض : ضَيْفٌ = اَلضَّيْفُ
                        </li>
                        <li class="list-group-item text-right arab">
                            ط : طَالِبٌ = اَلطَّالِبُ
                        </li>
                        <li class="list-group-item text-right arab">
                            ظ : ظَهْرٌ = اَلظَّهْرُ
                        </li>
                        <li class="list-group-item text-right arab">
                            ل : لَحْمٌ = اَللَّـحْمُ
                        </li>
                        <li class="list-group-item text-right arab">
                            ن : نَجْمٌ = اَلنَّجْمُ
                        </li>
                    </ul>
                </div>
                <div class="col-12 mb-3">
                    <div class="alert alert-warning"><i class="fa fa-exclamation-circle text-warning mr-1"></i><strong>Perhatian</strong><br>Ketika menambahkan Alif Lam (<b>ال</b>), Maka tanwin harus dihilangkan</div>
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