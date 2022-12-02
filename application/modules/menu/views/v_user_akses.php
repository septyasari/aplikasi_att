<div class="container-fluid">
  <h3><?= $judul; ?></h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('dashboard') ?>">Beranda</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $judul;?></li>
    </ol>
  </nav>
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <?php if (validation_errors()) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <?= validation_errors(); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php endif; ?>
          <?= $this->session->flashdata('message'); ?>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Active</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data_user as $no => $val): ?>
                  <tr>
                    <td><?= $no+1 ?></td>
                    <td><?= $val['name']?></td>
                    <td><?= $val['email']?></td>
                    <td>
                      <?php foreach ($data_role as $dr): ?>
                        <?php if ($val['role_id'] == $dr['id']): ?>
                          <?= $dr['role'] ?>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </td>
                    <td>
                      <?php if ($val['is_active'] == 1): ?>
                        Aktif
                      <?php else: ?>
                        Tidak aktif
                      <?php endif; ?>
                    </td>
                    <td>
                      <?php if ($val['name'] == 'admin'): ?>
                        <button href="#" class="btn btn-warning" disabled>Akses Role </button>
                        <button href="#" class="btn btn-danger" disabled>Hapus </button>
                      <?php else: ?>
                        <a href="<?= base_url('menu/akses_role/') . $val['id']?>" class="btn btn-warning">Akses Role </a>
                        <a href="<?= base_url('menu/akses_role_delete/') .  $val['id']?>" class="btn btn-danger" onClick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus </a>
                      <?php endif; ?>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
