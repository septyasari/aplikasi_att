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
    
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-pp" role="tabpanel" aria-labelledby="pills-pp-tab"> 
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <?php echo $this->session->flashdata('message') ?>
                                    <form class="user" method="post" enctype="multipart/form-data" action="<?= base_url('lapdis/editdatapp')?>">
                                    <input type="hidden" name="data" value="pp">

                                        <div class="form-group row">
                                            <label for="tgl_pekerjaan" class="col-sm-3 col-form-label">Tanggal Pekerjaan</label>
                                                <div class="col-sm-8">
                                                    <input type="date" name="tgl_pekerjaan" class="form-control" value="<?=$pp[0]['tgl_pekerjaan']?>"  aria-label="tgl_pekerjaan" aria-describedby="basic-addon1">
                                                </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="no_tiang/gardu" class="col-sm-3 col-form-label">No Tiang / Gardu</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="no_tiang/gardu" class="form-control" value="<?=$pp[0]['no_tiang/gardu']?>"  aria-label="no_tiang/gardu" aria-describedby="basic-addon1">
                                                </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="penyulang" class="col-sm-3 col-form-label">Penyulang</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="penyulang" class="form-control" value="<?=$pp[0]['penyulang']?>"  aria-label="penyulang" aria-describedby="basic-addon1">
                                                </div>
                                        </div>
                                    
                                        <div class="form-group row">
                                            <label for="kontruksi" class="col-sm-3 col-form-label">Kontruksi</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="kontruksi" class="form-control" value="<?=$pp[0]['kontruksi']?>"  aria-label="kontruksi" aria-describedby="basic-addon1">
                                                </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="jumlah" class="col-sm-3 col-form-label">Jumlah</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="jumlah" class="form-control" value="<?=$pp[0]['jumlah']?>"  aria-label="jumlah" aria-describedby="basic-addon1">
                                                </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="lokasi" class="col-sm-3 col-form-label">Lokasi</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="lokasi" class="form-control" value="<?=$pp[0]['lokasi']?>"  aria-label="lokasi" aria-describedby="basic-addon1">
                                                </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="uraian_pekerjaan" class="col-sm-3 col-form-label">Uraian Pekerjaan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="uraian_pekerjaan" class="form-control" value="<?=$pp[0]['uraian_pekerjaan']?>"  aria-label="uraian_pekerjaan" aria-describedby="basic-addon1">
                                                </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="sebelum" class="col-sm-3 col-form-label">Sebelum</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="sebelum" class="form-control" value="<?=$pp[0]['sebelum']?>"  aria-label="sebelum" aria-describedby="basic-addon1">
                                                </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="pekerjaan" class="form-control" value="<?=$pp[0]['pekerjaan']?>"  aria-label="pekerjaan" aria-describedby="basic-addon1">
                                                </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="sesudah" class="col-sm-3 col-form-label">Sesudah</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="sesudah" class="form-control" value="<?=$pp[0]['sesudah']?>"  aria-label="sesudah" aria-describedby="basic-addon1">
                                                </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="petugas_pelaksana" class="col-sm-3 col-form-label">Petugas Pelaksana</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="petugas_pelaksana" class="form-control" value="<?=$pp[0]['petugas_pelaksana']?>"  aria-label="petugas_pelaksana" aria-describedby="basic-addon1">
                                                </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="keterangan" class="form-control" value="<?=$pp[0]['keterangan']?>"  aria-label="keterangan" aria-describedby="basic-addon1">
                                                </div>
                                        </div>

                                        <div class="modal-footer">
                                                <button type="submit" class="btn btn-success mr-5">Simpan</button>
                                        </div>
                                    </from>

                            </div>
                        </div>
                            
                                
                                    
                    </div>
                </div>
            </div>
        </div>
</div>

<div class="modal-footer">
    <a href="<?= base_url('lapdis/pp')?>" class="btn btn-dark mr-auto" >Kembali</a>
</div>

  