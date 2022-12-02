<div class="container-fluid">
  <h3><?= $judul; ?></h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Beranda</a></li>
      <li class="breadcrumb-item"><a href="<?=base_url('wo');?>">WO</a></li>
      <li class="breadcrumb-item"><a href="<?=base_url('wo/inputwo')?>">Input Wo</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $judul;?></li>
    </ol>
  </nav>
    <div>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-inputwo-tab" data-toggle="pill" href="#pills-inputwo" role="tab" aria-controls="pills-inputwo" aria-selected="true">Input Wo</a>
            </li>
        </ul>
    </div>
    
    <div class="card">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-inputwo" role="tabpanel" aria-labelledby="pills-inputwo-tab"> 
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <form class="user" method="post" enctype="multipart/form-data" action="<?= base_url('wo/tambahDatawo')?>">
                            <tbody>
                                <?php echo $this->session->flashdata('message') ?>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Nomor</span>
                                        </div>
                                        <input type="text" name="nomor" class="form-control" placeholder="Masukkan Nomor" aria-label="nomor" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Perihal</span>
                                        </div>
                                        <input type="text" name="perihal" class="form-control" placeholder="Masukkan Perihal" aria-label="perihal" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">DiTugaskan Kepada</span>
                                        </div>
                                        <input type="text" name="tugas" class="form-control" placeholder="Masukkan Tugas" aria-label="tugas" aria-describedby="basic-addon1">
                                    </div>
                                
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Pekerjaan</span>
                                        </div>
                                        <input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan" aria-label="pekerjaan" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Lokasi</span>
                                        </div>
                                        <input type="text" name="lokasi" class="form-control" placeholder="Masukkan Lokasi" aria-label="lokasi" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Target</span>
                                        </div>
                                        <input type="text" name="target" class="form-control" placeholder="Masukkan Target" aria-label="target" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">realisasi</span>
                                        </div>
                                        <input type="text" name="realisasi" class="form-control" placeholder="Masukkan Realisasi" aria-label="realisasi" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="modal-footer">
                                            <button type="submit" class="btn btn-success mr-5">Simpan</button>
                                    </div>
                            </tbody>
                        </from>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <a href="<?= base_url('wo/inputwo')?>" class="btn btn-dark mr-auto" >Kembali</a>
</div>

  