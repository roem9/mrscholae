        <div class="container">
            <div class="row">
                <?php if(COUNT($mufrodat) != 0):?>
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
                    <?php $repeat = 0;?>
                    <?php if( $this->session->flashdata('pesan') ) : ?>
                            <div class="col-12">
                                <?= $this->session->flashdata('pesan');?>
                            </div>
                    <?php endif; ?>
                    <?php foreach ($mufrodat as $mufrodat) :?>
                        <div class="col-12 col-md-4 mb-2">
                            <ul class="list-group shadow">
                                <li class="list-group-item d-flex justify-content-between arab" id="container-content">
                                    <a class="" data-container="body" data-toggle="popover" data-placement="top" data-content="<?= $mufrodat['arti']?>">
                                        <i class="fa fa-info-circle text-info fa-lg"></i>
                                    </a>
                                    <span>
                                        <form action="<?= base_url()?>mufrodat/murojaah" method="post">
                                            <input type="hidden" name="kata_arab" value="<?= $mufrodat['kata_arab']?>">
                                            <input type="hidden" name="arti" value="<?= $mufrodat['arti']?>">
                                            <button style="border:none;background-color: Transparent;" type="submit" name="remove" value="remove"><i class="fa fa-times text-danger"></i></button>
                                            <?= $mufrodat['kata_arab']?>
                                        </form>
                                    </span>
                                </li>
                                <li class="list-group-item">
                                    <?= date("H:i / d-m-Y", strtotime($mufrodat['waktu']))?>
                                </li>
                            </ul>
                        </div>
                    <?php endforeach;?>
                    <div class="col-12">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-warning">Latihan</li>
                            <li class="list-group-item"><a href="<?= base_url()?>mufrodat?latihan=<?= MD5("Murojaah")?>&i=1" class="btn btn-sm btn-block btn-success text-light">Latihan 1</a></li>
                            <li class="list-group-item"><a href="<?= base_url()?>mufrodat?latihan=<?= MD5("Murojaah")?>&i=2" class="btn btn-sm btn-block btn-success text-light">Latihan 2</a></li>
                            <li class="list-group-item"><a href="<?= base_url()?>mufrodat?latihan=<?= MD5("Murojaah")?>&i=3" class="btn btn-sm btn-block btn-success text-light">Latihan 3</a></li>
                        </ul>
                    </div>
                <?php else :?>
                    <div class="col-12 col-md-6">
                        <div class="alert alert-warning" role="alert">
                            <i class="fa fa-exclamation-circle mr-1 text-warning"></i> List murojaah kosong. Silahkan pilih kata <a href="<?= base_url()?>mufrodat"><u><b>disini</b></u></a>
                        </div>
                    </div>
                <?php endif;?>
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

    $("button[name='add']").click(function(){
        var c = confirm("Yakin akan menambahkan kata ini ke list murojaah?");
        return c;
    })

    $("button[name='remove']").click(function(){
        var c = confirm("Yakin akan menghapus kata ini dari list murojaah?");
        return c;
    })
</script>

