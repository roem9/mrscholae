        <div class="container">
            <?php if( $this->session->flashdata('pesan') ) : ?>
                <div class="row">
                    <div class="col-12">
                        <?=$this->session->flashdata('pesan')?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row">
                <?php if($pembelian):?>
                    <?php foreach($pembelian as $pembelian):?>
                        <div class="col-12 col-md-4 mb-3">
                            <?php if($pembelian['status'] == "lunas"):?>
                                <div class="card border-success">
                                    <div class="card-header list-group-item-success d-flex justify-content-between"><?= $pembelian['level']?><span><?= rupiah($pembelian['harga'])?></span></div>
                            <?php else:?>
                                <div class="card border-secondary">
                                    <div class="card-header list-group-item-secondary d-flex justify-content-between"><?= $pembelian['level']?><span><?= rupiah($pembelian['harga'])?></span></div>
                            <?php endif;?>
                                <div class="card-body">
                                    <?= date("d-M-Y H:i:s", strtotime($pembelian['tgl_pembelian']))?>
                                        <?php if($pembelian['status'] == "waiting"):?>
                                            <div class="d-flex justify-content-end mt-2">
                                                <form action="<?= base_url()?>pembayaran/hapus_pembelian_by_id" method="post" id="formHapus">
                                                    <input type="hidden" name="id_pembelian" value="<?= $pembelian['id_pembelian']?>">
                                                    <a class="btn btn-sm btn-danger text-light btnBatal mr-1"><i class="fa fa-trash-alt mr-1"></i>Batalkan</a>
                                                </form>
                                                <a href="#modalUploadBukti" data-toggle="modal" data-id="<?= $pembelian['id_pembelian']?>" class="btnModalUploadBukti btn btn-sm btn-success"><i class="fa fa-image mr-1"></i>Upload Bukti</a>
                                        <?php elseif($pembelian['status'] == "konfirm"):?>
                                            <div class="d-flex justify-content-between mt-2">
                                                <span class="text-info">menunggu konfirmasi</span>
                                                <a href="#modalUploadBukti" data-toggle="modal" data-id="<?= $pembelian['id_pembelian']?>" class="btnModalUploadBukti btn btn-sm btn-success">Upload Ulang</a>
                                        <?php elseif($pembelian['status'] == "lunas"):?>
                                            <div class="d-flex justify-content-between mt-2">
                                                <span class="text-success">Pembayaran berhasil</span>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                <?php else :?>
                    <div class="col-12">
                        <div class="alert alert-warning"><i class="fa fa-exclamation-circle text-warning mr-1"></i> tidak ada history pembayaran</div>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>

<!-- Modal Upload Bukti -->
    <div class="modal fade" id="modalUploadBukti" tabindex="-1" role="dialog" aria-labelledby="modalUploadBuktiLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalUploadBuktiLabel">Upload Bukti Pembayaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url()?>pembayaran/edit_pembelian_by_id" method="post" enctype="multipart/form-data" id="formUploadBukti">
                        <input type="hidden" name="id_pembelian" id="id_pembelian">
                        <div class="form-group">
                            <label for="foto">Foto Bukti</label>
                            <input type="file" name="foto" id="foto" class="form-control form-control-sm" required>
                        </div>
                        <div class="d-flex justify-content-end">
                            <input type="submit" value="Upload" class="btn btn-primary btn-sm">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Modal Upload Bukti -->

<script>
    $(".btnBatal").click(function(){
        Swal.fire({
            text: "Anda yakin akan membatalkan pembayaran ini?",
            icon: 'question',
            showCancelButton: true,
            cancelButtonText: 'Tidak',
            confirmButtonText: 'Yakin',
        }).then((result) => {
            if (result.value) {
                $('#formHapus').submit();
            }
        })
    })

    $(".btnModalUploadBukti").click(function(){
        let id = $(this).data("id");
        $("#id_pembelian").val(id)
    })
</script>