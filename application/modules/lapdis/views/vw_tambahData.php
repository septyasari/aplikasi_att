<div class="container-fluid">
  <h3><?= $judul; ?></h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Beranda</a></li>
      <li class="breadcrumb-item"><a href="<?=base_url('lapdis');?>">Lapdis</a></li>
      <li class="breadcrumb-item"><a href="<?=base_url('lapdis/gsp')?>">GSP</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $judul;?></li>
    </ol>
  </nav>
    <div>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-gsp-tab" data-toggle="pill" href="#pills-gsp" role="tab" aria-controls="pills-gsp" aria-selected="true">GSP</a>
            </li>
        </ul>
    </div>
    
    <div class="card">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-gsp" role="tabpanel" aria-labelledby="pills-gsp-tab"> 
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <form class="user" method="post" enctype="multipart/form-data" action="<?= base_url('lapdis/tambahData')?>">
                            <tbody>
                                <?php echo $this->session->flashdata('message') ?>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Tanggal</span>
                                        </div>
                                            <input type="date" name="tanggal" class="form-control" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Regu Perampalan</span>
                                        </div>
                                        <input type="text" name="regu_perampalan" class="form-control" placeholder="Masukkan regu perampalan" aria-label="regu_perampalan" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">No Tiang / Gardu</span>
                                        </div>
                                        <input type="text" name="no_tiang/gardu" class="form-control" placeholder="Masukkan No Tiang Gardu" aria-label="no_tiang/gardu" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Penyulang</span>
                                        </div>
                                        <input type="text" name="penyulang" class="form-control" placeholder="Masukkan Penyulang" aria-label="penyulang" aria-describedby="basic-addon1">
                                    </div>
                                
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Jenis Pohon</span>
                                        </div>
                                        <input type="text" name="jenis_pohon" class="form-control" placeholder="Masukkan Jenis Pohon" aria-label="jenis_pohon" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Pohon</span>
                                        </div>
                                        <input type="text" name="pohon" class="form-control" placeholder="Masukkan pohon" aria-label="pohon" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Gardu</span>
                                        </div>
                                        <input type="text" name="gardu" class="form-control" placeholder="Masukkan Gardu" aria-label="gardu" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Layangan</span>
                                        </div>
                                        <input type="text" name="layangan" class="form-control" placeholder="Masukkan Layangan" aria-label="layangan" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Akar</span>
                                        </div>
                                        <input type="text" name="akar" class="form-control" placeholder="Masukkan Akar" aria-label="akar" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Animasi Guard</span>
                                        </div>
                                        <input type="text" name="animasi_guard" class="form-control" placeholder="Masukkan Animasi Guard" aria-label="animasi_guard" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Rantas</span>
                                        </div>
                                        <input type="text" name="rantas" class="form-control" placeholder="Masukkan Rantas" aria-label="rantas" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Lokasi</span>
                                        </div>
                                        <input type="text" name="lokasi" class="form-control" placeholder="Masukkan Lokasi" aria-label="lokasi" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Status</span>
                                        </div>
                                            <input type="text" name="status" class="form-control" placeholder="Masukkan status" aria-label="status" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Keterangan</span>
                                        </div>
                                            <input type="text" name="keterangan" class="form-control" placeholder="Masukkan keterangan" aria-label="keterangan" aria-describedby="basic-addon1">
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
    <a href="<?= base_url('lapdis/gsp')?>" class="btn btn-dark mr-auto" >Kembali</a>
</div>

  