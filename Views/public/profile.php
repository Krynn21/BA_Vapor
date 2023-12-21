<header>
    <?php include 'layouts/_header.php'; ?>
</header>

<!-- ini bagian toast notifikasi -->

<div class="container">
    <div class="flex flex-wrap mx-6 gap-4 md:gap-0">
        <h1>Profil
            <?= $_SESSION['username'] ?>
        </h1>
        <small>Silahkan Masukkan untuk memperbarui profil</small>
        <hr>
        <form action="profile" method="POST">
            <input type="hidden" name="id" value="${user.id}">
            <div class="row mb-3">
                <label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                        placeholder="Nama nama_lengkap" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal lahir</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                        placeholder="yyyy-mm-dd" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat lahir</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                        placeholder="Tempat Lahir">
                </div>
            </div>
            <div class="row mb-3">
                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-9">
                    <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat"
                        rows="3"></textarea>
                </div>
            </div>
            <fieldset>
                <legend class="col-form-label col-sm-3 pt-0">Roles</legend>
                <div class="col-sm-9">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="adminRadio" value="1"
                            ${user.role==1 ? 'checked' : '' }>
                        <label class="form-check-label" for="adminRadio">Admin</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="gridRadios2" value="0"
                            ${user.role==0 ? 'checked' : '' }>
                        <label class="form-check-label" for="gridRadios2">User</label>
                    </div>
                </div>
            </fieldset>
            <hr />
            <div class="float-end">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>

<?php include 'layouts/_footer.php'; ?>