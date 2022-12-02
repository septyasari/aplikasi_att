<div class="container-fluid">
  <h3><?= $judul; ?></h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Beranda</a></li>
      <li class="breadcrumb-item"><a href="<?= base_url('menu');?>">Menu</a></li>
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
            <form class="" action="<?= base_url('menu/menu_update') ?>" method="post">
              <?php foreach ($menu as $m): ?>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Menu</label>
                <div class="col-sm-9">
                  <input type="hidden" id="id" name="id" class="form-control" value="<?= $m['id'] ?>">
                  <input type="text" id="menu" name="menu" class="form-control" value="<?= $m['menu'] ?>">
                </div>
              </div>
              <div class="modal-footer">
                <a href="<?= base_url('menu')?>" class="btn btn-dark mr-auto">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
              <?php endforeach; ?>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>
