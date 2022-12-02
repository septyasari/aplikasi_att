<div class="container-fluid">
  <h3><?= $judul; ?></h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('dashboard') ?>">Beranda</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $judul;?></li>
    </ol>
  </nav>
  <div class="card mb-3" style="max-width: 540px;">
    <?= $this->session->flashdata('message'); ?>
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="card-img" alt="images">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?= $user['name'] ?></h5>
          <p class="card-text">Email : <?= $user['email'] ?></p>
          <p class="card-text"><small class="text-muted">Akun ini dibuat pada : <?= date('d F Y', $user['date_created']) ?></small></p>
        </div>
      </div>
    </div>
  </div>
</div>
