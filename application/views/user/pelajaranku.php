        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 mb-3">
                    <div class="card">
                        <div class="card-header list-group-item-info">Pola Fiil</div>
                        <div class="card-body">
                            <a href="#modalKosaKata" data-toggle="modal" class="btnListMateri btn btn-block mb-2 btn-sm btn-info"><i class="fa fa-list mr-1"></i> Daftar Materi</a>
                            <a href="<?= base_url()?>fiil/mudhori" class="btn btn-block btn-sm btn-success"><i class="fa fa-book mr-1"></i> Mulai Belajar</a>
                        </div>
                    </div>
                </div>
                <?php foreach($level as $level) :?>
                    <div class="col-12 col-md-4 mb-3">
                        <div class="card">
                            <div class="card-header list-group-item-info"><?= $level['level']?></div>
                            <div class="card-body">
                                <a href="#modalDaftarMateri" data-toggle="modal" data-id="<?= $level['id_level']?>" class="btnListMateri btn btn-sm btn-block mb-2 btn-info"><i class="fa fa-list mr-1"></i> Daftar Materi</a>
                                <a href="<?= base_url()?>level<?=$level['link']?>" class="btn btn-sm btn-block btn-success"><i class="fa fa-book mr-1"></i> Mulai Belajar</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>


<!-- Modal Tujuan Pembelajaran -->
    <div class="modal fade" id="modalKosaKata" tabindex="-1" role="dialog" aria-labelledby="modalKosaKataLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalKosaKataLabel">Daftar Materi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <li class="list-group-item">Materi ini berisikan kosa kata dan kalimat berbahasa Arab yang akan diupdate setiap pekan</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                </div>
            </div>
        </div>
    </div>
<!-- Modal Tujuan Pembelajaran -->

<!-- Modal Tujuan Pembelajaran -->
    <div class="modal fade" id="modalDaftarMateri" tabindex="-1" role="dialog" aria-labelledby="modalDaftarMateriLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDaftarMateriLabel">Daftar Materi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <div id="listMateri"></div>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                </div>
            </div>
        </div>
    </div>
<!-- Modal Tujuan Pembelajaran -->

<script>
    $(".btnListMateri").click(function(){
        let id = $(this).data("id");

        $.ajax({
            url: "<?= base_url()?>daftar/get_materi_by_id_level",
            method: "POST",
            dataType: "json",
            data: {id: id},
            success: function(data){
                $("#modalDaftarMateriLabel").html("Level "+data[0].level)
                var html = '';
                for (let i = 0; i < data.length; i++) {
                    html += ` <li class="list-group-item">`+data[i].nama_materi+`</li>`;
                }

                $("#listMateri").html(html);
            },
            error: function(xhr, ajaxOptions, thrownError){
                alert(xhr.status);
            }
        })
    })
</script>