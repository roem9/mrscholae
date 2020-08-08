<!-- modal detail -->
    <div class="modal fade" id="modalEditUser" tabindex="-1" role="dialog" aria-labelledby="modalEditUserTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditUserTitle">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url()?>beranda/edit_user_by_id" method="post">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" id="nama_edit" class="form-control form-control-sm" required>
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <select name="jk" id="jk_edit" class="form-control form-control-sm" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tgl Lahir</label>
                            <input type="date" name="tgl_lahir" id="tgl_lahir_edit" class="form-control form-control-sm" required>
                        </div>
                        <div class="d-flex justify-content-end">
                            <input type="submit" value="Edit Data" class="btn btn-sm btn-success" id="btnSubmitmodalEditUser">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- modal detail -->

<!-- modal detail kosa kata -->
<div class="modal fade" id="modalKosaKata" tabindex="-1" role="dialog" aria-labelledby="modalKosaKataTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalKosaKataTitle">Kosa Kata</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <div id="listKata"></div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!-- modal detail kosa kata -->

        <div class="container">
            <?php if( $this->session->flashdata('pesan') ) : ?>
                <div class="row">
                    <div class="col-12">
                        <?=$this->session->flashdata('pesan')?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-12 col-md-4 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-info d-flex justify-content-between"><span><i class="fa fa-book mr-3"></i> Akademik</span> <a href="#modalEditUser" data-toggle="modal" data-id="<?= $user['id_user']?>" class="btnModalEditUser text-success">edit <i class="fa fa-pen"></i></a></li>
                        <li class="list-group-item"><i class="fa fa-user-tie mr-2"></i> <?= $dosen['nama_dosen']?></li>
                        <li class="list-group-item"><i class="fa fa-building mr-2"></i> <?= $kelas['nama_kelas']?></li>
                        <li class="list-group-item"><i class="fa fa-user mr-2"></i><?= $user['nama']?></li>
                        <?php if($kata >= $kelas['kata']):?>
                            <li class="list-group-item d-flex justify-content-between"><span class="btn btn-sm btn-outline-success">Kosa Kata : <?= $kata?> / <?= $kelas['kata']?></span> <i class="fa fa-check-circle text-success"></i></li>
                        <?php else:?>
                            <li class="list-group-item d-flex justify-content-between"><span class="btn btn-sm btn-outline-danger">Kosa Kata : <?= $kata?> / <?= $kelas['kata']?></span> <span><i class="fa fa-times-circle text-danger"></i></span></li>
                        <?php endif;?>
                        <?php if($latihan >= $kelas['latihan']):?>
                            <li class="list-group-item d-flex justify-content-between"><span class="btn btn-sm btn-outline-success">Latihan : <?= $latihan?> / <?= $kelas['latihan']?></span> <i class="fa fa-check-circle text-success"></i></li>
                        <?php else:?>
                            <li class="list-group-item d-flex justify-content-between"><span class="btn btn-sm btn-outline-danger">Latihan : <?= $latihan?> / <?= $kelas['latihan']?></span> <span><i class="fa fa-times-circle text-danger"></i></span></li>
                        <?php endif;?>
                        <!-- <li class="list-group-item d-flex justify-content-between"><span><i class="fa fa-language mr-2"></i><?= $kata?> Kosa Kata</span> <a href="#modalKosaKata" data-id="<?= $user['id_user']?>" data-toggle="modal" class="modalKosaKata badge badge-info">detail</a></li> -->
                    </ul>
                </div>
                
                <div class="col-12 col-md-4 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-info d-flex justify-content-between"><span><i class="fa fa-key mr-3"></i> Ganti Password</span></li>
                        <li class="list-group-item">
                            <form action="<?= base_url()?>beranda/edit_password" method="post">
                                <input type="hidden" name="id_user" value="<?= $user['id_user']?>">
                                <div class="form-group">
                                    <label for="password">Password Baru</label>
                                    <input type="password" name="password" id="password" class="form-control form-control-sm" required>
                                </div>
                                <div class="form-group">
                                    <label for="password2">Konfirm Password</label>
                                    <input type="password" name="password2" id="password2" class="form-control form-control-sm" required>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <input type="submit" value="Ganti Password" class="btn btn-sm btn-primary" id="btnSubmitEditPassword">
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>

<script>
    $(".btnModalEditUser").click(function(){
        let id = $(this).data("id");

        $.ajax({
            url: "<?= base_url()?>beranda/get_user_by_id",
            data: {id: id},
            async: true,
            method: "POST",
            dataType: "json",
            success: function(data){
                $("#id_user_edit").val(data.id_user);
                $("#nama_edit").val(data.nama);
                $("#tgl_lahir_edit").val(data.tgl_lahir);
                $("#jk_edit").val(data.jk);
            }
        })
    })

    $(".modalKosaKata").click(function(){
        let id = $(this).data("id");

        $.ajax({
            url: "<?= base_url()?>beranda/get_kata_user_by_id_user",
            data: {id: id},
            async: true,
            method: "POST",
            dataType: "json",
            success: function(data){
                // console.log(data)
                let html = '';
                for (let i = 0; i < data.length; i++) {
                    if(data[i].latihan == 2){
                        html += `<li class="list-group-item d-flex justify-content-between"><span><b>`+data[i].tema+`</b></span>`+data[i].kata+` </li>`;
                    }
                }
                $("#listKata").html(html)
            }
        })
    })

    $("#btnSubmitmodalEditUser").click(function(){
        var c = confirm("Yakin akan mengubah data?");
        return c;
    })

    $("#btnSubmitEditPassword").click(function(){
        if($("#password").val() == $("#password2").val()){
            var c = confirm("Yakin akan mengubah password?")
            return c;
        } else {
            alert("Password baru dan konfirm password harus sama");
            $("#password").val('');
            $("#password2").val('');
            return false;
        }
    })
</script>