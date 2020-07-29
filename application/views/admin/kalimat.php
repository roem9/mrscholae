<!-- modal add tema -->
<div class="modal fade" id="modalAddKalimat" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judul">Tambah Kalimat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body fo-13" id="isi">
            <form action="<?= base_url()?>admin/add_kalimat" method="post" id="form-tema">
                <input type="hidden" name="id_tema" value="<?= $id?>">
                <div class="form-group">
                    <label for="kalimat_arab">Kalimat Arab</label>
                    <textarea name="kalimat_arab" id="kalimat_arab" class="form-control form-control-sm"></textarea>
                </div>
                <div class="form-group">
                    <label for="kalimat_indo">Kalimat Indonesia</label>
                    <textarea name="kalimat_indo" id="kalimat_indo" class="form-control form-control-sm"></textarea>
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

<!-- modal edit kalimat -->
    <div class="modal fade" id="modalEditKalimat" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judul-tambah">Edit Kalimat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body fo-13" id="isi">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active" id="btn-form-1"><i class="fa fa-language"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" id="btn-form-2"><i class="fa fa-plus"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" id="btn-form-3"><i class="fa fa-trash"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <!-- edit kalimat -->
                                <form action="<?=base_url()?>admin/edit_kalimat" method="post" id="form-1">
                                    <input type="hidden" name="id" id="edit_id">
                                    <div class="form-group">
                                    <label for="edit_kalimat">Kalimat</label>
                                    <textarea name="kalimat" id="edit_kalimat" class="form-control form-control-sm"></textarea>
                                    </div>
                                    <div class="form-group">
                                    <label for="edit_arti">Arti</label>
                                    <textarea name="arti" id="edit_arti" class="form-control form-control-sm"></textarea>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                    <input type="submit" value="edit" class="btn btn-success btn-sm">
                                    </div>
                                </form>
                            <!-- edit kalimat -->

                            <!-- tambah kata -->
                                <form action="<?=base_url()?>admin/add_kata_kalimat" method="post" id="form-2">
                                    <input type="hidden" name="id" id="add_id">
                                    <div class="form-group">
                                        <label for="kata">Kata 1</label>
                                        <select name="kata[]" class="form-control form-control-sm">
                                            <option value="">Pilih Kata</option>
                                            <?php foreach ($kata as $data) :?>
                                                <option value="<?= $data['id_kata']?>"><?= $data['arti'] . " " . $data['kata_arab']?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    <div id="tambah-kata"></div>
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class=  "btn btn-sm btn-danger mr-1" id="btn-hapus">hapus</a>
                                        <a href="#" class="btn btn-sm btn-success" id="btn-tambah">tambah</a>
                                    </div>
                                    <div class="d-flex justify-content-end mt-2">
                                        <input type="submit" value="tambah data" class="btn btn-sm btn-primary">
                                    </div>
                                </form>
                            <!-- tambah kata -->
                            
                            <!-- hapus kata -->
                                <form action="<?=base_url()?>admin/delete_kata_kalimat" method="post" id="form-3">
                                    <ul class="list-group text-right" id="list-kata">
                                    </ul>
                                    <div class="d-flex justify-content-end mt-3">
                                        <input type="submit" value="hapus" class="btn btn-danger btn-sm">
                                    </div>
                                </form>
                            <!-- hapus kata -->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
<!-- modal edit kalimat -->

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
            <a href="#modalAddKalimat" data-toggle="modal" class="btn btn-md btn-success btn-block modal-add-kalimat">Tambah Kalimat</a>
        </div>
        <?php foreach ($kalimat as $kalimat) :?>
            <div class="col-12 mb-2">
                <ul class="list-group shadow">
                    <li class="list-group-item text-right" style="font-size: 1.5em">
                        <?= $kalimat['kalimat_arab']?>
                    </li>
                    <li class="list-group-item d-flex justify-content-end">
                        <a href="#modalEditKalimat" data-toggle="modal" class="btn btn-sm btn-success modal-edit-kalimat" data-id="<?=$kalimat['id_kalimat']?>">edit</a>
                    </li>
                </ul>
            </div>
        <?php endforeach;?>
    </div>
</div>

<script>
    $("#tema").addClass("active");
    
    $("#form-2").hide();
    $("#form-3").hide();

    $("#btn-form-1").click(function(){
        $("#btn-form-1").addClass("active");
        $("#btn-form-2").removeClass("active");
        $("#btn-form-3").removeClass("active");

        $("#form-1").show();
        $("#form-2").hide();
        $("#form-3").hide();
    })
    
    $("#btn-form-2").click(function(){
        $("#btn-form-1").removeClass("active");
        $("#btn-form-2").addClass("active");
        $("#btn-form-3").removeClass("active");

        $("#form-1").hide();
        $("#form-2").show();
        $("#form-3").hide();
    })
    
    $("#btn-form-3").click(function(){
        $("#btn-form-1").removeClass("active");
        $("#btn-form-2").removeClass("active");
        $("#btn-form-3").addClass("active");

        $("#form-1").hide();
        $("#form-2").hide();
        $("#form-3").show();
    })
    
    $(".modal-edit-kalimat").click(function(){
        let id = $(this).data("id");
        
        $("#add_id").val(id);

        // data kalimat
            $.ajax({
                url : "<?=base_url()?>admin/get_kalimat_by_id",
                method : "POST",
                data : {id : id},
                async : true,
                dataType : 'json',
                success : function(data){
                    $("#edit_id").val(data.id_kalimat);
                    $("#edit_kalimat").val(data.kalimat_arab);
                    $("#edit_arti").val(data.arti)
                }
            })
        // data kalimat

        //data kata
            $.ajax({
                url : "<?= base_url()?>admin/get_detail_kata_kalimat",
                method : "POST",
                data : {id: id},
                async : true,
                dataType : 'json',
                success : function(data){
                    let html = '';
                    for (let i = 0; i < data.length; i++) {
                        html += '<li class="list-group-item d-flex justify-content-between">' + data[i].arti +' <span>'+data[i].kata_arab+' <input type="checkbox" name="kata[]" value="'+data[i].id+'"></span></li>'
                    } 
                    $("#list-kata").html(html)
                }
            })
        //data kata
    })

    // input kata
        var html = <?php echo json_encode($kata, JSON_PRETTY_PRINT);?>;
        var option = '';
        for (let i = 0; i < html.length; i++) {
            option += '<option value="' +html[i].id_kata+ '">' +html[i].arti+ ' ' +html[i].kata_arab+ '</option>';
        }

        var x = 1;
        var urut = 1;

        $("#btn-tambah").click(function(e){
            e.preventDefault();
            x++;
            $("#tambah-kata").append(`<div class="form-group" id="u`+x+`">`+
                                        `<label for="kata">Kata `+x+`</label>`+
                                        `<select name="kata[`+x+`]" class="form-control form-control-sm">`+
                                            `<option value="">Pilih Kata</option>`+option+
                                        `</select>`+
                                    `</div>`)
        })

        $("#btn-hapus").click(function(e){
            e.preventDefault();
            $("#u"+x).remove();
            x--;
            urut--;
        })

    // input kata
</script>

