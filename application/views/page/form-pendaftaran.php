<div class="container">
    <h5 class="mb-3 mt-3">Form Pendaftaran</h5>
    <?php if( $this->session->flashdata('pesan') ) : ?>
        <div class="row">
            <div class="col-12">
                <?=$this->session->flashdata('pesan')?>
            </div>
        </div>
    <?php endif; ?>
    <form action="<?= base_url()?>login/add_user" method="post" id="formPendaftaran">
        <ul class="list-group" id="profil">
            <li class="list-group-item list-group-item-primary"><i class="fa fa-user-circle"></i> Profil</li>
            <li class="list-group-item">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="form-control form-control-sm form-1" required>
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select name="jk" id="jk" class="form-control form-control-sm form-1" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tgl Lahir</label>
                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control form-control-sm form-1" required>
                </div>
            </li>
        </ul>
        <ul class="list-group" id="akun">
            <li class="list-group-item list-group-item-primary"><i class="fa fa-key"></i> Akun</li>
            <li class="list-group-item">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control form-control-sm form-1" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control form-control-sm form-1" required>
                </div>
            </li>
        </ul>
        <input type="submit" value="Daftar" class="btn btn-md btn-block btn-primary" id="btnSubmit">
    </form>
</div>

<script>
    $("#btnSubmit").click(function(){
        var c = confirm("Yakin akan mendaftarkan akun Anda?");
        return c;
    })
</script>