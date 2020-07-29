<div class="container">
        <div class="row">
            <div class="col-12 col-md-12 mb-3">
                <a href="<?= base_url()?>awwal/ungkapan" class="btn btn-sm btn-success text-light"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="font">Ukuran Font</label>
                    <select name="font" id="font" class="form-control form-control-sm">
                        <option value="16px">Pilih Ukuran Font</option>
                        <option value="16px">16</option>
                        <option value="18px">18</option>
                        <option value="20px">20</option>
                        <option value="22px">22</option>
                        <option value="24px">24</option>
                    </select>
                </div>
            </div>
            <div class="col-12 mb-2">
                <?php if(!empty($message)):?>
                    <?= $message;?>
                <?php endif;?>
            </div>
        </div>
        <div class="row d-flex justify-content-end" id="container-content">
            <div class="col-12 col-md-4 mb-2">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between">
                        <a class="" data-container="body" data-toggle="popover" data-placement="top" data-content="Apakah Kamu telah menerima karcis?">
                            <i class="fa fa-info-circle text-info fa-lg"></i>
                        </a>
                        <span>أ : هَلْ تَسَلَّمْتَ <span class="text-danger">التَّذَاكِرَةَ</span>؟</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <a class="" data-container="body" data-toggle="popover" data-placement="top" data-content="Ya, Saya telah menerimanya">
                            <i class="fa fa-info-circle text-info fa-lg"></i>
                        </a>
                        <span>ب : نَعَمْ، تَسَلَّـمْتُـ<span class="text-danger">ـهَا</span></span>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-4 mb-2">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between">
                        <a class="" data-container="body" data-toggle="popover" data-placement="top" data-content="Apakah Kamu telah membaca buku?">
                            <i class="fa fa-info-circle text-info fa-lg"></i>
                        </a>
                        <span>أ : هَلْ قَرَأْتَ <span class="text-danger">الْكِـتَابَ</span>؟</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <a class="" data-container="body" data-toggle="popover" data-placement="top" data-content="Ya, Saya telah membacanya">
                            <i class="fa fa-info-circle text-info fa-lg"></i>
                        </a>
                        <span>ب : نَعَمْ، قَرَأْتُـ<span class="text-danger">ـهُ</span></span>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-4 mb-2">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between">
                        <a class="" data-container="body" data-toggle="popover" data-placement="top" data-content="Apakah Kamu telah membeli makanan?">
                            <i class="fa fa-info-circle text-info fa-lg"></i>
                        </a>
                        <span>أ : هَلْ اشْتَرَيْتَ <span class="text-danger">الطَّعَامَ</span>؟</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <a class="" data-container="body" data-toggle="popover" data-placement="top" data-content="Ya, Saya telah membelinya">
                            <i class="fa fa-info-circle text-info fa-lg"></i>
                        </a>
                        <span>ب : نَعَمْ، اشْتَرَيْتُـ<span class="text-danger">ـهُ</span></span>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-4 mb-2">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between">
                        <a class="" data-container="body" data-toggle="popover" data-placement="top" data-content="Apakah Kamu telah memakan buah?">
                            <i class="fa fa-info-circle text-info fa-lg"></i>
                        </a>
                        <span>أ : هَلْ أَكَلْتَ <span class="text-danger">الْفَاكِهَةَ</span>؟</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <a class="" data-container="body" data-toggle="popover" data-placement="top" data-content="Ya, Saya telah memakannya">
                            <i class="fa fa-info-circle text-info fa-lg"></i>
                        </a>
                        <span>ب : نَعَمْ، أَكَلْتُـ<span class="text-danger">ـهَا</span></span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-warning">Latihan</li>
                    <li class="list-group-item">
                        <form action="<?= base_url()?>awwal/ungkapan/s-20/latihan" method="post">
                            <input type="hidden" name="latihan" value="Latihan 1">
                            <?php if($latihan1):?>
                                <input type="submit" value="Latihan 1" class="btn btn-sm btn-block btn-success">
                            <?php else:?>
                                <input type="submit" value="Latihan 1" class="btn btn-sm btn-block btn-danger">
                            <?php endif;?>
                        </form>
                    </li>
                    <li class="list-group-item">
                        <form action="<?= base_url()?>awwal/ungkapan/s-20/latihan" method="post">
                            <input type="hidden" name="latihan" value="Latihan 2">
                            <?php if($latihan2):?>
                                <input type="submit" value="Latihan 2" class="btn btn-sm btn-block btn-success">
                            <?php else:?>
                                <input type="submit" value="Latihan 2" class="btn btn-sm btn-block btn-danger">
                            <?php endif;?>
                        </form>
                    </li>
                    <li class="list-group-item">
                        <form action="<?= base_url()?>awwal/ungkapan/s-20/latihan" method="post">
                            <input type="hidden" name="latihan" value="Latihan 3">
                            <?php if($latihan3):?>
                                <input type="submit" value="Latihan 3" class="btn btn-sm btn-block btn-success">
                            <?php else:?>
                                <input type="submit" value="Latihan 3" class="btn btn-sm btn-block btn-danger">
                            <?php endif;?>
                        </form>
                    </li>
                    <!-- <li class="list-group-item"><a href="<?= base_url()?>awwal/ungkapan/s-19/latihan/1" class="btn btn-sm btn-block btn-success">Latihan 1</a></li>
                    <li class="list-group-item"><a href="<?= base_url()?>awwal/ungkapan/s-19/latihan/2" class="btn btn-sm btn-block btn-success">Latihan 2</a></li>
                    <li class="list-group-item"><a href="<?= base_url()?>awwal/ungkapan/s-19/latihan/3" class="btn btn-sm btn-block btn-success">Latihan 3</a></li> -->
                </ul>
            </div>
        </div>
      </div>
    </div>
</div>

<div class="overlay"></div>
<script>
    $("#font").change(function(){
        let font = $(this).val();
        $("#container-content").css("font-size", font)
    })
</script>