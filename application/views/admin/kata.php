<!-- modal add tema -->
<div class="modal fade" id="modalAddKata" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judul">Tambah Kata</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body fo-13" id="isi">
                <form action="<?= base_url()?>admin/add_kata" method="post" id="form-tema">
                    <div class="form-group">
                        <label for="kata_arab">Kata Arab</label>
                        <textarea name="kata_arab" class="form-control form-control-sm"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="kata_indo">Kata Indonesia</label>
                        <textarea name="kata_indo" class="form-control form-control-sm"></textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <input type="submit" value="tambah kata" class="btn btn-primary btn-sm" id="btn-add-kata">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- modal add tema -->

<!-- modal add tema -->
<div class="modal fade" id="modalEditKata" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judul">Edit Kata</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body fo-13" id="isi">
                <form action="<?= base_url()?>admin/edit_kata" method="post" id="form-tema">
                    <input type="hidden" name="id_kata" id="id_kata">
                    <div class="form-group">
                        <label for="kata_arab">Kata Arab</label>
                        <textarea name="kata_arab" id="kata_arab" class="form-control form-control-sm"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="kata_indo">Kata Indonesia</label>
                        <textarea name="kata_indo" id="kata_indo" class="form-control form-control-sm"></textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <input type="submit" value="edit kata" class="btn btn-primary btn-sm" id="btn-edit-kata">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- modal add tema -->

<div class="container">
    <?php if( $this->session->flashdata('pesan') ) : ?>
        <div class="row">
            <div class="col-12 col-md-6">
                <?= $this->session->flashdata('pesan');?>
            </div>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="alert alert-info" role="alert">
                <i class="fa fa-info-circle mr-1 text-info"></i> Jumlah Kata <?= COUNT($kata)?>
            </div>
        </div>
        <div class="col-12 mb-3">
            <a href="#modalAddKata" data-toggle="modal" class="btn btn-md btn-success btn-block modal-add-kata">Tambah Kata</a>
        </div>
        <div class="col-12 mb-3">
            <form action="<?= base_url()?>admin/search" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="cari kata .." name="kata">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
            </form>
        </div>
        <?php if(COUNT($kata) != 0):?>
            <?php foreach ($kata as $kata) :?>
                <div class="col-6 mb-2">
                    <ul class="list-group shadow">
                        <li class="list-group-item text-right" style="font-size: 1.5em">
                            <?= $kata['kata_arab']?>
                        </li>
                        <li class="list-group-item d-flex justify-content-end">
                            <a href="#modalEditKata" data-toggle="modal" class="btn btn-sm btn-success modal-edit-kata" data-id="<?=$kata['id_kata']?>">edit</a>
                        </li>
                    </ul>
                </div>
            <?php endforeach;?>
        <?php else :?>
            <div class="col-12 col-md-6">
                <div class="alert alert-warning" role="alert">
                    <i class="fa fa-info-circle mr-1 text-warning"></i> Tidak ada kata
                </div>
            </div>
        <?php endif;?>
    </div>
</div>

<script>
    $("#kata").addClass("active");

    $(".modal-edit-kata").click(function(){
        let id = $(this).data("id");

        $.ajax({
            url: "<?= base_url()?>admin/get_data_kata_by_id",
            method: "POST",
            dataType: "json",
            async: true,
            data: {id: id},
            success: function(data){
                $("#id_kata").val(data.id_kata);
                $("#kata_arab").val(data.kata_arab);
                $("#kata_indo").val(data.arti);
            }
        })
    })

    $("#btn-add-kata").click(function(){
        var c = confirm("Anda yakin akan menambahkan kata?");
        return c;
    })

    $("#btn-edit-kata").click(function(){
        var c = confirm("Anda yakin akan mengubah kata?");
        return c;
    })
</script>

