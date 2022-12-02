<div class="container-fluid">
  <h3><?= $judul; ?></h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Beranda</a></li>
      <li class="breadcrumb-item"><a href="<?=base_url('lapdis');?>">Lapdis</a></li>
      <li class="breadcrumb-item"><a href="<?=base_url('lapdis/pp')?>">Pekerjaan Pemeliharaan</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $judul;?></li>
    </ol>
  </nav>
    <div>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-pp-tab" data-toggle="pill" href="#pills-pp" role="tab" aria-controls="pills-pp" aria-selected="true">Pekerjaan Pemeliharaan</a>
            </li>
        </ul>
    </div>
    
    <div class="card">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-pp" role="tabpanel" aria-labelledby="pills-pp-tab"> 
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <form class="user" method="post" enctype="multipart/form-data" action="<?= base_url('lapdis/tambahDatapp')?>">
                            <tbody>
                                <?php echo $this->session->flashdata('message') ?>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Tanggal Pekerjaan</span>
                                        </div>
                                            <input type="date" name="tgl_pekerjaan" class="form-control" aria-describedby="basic-addon1">
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
                                            <span class="input-group-text" id="basic-addon1">Kontruksi</span>
                                        </div>
                                        <input type="text" name="kontruksi" class="form-control" placeholder="Masukkan Kontruksi" aria-label="kontruksi" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Jumlah</span>
                                        </div>
                                        <input type="text" name="jumlah" class="form-control" placeholder="Masukkan jumlah" aria-label="jumlah" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Lokasi</span>
                                        </div>
                                        <input type="text" name="lokasi" class="form-control" placeholder="Masukkan lokasi" aria-label="lokasi" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Uraian Pekerjaan</span>
                                        </div>
                                        <input type="text" name="uraian_pekerjaan" class="form-control" placeholder="Masukkan Uraian Pekerjaan" aria-label="uraian_pekerjaan" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Sebelum</span>
                                        </div>
                                        <input type="text" name="sebelum" class="form-control" placeholder="Masukkan Sebelum" aria-label="sebelum" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Pekerjaan</span>
                                        </div>
                                        <input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan" aria-label="pekerjaan" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Sesudah</span>
                                        </div>
                                        <input type="text" name="sesudah" class="form-control" placeholder="Masukkan Sesudah" aria-label="sesudah" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Petugas Pelaksana</span>
                                        </div>
                                        <input type="text" name="petugas_pelaksana" class="form-control" placeholder="Masukkan Petugas Pelaksana" aria-label="petugas_pelaksana" aria-describedby="basic-addon1">
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
    <a href="<?= base_url('lapdis/pp')?>" class="btn btn-dark mr-auto" >Kembali</a>
</div>

  