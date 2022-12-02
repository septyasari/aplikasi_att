<div class="container-fluid">
  <h3><?= $judul; ?></h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Beranda</a></li>
      <li class="breadcrumb-item"><a href="<?= base_url('user');?>">Profil Saya</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $judul;?></li>
    </ol>
  </nav>
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">

          <!-- <form class="" action="index.html" method="post" enctype="multipart/form-data"> -->
          <?= form_open_multipart('user/edit');?>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="email" name="email" value="<?= $user['email'] ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="Nama Panjang">Nama Panjang </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'] ?>">
                <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-2">Gambar</div>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-sm-3">
                    <img src="<?= base_url('assets/img/profile/') . $user['image']?>" class="img-thumbnail">
                  </div>
                  <div class="col-sm-9">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="image" name="image">
                      <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Edit</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
