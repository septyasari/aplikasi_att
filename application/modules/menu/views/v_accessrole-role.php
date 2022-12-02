<div class="container-fluid">
  <h3><?= $judul; ?></h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Beranda</a></li>
      <li class="breadcrumb-item"><a href="<?= base_url('menu/role');?>">Role Akses</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $judul;?></li>
    </ol>
  </nav>
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
          <?= $this->session->flashdata('message'); ?>

          <h4 class="badge badge-info">Role : <?= $role['role']; ?></h4>
          <table class="table table-hover">
              <thead>
                  <tr>
                      <th scope="col" width="20%" class="text-center">#</th>
                      <th scope="col" width="60%">Menu</th>
                      <th scope="col" class="text-center">Akses</th>
                  </tr>
              </thead>
              <tbody>
                  <?php foreach ($menu as $no => $m) : ?>
                      <tr>
                          <th scope="row" class="text-center"><?= $no + 1 ?></th>
                          <td><?= $m['menu']; ?></td>
                          <td class="text-center">
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
                              </div>
                          </td>
                      </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>

      </div>
    </div>
  </div>
</div>
