<div class="modal fade" id="modalMakna" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="judul"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body fo-13" id="isi">

        </div>
        <div class="modal-footer">
        </div>
    </div>
  </div>
</div>

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
                    <a href="<?= base_url()?>kosakata" class="btn btn-sm btn-success"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
                <?php if(COUNT($mufrodat) != 0):?>
                    <?php foreach ($mufrodat as $mufrodat) :?>
                        <div class="col-12 col-md-4 mb-2">
                            <ul class="list-group shadow">
                                <li class="list-group-item text-right" style="font-size: 1.5em">
                                    <?= $mufrodat['kalimat_arab']?>
                                </li>
                                <li class="list-group-item text-right d-flex justify-content-start" style="font-size: 1.5em">
                                    <a href="#modalMakna" data-toggle="modal" data-id="<?= $mufrodat['id_kalimat']?>" class="btn btn-sm btn-success mr-1 modal-kata">Makna Perkata</a>
                                    <a href="#modalMakna" data-toggle="modal" data-id="<?= $mufrodat['id_kalimat']?>" class="btn btn-sm btn-success modal-kalimat">Makna Kalimat</a>
                                </li>
                            </ul>
                        </div>
                    <?php endforeach;?>
                    <div class="col-12 col-md-4">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-warning">Latihan</li>
                            <?php if($latihan):?>
                                <?php if($latihan[0]):?>
                                    <li class="list-group-item"><a href="<?= base_url()?>kosakata/latihan1/<?= $mufrodat['id_tema']?>" class="btn btn-sm btn-block btn-success">Latihan 1</a></li>
                                <?php else :?>
                                    <li class="list-group-item"><a href="<?= base_url()?>kosakata/latihan1/<?= $mufrodat['id_tema']?>" class="btn btn-sm btn-block btn-danger">Latihan 1</a></li>
                                <?php endif;?>
                                <?php if($latihan[1]):?>
                                    <li class="list-group-item"><a href="<?= base_url()?>kosakata/latihan2/<?= $mufrodat['id_tema']?>" class="btn btn-sm btn-block btn-success">Latihan 2</a></li>
                                <?php else :?>
                                    <li class="list-group-item"><a href="<?= base_url()?>kosakata/latihan2/<?= $mufrodat['id_tema']?>" class="btn btn-sm btn-block btn-danger">Latihan 2</a></li>
                                <?php endif;?>
                            <?php else:?>
                                <li class="list-group-item"><a href="<?= base_url()?>kosakata/latihan1/<?= $mufrodat['id_tema']?>" class="btn btn-sm btn-block btn-danger">Latihan 1</a></li>
                                <li class="list-group-item"><a href="<?= base_url()?>kosakata/latihan2/<?= $mufrodat['id_tema']?>" class="btn btn-sm btn-block btn-danger">Latihan 2</a></li>
                            <?php endif;?>
                        </ul>
                    </div>
                <?php else :?>
                    <div class="col-12 col-md-6">
                        <div class="alert alert-info" role="alert">
                            <i class="fa fa-info-circle mr-1 text-info"></i> belum ada kalimat. bersabarlah :)
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
</script>

