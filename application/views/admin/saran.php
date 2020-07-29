<div class="container">
    <?php if( $this->session->flashdata('pesan') ) : ?>
        <div class="row">
            <div class="col-12 col-md-6">
                <?= $this->session->flashdata('pesan');?>
                </div>
        </div>
    <?php endif; ?>
    <div class="row">
        <?php foreach ($saran as $saran) :?>
            <div class="col-12 mb-2">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-info d-flex justify-content-between"><?= $saran['nama']?> <span><?= $saran['email']?></span></li>
                    <li class="list-group-item" style="font-size: 10px">
                        <?= $saran['text']?>
                    </li>
                </ul>
            </div>
        <?php endforeach;?>
    </div>
</div>

<script>
    $("#saran").addClass("active");
</script>

