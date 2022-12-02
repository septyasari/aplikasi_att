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
          <?= $this->session->flashdata('message'); ?>
          <?= form_error('menu', '<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>') ?>
          <div class="card-body">
              <a href="#" class="btn btn-primary mb-3 btn-lg btn-block" data-toggle="modal" data-target="#newRoleModal">
                <i class="mdi mdi-plus"></i>
                Tambah Role</a>
              <table class="table table-hover">
                  <thead>
                      <tr>
                          <th scope="col" width="20%" class="text-center">#</th>
                          <th scope="col" width="60%">Menu</th>
                          <th scope="col" class="text-center">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($role as $no => $r) : ?>
                          <tr>
                              <th scope="row" class="text-center"><?= $no + 1 ?></th>
                              <td><?= $r['role'] ?></td>
                              <td class="text-center">
                                  <a href="<?= base_url('menu/roleaccess/') . $r['id']; ?>" class="badge badge-warning">Akses</a>
                                  <a href="#" class="badge badge-success">Edit</a>
                                  <a href="#" class="badge badge-danger">Delete</a>
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

<!-- Modal -->
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/role'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="Nama role" maxlength="20">
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
