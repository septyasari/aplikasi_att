<div class="container-fluid">
  <h3><?= $judul; ?></h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('dashboard') ?>">Beranda</a></li>
      <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('menu/user_akses') ?>">User Akses</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $judul;?></li>
    </ol>
  </nav>
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <form class="" action="<?= base_url('menu/akses_role_update') ?>" method="post">
            <?php foreach ($data_user as $du): ?>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Role</label>
                <div class="col-sm-9">
                  <input type="hidden" name="id" value="<?= $du['id'] ?>">
                  <select class="form-control" name="role_Id">
                    <?php foreach ($data_role as $no => $ds): ?>
                      <?php if ($ds['id'] == $du['role_id']): ?>
                        <option value="<?= $ds['id'] ?>" selected><?= $ds['role'] ?></option>
                      <?php else: ?>
                        <option value="<?= $ds['id'] ?>"><?= $ds['role'] ?></option>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label  class="col-sm-3 col-form-label" >Aktifasi</label>
                <div class="col-sm-9">
                  <?php if ($du['is_active'] == 1): ?>
                    <input type="checkbox" name="aktif" value="1" checked>
                  <?php else: ?>
                    <input type="checkbox" name="aktif" value="1" >
                  <?php endif; ?>
                </div>
              </div>
              <div class="modal-footer">
                <a href="<?= base_url('menu/user_akses') ?>" class="btn btn-dark mr-auto">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            <?php endforeach; ?>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
