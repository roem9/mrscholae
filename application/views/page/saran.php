<div class="container">
    <?php if( $this->session->flashdata('pesan') ) : ?>
        <div class="row">
            <div class="col-12 col-md-6">
                <?= $this->session->flashdata('pesan');?>
            </div>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-12">
            <div class="alert alert-info" role="alert">
                <i class="fa fa-info-circle mr-1 text-info"></i> Kami mengharapkan kritik dan saran dari Anda untuk pengembangan aplikasi ini atau jika terjadi kesalahan penulisan pada aplikasi ini <i class="fa fa-smile"></i> . Anda bisa mengirim kritik dan saran melalui form di bawah ini. Sertakan juga alamat email Anda agar kami dapat berdiskusi dengan Anda atau hanya sekedar menyapa Anda. Terima kasih <i class="fa fa-smile"></i>
            </div>
        </div>

        <div class="col-12">
            <form action="<?=base_url()?>saran/add_saran" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control form-control-sm" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control form-control-sm" required>
                </div>
                <div class="form-group">
                    <label for="saran">Kritik / Saran</label>
                    <textarea name="saran" id="saran" class="form-control form-control-sm" rows=5 required></textarea>
                </div>
                <div class="d-flex justify-content-end">
                    <input type="submit" value="Kirim" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $("#saran").addClass("active");
</script>

