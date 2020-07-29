<!-- modal add tema -->
<div class="modal fade" id="modalAddTema" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judul">Tambah Tema</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body fo-13" id="isi">
            <form action="<?= base_url()?>admin/add_tema" method="post" id="form-tema">
                <div class="form-group">
                    <label for="tema-input">Tema</label>
                    <input type="text" name="tema" id="tema_input" class="form-control form-control-sm">
                </div>
                <div class="d-flex justify-content-end">
                    <input type="submit" value="tambah tema" class="btn btn-primary btn-sm" id="btn-add-tema">
                </div>
            </form>
            </div>
            <div class="modal-footer">
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
        <div class="col-12 mb-3">
            <a href="#modalAddTema" data-toggle="modal" class="btn btn-md btn-success btn-block">Tambah Tema</a>
        </div>
        <?php foreach ($tema as $tema) :?>
            <div class="col-12 mb-2">
                <ul class="list-group">
                    <a href="<?= base_url()?>admin/kalimat/<?= $tema['id_tema']?>">
                        <li class="list-group-item list-group-item-info text-right" style="font-size: 1.5em">
                            <?= $tema['tema']?>
                        </li>
                    </a>
                </ul>
            </div>
        <?php endforeach;?>
    </div>
</div>

<script>
    $("#tema").addClass("active");
    $("#btn-add-tema").click(function(){
        var c = confirm("Yakin akan menambahkan data?");
        return c;
    })
</script>

