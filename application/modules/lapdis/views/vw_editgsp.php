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
    
    
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-gsp" role="tabpanel" aria-labelledby="pills-gsp-tab"> 
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <?php echo $this->session->flashdata('message') ?>
                                <form class="user" method="post" enctype="multipart/form-data" action="<?= base_url('lapdis/editdatagsp')?>">
                                <input type="hidden" name="data" value="gsp">
                        
                                    <div class="form-group row">
                                        <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                                            <div class="col-sm-8">
                                                <input type="date" name="tanggal" class="form-control" value="<?=$gsp['tanggal']?>"  aria-label="tanggal" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="regu_perampalan" class="col-sm-3 col-form-label">Regu Perampalan</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="regu_perampalan" class="form-control" value="<?=$gsp['regu_perampalan']?>"  aria-label="regu_perampalan" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="no_tiang/gardu" class="col-sm-3 col-form-label">No Tiang / Gardu</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="no_tiang/gardu" class="form-control" value="<?=$gsp['no_tiang/gardu']?>"  aria-label="no_tiang/gardu" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="penyulang" class="col-sm-3 col-form-label">Penyulang</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="penyulang" class="form-control" value="<?=$gsp['penyulang']?>"  aria-label="penyulang" aria-describedby="basic-addon1">
                                            </div>
                                    </div>
                                
                                    <div class="form-group row">
                                        <label for="jenis_pohon" class="col-sm-3 col-form-label">Jenis Pohon</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="jenis_pohon" class="form-control" value="<?=$gsp['jenis_pohon']?>"  aria-label="jenis_pohon" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="pohon" class="col-sm-3 col-form-label">Pohon</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="pohon" class="form-control" value="<?=$gsp['pohon']?>"  aria-label="pohon" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="gardu" class="col-sm-3 col-form-label">Gardu</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="gardu" class="form-control" value="<?=$gsp['gardu']?>"  aria-label="gardu" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="layangan" class="col-sm-3 col-form-label">Layangan</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="layangan" class="form-control" value="<?=$gsp['layangan']?>"  aria-label="layangan" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="akar" class="col-sm-3 col-form-label">Akar</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="akar" class="form-control" value="<?=$gsp['akar']?>"  aria-label="akar" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="animal_guard" class="col-sm-3 col-form-label">Animasi Guard</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="animal_guard" class="form-control" value="<?=$gsp['animal_guard']?>"  aria-label="animal_guard" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="rantas" class="col-sm-3 col-form-label">Rantas</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="rantas" class="form-control" value="<?=$gsp['rantas']?>"  aria-label="rantas" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lokasi" class="col-sm-3 col-form-label">Lokasi</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="lokasi" class="form-control" value="<?=$gsp['lokasi']?>"  aria-label="lokasi" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="status" class="col-sm-3 col-form-label">Status</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="status" class="form-control" value="<?=$gsp['status']?>"  aria-label="status" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="keterangan" class="form-control" value="<?=$gsp['keterangan']?>"  aria-label="keterangan" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="modal-footer">
                                            <button type="submit" class="btn btn-success mr-5">Simpan</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal-footer">
    <a href="<?= base_url('lapdis/gsp')?>" class="btn btn-dark mr-auto" >Kembali</a>
</div>

  