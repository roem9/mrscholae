        <div class="container">
            
            <?php if( $this->session->flashdata('pesan') ) : ?>
                <div class="row">
                    <div class="col-12">
                        <?=$this->session->flashdata('pesan')?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row">
                <?php if($level):?>
                    <?php foreach($level as $level) :?>
                        <div class="col-12 col-md-4 mb-3">
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-info d-flex justify-content-between"><?= $level['level']?> <span><?= rupiah($level['harga'])?></span></li>
                                <li class="list-group-item">
                                    <a href="#modalDaftarMateri" data-toggle="modal" data-id="<?= $level['id_level']?>" class="btnListMateri btn btn-sm btn-block mb-2 btn-info"><i class="fa fa-list mr-1"></i> Daftar Materi</a>
                                    <a href="#modalFormPembelian" data-toggle="modal" data-id="<?= $level['id_level']?>" class="modalFormPembelian btn btn-sm btn-block btn-success"><i class="fa fa-shopping-bag mr-1"></i> Beli Pelajaran</a>
                                    <?php if($kata >= $level['min_kata']) :?>
                                        <a class="btn btn-sm btn-block btn-outline-success text-success">Kosa Kata : <?= $kata?>/<?= $level['min_kata']?></a>
                                    <?php else :?>
                                        <a class="btn btn-sm btn-block btn-outline-danger text-danger">Kosa Kata : <?= $kata?>/<?= $level['min_kata']?></a>
                                    <?php endif;?>
                                </li>
                            </ul>
                        </div>
                    <?php endforeach;?>
                <?php else :?>
                    <div class="col-12 col-md-4">
                        <div class="alert alert-warning"><i class="fa fa-exclamation-circle text-warning mr-1"></i> katalog pelajaran kosong</div>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>

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

<!-- Modal Tujuan Pembelajaran -->
    <div class="modal fade" id="modalFormPembelian" tabindex="-1" role="dialog" aria-labelledby="modalFormPembelianLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalFormPembelianLabel">Form Pembelian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-info"><i class="fa fa-info-circle text-info mr-2"></i>kode unik kami gunakan untuk mempermudah konfirmasi</div>
                    <form action="<?= base_url()?>katalogpelajaran/add_pembelian" method="post">
                        <input type="hidden" name="id_level" id="id_level">
                        <div class="form-group">
                            <label for="level">Level</label>
                            <input type="text" name="level" id="level" class="form-control form-control-sm" readonly>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga + kode unik</label>
                            <input type="text" name="harga" id="harga" class="form-control form-control-sm" readonly>
                        </div>
                        <div class="d-flex justify-content-end">
                            <input type="submit" value="Beli Pelajaran" class="btn btn-sm btn-primary" id="btnSubmitModalFormPembelian">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Modal Tujuan Pembelajaran -->

<div class="overlay"></div>

<script>
    $(".btnListMateri").click(function(){
        let id = $(this).data("id");

        $.ajax({
            url: "<?= base_url()?>katalogpelajaran/get_materi_by_id_level",
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

    $(".modalFormPembelian").click(function(){
        let id = $(this).data("id");

        $.ajax({
            url: "<?= base_url()?>katalogpelajaran/get_level_by_id_level",
            method: "POST",
            dataType: "json",
            data: {id: id},
            success: function(data){
                let harga = parseInt(data.harga) + parseInt(data.id_pembelian) + "";
                $("#modalDaftarMateriLabel").html(data.level);
                $("#id_level").val(data.id_level);
                $("#harga").val(formatRupiah(harga, "Rp. "));
                $("#level").val(data.level);
            }
        })
    })

    // confirm
        $("#btnSubmitModalFormPembelian").click(function(){
            var c = confirm("Yakin akan membeli pelajaran ini?")
            return c;
        })
</script>