<div class="container-fluid">
  <h3><?= $judul; ?></h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('dashboard') ?>">Beranda</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $judul; ?></li>
    </ol>
  </nav>
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <?= $this->session->flashdata('message'); ?>
          <form class="" action="<?= base_url("user/changePassword") ?>" method="post">
            <div class="form-group row">
              <label for="current_password" class="col-sm-2 col-form-label">Password saat ini</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="current_password" name="current_password">
                <?= form_error('current_password', '<small class="text-danger">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="new_password1" class="col-sm-2 col-form-label">Password baru</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="new_password1" name="new_password1">
                <?= form_error('new_password1', '<small class="text-danger">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="new_password2" class="col-sm-2 col-form-label">Konfirmasi Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="new_password2" name="new_password2">
                <?= form_error('new_password2', '<small class="text-danger">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row">
              <button type="submit" class="btn btn-primary btn-lg btn-block">Ubah Password</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
