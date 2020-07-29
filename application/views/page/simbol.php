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
                <li class="list-group-item list-group-item-info">نَافِذَةٌ ج نَوَافِذُ</li>
                <li class="list-group-item">"ج" adalah jamak. Kata disebelah kanan huruf "ج" adalah bentuk mufrod (tunggal) dan kata disebelah kiri adalah bentuk jamaknya</li>
            </ul>
            <ul class="list-group mt-2">
                <li class="list-group-item list-group-item-info">أَغْلَقَ - يُغْلِقُ</li>
                <li class="list-group-item">"-" adalah pemisah antara fiil madhi dan mudhori. Fiil madhi berada di sebelah kanan tanda "-" dan fiil mudhori berada disebelah kiri "-"</li>
            </ul>
        </div>
    </div>
</div>

<script>
    $("#simbol").addClass("active");
</script>

