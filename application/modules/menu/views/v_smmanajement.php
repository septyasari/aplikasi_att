<div class="container-fluid">
  <h3><?= $judul; ?></h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Beranda</a></li>
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
              <a href="#" class="btn btn-primary mb-3 btn-lg btn-block" data-toggle="modal" data-target="#newSubMenuModal">
                <i class="mdi mdi-plus"></i>
                Tambah Submenu
              </a>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Judul</th>
                      <th scope="col">Menu</th>
                      <th scope="col">URL</th>
                      <th scope="col">Ikon</th>
                      <th scope="col" class="text-center">Aktifasi</th>
                      <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($menu as $no => $sm) : ?>
                      <tr>
                        <th scope="row"><?= $no + 1 ?></th>
                        <td><?= $sm['title'] ?></td>
                        <td><?= $sm['menu'] ?></td>
                        <td><?= $sm['url'] ?></td>
                        <td><?= $sm['icon'] ?></td>
                        <td class="text-center">
                          <?php if ($sm['is_active'] == 1): ?>
                            Aktif
                          <?php else: ?>
                            Tidak Aktif
                          <?php endif; ?>
                          <!-- <?= $sm['is_active'] ?> -->
                        </td>
                        <td class="text-center">
                          <a href="<?= base_url('menu/edit_sub/') . $sm['id'] ?>" class="badge badge-success">Edit</a>
                          <a href="<?= base_url('menu/sub_delete/') . $sm['id']?>" class="badge badge-danger" onClick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
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

<!-- Modal -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Submenu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/submenu') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Nama submenu" maxlength="20">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="">Pilih menu</option>
                            <?php foreach ($get_menu as $m) : ?>
                                <option value="<?= $m['id'] ?>"><?= $m['menu'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="URL submenu" maxlength="20">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Icon submenu" maxlength="20">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                            <label class="form-check-label" for="is_active">
                                Aktif ?
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
