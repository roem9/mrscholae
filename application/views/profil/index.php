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
                        <input type="hidden" name="id_user" id="id_user_edit">
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
                <div class="col-12 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item"><i class="fa fa-user mr-2"></i><?= $user['nama']?></li>
                        <li class="list-group-item"><i class="fa fa-envelope mr-2"></i><?= $user['email']?></li>
                        <li class="list-group-item list-group-item-warning">Waktu berlangganan Anda akan habis pada tanggal <strong><?= date('d-M-Y', strtotime($user['tgl_langganan']))?></strong></li>
                    </ul>
                </div>
                <div class="col-12 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-info"><strong>Pengaturan Sandi</strong></li>
                        <li class="list-group-item">
                            <form action="profil/edit_password" method="post">
                                <div class="form-group">
                                    <label for="pass">Password Baru</label>
                                    <input type="password" name="password" id="password" class="form-control form-control-sm">
                                </div>
                                <div class="form-group">
                                    <label for="konfirm_pass">Konfirm Password</label>
                                    <input type="password" name="password2" id="password2" class="form-control form-control-sm">
                                </div>
                                <div class="d-flex justify-content-end">
                                    <input type="submit" value="Ubah Password" class="btn btn-sm btn-success" id="btnSubmitEditPassword">
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

    // $("#ubah-password").click(function(){
    //     var c = confirm("Yakin akan mengubah password?");
    //     return c;
    // })
</script>