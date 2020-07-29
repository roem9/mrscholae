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
            <ul class="list-group">
                <li class="list-group-item list-group-item-warning">Aplikasi ini diperuntukkan bagi teman-teman yang telah mengenal huruf Arab dan bisa membaca kata dalam bahasa Arab</li>
                <li class="list-group-item">Aplikasi ini berisi latihan-latihan yang dapat menambah wawasan bahasa Arab teman-teman, baik itu dari kosa kata dan kaidah-kaidah bahasa Arab</li>
                <li class="list-group-item">Materi dan kosa kata akan terus diupdate</li>
                <li class="list-group-item">Jika teman-teman tertarik untuk belajar dengan aplikasi ini silahkan daftarkan diri teman-teman <a href="<?= base_url()?>login">disini</a></li>
            </ul>
        </div>
    </div>
</div>

<script>
    $("#how").addClass("active");
</script>

