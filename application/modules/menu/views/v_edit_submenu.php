<div class="container-fluid">
  <h3><?= $judul; ?></h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Beranda</a></li>
      <li class="breadcrumb-item"><a href="<?= base_url('menu/submenu');?>">Submenu</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $judul;?></li>
    </ol>
  </nav>
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
          <?php if (validation_errors()) : ?>
              <div class="alert alert-danger" role="alert">
                  <?= validation_errors(); ?>
              </div>
          <?php endif; ?>
          <?= $this->session->flashdata('message'); ?>
        <div class="card-body">
          <form class="" action="<?= base_url('menu/sub_update') ?>" method="post">
            <?php foreach ($submenu as $sm): ?>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Judul</label>
                <div class="col-sm-9">
                  <input type="hidden" name="id" value="<?= $sm['id'] ?>">
                  <input type="text" name="title" value="<?= $sm['title'] ?>" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Menu</label>
                <div class="col-sm-9">
                  <select class="form-control" name="menu">
                    <?php foreach ($menu as $m): ?>
                      <?php if ($m['id'] == $sm['menu_id']): ?>
                        <option value="<?= $m['id'] ?>" selected><?= $m['menu'] ?></option>
                      <?php endif; ?>
                      <option value="<?= $m['id'] ?>"><?= $m['menu'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">URL</label>
                <div class="col-sm-9">
                  <input type="text" name="url" value="<?= $sm['url'] ?>" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Ikon</label>
                <div class="col-sm-9">
                  <input type="text" name="icon" value="<?= $sm['icon'] ?>" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Aktif Menu</label>
                <div class="col-sm-9">
                  <?php if ($sm['is_active'] == 1): ?>
                    <input type="checkbox" name="aktif" value="1" checked>
                  <?php else: ?>
                    <input type="checkbox" name="aktif" value="1" >
                  <?php endif; ?>
                  <?php
                  if (isset($_POST['aktif'])) {
                    $aktif = $_POST['aktif'];
                  } else {
                    $aktif = 0;
                  }
                   ?>
                </div>
              </div>
              <div class="modal-footer">
                <a href="<?= base_url('menu/submenu') ?>" class="btn btn-dark mr-auto">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            <?php endforeach; ?>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
