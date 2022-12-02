<div class="col-lg-4 mx-auto">
    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
        <h3 class="text-title text-center mb-3">Daftar</h3>
            
        <form class="user" method="post" action="<?= base_url('auth/register') ?>">
            
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control p_input" id="name" name="name" placeholder="Masukkan username" value="<?= set_value('name'); ?>">
                <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control p_input" id="email" name="email" placeholder="Masukkan email" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control p_input" id="password1" name="password1" placeholder="Masukkan password">
                <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="form-group">
                <label>Konfirmasi Password</label>
                <input type="password" class="form-control p_input" id="password2" name="password2" placeholder="Masukkan password">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block enter-btn">Daftar</button>
            </div>

            <p class="sign-up text-center mt-4 font-weight-light">Sudah Memiliki akun ?<a href="<?= base_url('auth') ?>"> Masuk </a></p>
            
        </form>
    </div>
</div>