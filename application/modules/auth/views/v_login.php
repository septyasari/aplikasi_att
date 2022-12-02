<div class="col-lg-4 mx-auto">
    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
        <h3 class="card-title text-center mb-3">Masuk</h3>
        <?= $this->session->flashdata('message'); ?>

        <h6 class="font-weight-light text-center">Silahkan masukkan email dan password untuk login</h6>
        <form class="user" method="post" action="<?= base_url('auth') ?>">
            <div class=" form-group">
                <input type="text" class="form-control p_input" id="email" name="email" placeholder="Masukkan email..." value="<?= set_value('email') ?>">
                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Masukkan password..." class="form-control p_input">
                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block enter-btn">Masuk</button>
            </div>

            <p class="sign-up text-center mt-4 font-weight-light">Tidak punya akun ?<a href="<?= base_url('auth/register') ?>"> Daftar</a></p>
        </form>
    </div>
</div>