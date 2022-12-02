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
    
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-se" role="tabpanel" aria-labelledby="pills-se-tab"> 
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <?php echo $this->session->flashdata('message') ?>
                                <form class="user" method="post" enctype="multipart/form-data" action="<?= base_url('lapdis/editdatase')?>">
                                <input type="hidden" name="data" value="se">

                                    <div class="form-group row">
                                        <label for="nama_gardu" class="col-sm-3 col-form-label">Nama Gardu</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="nama_gardu" class="form-control" value="<?=$se[0]['nama_gardu']?>"  aria-label="nama_gardu" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lokasi_gardu" class="col-sm-3 col-form-label">Lokasi Gardu</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="lokasi_gardu" class="form-control" value="<?=$se[0]['lokasi_gardu']?>"  aria-label="lokasi_gardu" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="ulp" class="col-sm-3 col-form-label">ULP</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="ulp" class="form-control" value="<?=$se[0]['ulp']?>"  aria-label="ulp" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="up3" class="col-sm-3 col-form-label">UP3</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="up3" class="form-control" value="<?=$se[0]['up3']?>"  aria-label="up3" aria-describedby="basic-addon1">
                                            </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="waktu_pelaksana" class="col-sm-3 col-form-label">Waktu Pelaksana</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="waktu_pelaksana" class="form-control" value="<?=$se[0]['waktu_pelaksana']?>"  aria-label="waktu_pelaksana" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="kva" class="col-sm-3 col-form-label">KVA</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="kva" class="form-control" value="<?=$se[0]['kva']?>"  aria-label="kva" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tipe_seal" class="col-sm-3 col-form-label">Tipe Seal</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="tipe_seal" class="form-control" value="<?=$se[0]['tipe_seal']?>"  aria-label="tipe_seal" aria-describedby="basic-addon1">
                                            </div>
                                    </div>
                                
                                    <div class="form-group row">
                                        <label for="kelas" class="col-sm-3 col-form-label">Kelas</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="kelas" class="form-control" value="<?=$se[0]['kelas']?>"  aria-label="kelas" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="kategori" class="form-control" value="<?=$se[0]['kategori']?>"  aria-label="kategori" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inspeksi_fisik" class="col-sm-3 col-form-label">Inspeksi Fisik</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="inspeksi_fisik" class="form-control" value="<?=$se[0]['inspeksi_fisik']?>"  aria-label="inspeksi_fisik" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="karakteristik_tier1" class="col-sm-3 col-form-label">Karakteristik Tier1</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="karakteristik_tier1" class="form-control" value="<?=$se[0]['karakteristik_tier1']?>"  aria-label="karakteristik_tier1" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="health_tier1" class="col-sm-3 col-form-label">Health Index</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="health_tier1" class="form-control" value="<?=$se[0]['health_tier1']?>"  aria-label="health_tier1" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="karakteristik_tier2" class="col-sm-3 col-form-label">Karakteristik Tier2</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="karakteristik_tier2" class="form-control" value="<?=$se[0]['karakteristik_tier2']?>"  aria-label="karakteristik_tier2" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="health_tier2" class="col-sm-3 col-form-label">Health Index</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="health_tier2" class="form-control" value="<?=$se[0]['health_tier2']?>"  aria-label="health_tier2" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tier3" class="col-sm-3 col-form-label">Tier3</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="tier3" class="form-control" value="<?=$se[0]['tier3']?>"  aria-label="tier3" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="health_index" class="col-sm-3 col-form-label">Health Index</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="health_index" class="form-control" value="<?=$se[0]['health_index']?>"  aria-label="health_index" aria-describedby="basic-addon1">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="catatan_perbaikan" class="col-sm-3 col-form-label">Catatan Perbaikan</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="catatan_perbaikan" class="form-control" value="<?=$se[0]['catatan_perbaikan']?>"  aria-label="catatan_perbaikan" aria-describedby="basic-addon1">
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
    <a href="<?= base_url('lapdis/se')?>" class="btn btn-dark mr-auto" >Kembali</a>
</div>

  