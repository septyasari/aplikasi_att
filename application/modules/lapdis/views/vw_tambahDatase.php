<div class="container-fluid">
  <h3><?= $judul; ?></h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Beranda</a></li>
      <li class="breadcrumb-item"><a href="<?=base_url('lapdis');?>">Lapdis</a></li>
      <li class="breadcrumb-item"><a href="<?=base_url('lapdis/se')?>">SE 017</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $judul;?></li>
    </ol>
  </nav>
    <div>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-se-tab" data-toggle="pill" href="#pills-se" role="tab" aria-controls="pills-se" aria-selected="true">SE 017</a>
            </li>
        </ul>
    </div>
    
    <div class="card">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-se" role="tabpanel" aria-labelledby="pills-se-tab"> 
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <form class="user" method="post" enctype="multipart/form-data" action="<?= base_url('lapdis/tambahDatase')?>">
                            <tbody>
                                <?php echo $this->session->flashdata('message') ?>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Nama Gardu</span>
                                        </div>
                                        <input type="text" name="nama_gardu" class="form-control" placeholder="Masukkan Nama Gardu" aria-label="nama_gardu" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Lokasi Gardu</span>
                                        </div>
                                        <input type="text" name="lokasi_gardu" class="form-control" placeholder="Masukkan Lokasi Gardu" aria-label="lokasi_gardu" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">ULP</span>
                                        </div>
                                        <input type="text" name="ulp" class="form-control" placeholder="Masukkan ULP" aria-label="ulp" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">UP3</span>
                                        </div>
                                        <input type="text" name="up3" class="form-control" placeholder="Masukkan UP3" aria-label="up3" aria-describedby="basic-addon1">
                                    </div>
                                    
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Waktu Pelaksana</span>
                                        </div>
                                            <input type="date" name="waktu_pelaksana" class="form-control" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">KVA</span>
                                        </div>
                                        <input type="text" name="kva" class="form-control" placeholder="Masukkan KVA" aria-label="kva" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Tipe Seal</span>
                                        </div>
                                        <input type="text" name="tipe_seal" class="form-control" placeholder="Masukkan Tipe Seal" aria-label="tipe_seal" aria-describedby="basic-addon1">
                                    </div>
                                
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Kelas</span>
                                        </div>
                                        <input type="text" name="kelas" class="form-control" placeholder="Masukkan kelas" aria-label="kelas" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Kategori</span>
                                        </div>
                                        <input type="text" name="kategori" class="form-control" placeholder="Masukkan Kategori" aria-label="kategori" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Inspeksi Fisik</span>
                                        </div>
                                        <input type="text" name="inspeksi_fisik" class="form-control" placeholder="Masukkan Inspeksi Fisik" aria-label="inspeksi_fisik" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Karakteristik Tier1</span>
                                        </div>
                                        <input type="text" name="karakteristik_tier1" class="form-control" placeholder="Masukkan Karakteristik Tier1" aria-label="karakteristik_tier1" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Health Index</span>
                                        </div>
                                        <input type="text" name="health_tier1" class="form-control" placeholder="Masukkan Health Index" aria-label="health_tier1" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Karakteristik Tier2</span>
                                        </div>
                                        <input type="text" name="karakteristik_tier2" class="form-control" placeholder="Masukkan Karakteristik Tier2" aria-label="karakteristik_tier2" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Health Index</span>
                                        </div>
                                        <input type="text" name="health_tier2" class="form-control" placeholder="Masukkan Health Index" aria-label="health_tier2" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Tier3</span>
                                        </div>
                                        <input type="text" name="tier3" class="form-control" placeholder="Masukkan Tier3" aria-label="tier3" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Health Index</span>
                                        </div>
                                            <input type="text" name="health_index" class="form-control" placeholder="Masukkan Health Index" aria-label="health_index" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Catatan Perbaikan</span>
                                        </div>
                                            <input type="text" name="catatan_perbaikan" class="form-control" placeholder="Masukkan Catatan Perbaikan" aria-label="catatan_perbaikan" aria-describedby="basic-addon1">
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
    <a href="<?= base_url('lapdis/se')?>" class="btn btn-dark mr-auto" >Kembali</a>
</div>

  