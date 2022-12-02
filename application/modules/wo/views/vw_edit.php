<div class="container-fluid">
  <h3><?= $judul; ?></h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Beranda</a></li>
      <li class="breadcrumb-item"><a href="<?=base_url('wo');?>">WO</a></li>
      <li class="breadcrumb-item"><a href="<?=base_url('wo/monitoring')?>">Monitoring</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $judul;?></li>
    </ol>
  </nav>
</div>

    <div>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-monitoring-tab" data-toggle="pill" href="#pills-monitoring" role="tab" aria-controls="pills-monitoring" aria-selected="true">Monitoring</a>
            </li>
        </ul>
    </div>

     <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-monitoring" role="tabpanel" aria-labelledby="pills-monitoring-tab"> 
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <?php echo $this->session->flashdata('message') ?>
                                <form class="user" method="post" action="<?= base_url('wo/edit')?>">
                                <input type="hidden" name="data" value="monitoring">

                                    <div class="form-group row">
                                        <label for="no_wo" class="col-sm-3 col-form-label">No WO</label>
                                            <div class="col-sm-8">
                                                <input name="no_wo" class="form-control typeahead" value="<?=$monitoring[0]['no_wo']?>" type="text"  required>
                                            </div>
                                    </div>

                                     <div class="form-group row">
                                        <label for="tgl_terbit" class="col-sm-3 col-form-label">Tanggal Terbit</label>
                                            <div class="col-sm-8">
                                                <input name="tgl_terbit" class="form-control typeahead" value="<?=$monitoring[0]['tgl_terbit']?>" type="date"  required>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="uraian_pekerjaan" class="col-sm-3 col-form-label">Uraian Pekerjaan</label>
                                            <div class="col-sm-8">
                                                <input name="uraian_pekerjaan"  class="form-control typeahead" value="<?=$monitoring[0]['uraian_pekerjaan']?>" type="text"  required>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lokasi" class="col-sm-3 col-form-label">Lokasi</label>
                                            <div class="col-sm-8">
                                                <input name="lokasi"  class="form-control typeahead" value="<?=$monitoring[0]['lokasi']?>" type="text"  required>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="vol_target" class="col-sm-3 col-form-label">Vol Target</label>
                                            <div class="col-sm-8">
                                                <input name="vol_target"  class="form-control typeahead" value="<?=$monitoring[0]['vol_target']?>" type="text"  required>
                                            </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="satuan_target" class="col-sm-3 col-form-label">Satuan Target</label>
                                            <div class="col-sm-8">
                                                <input name="satuan_target" class="form-control typeahead" value="<?=$monitoring[0]['satuan_target']?>" type="text"  required>
                                            </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="vol_realisasi" class="col-sm-3 col-form-label">Vol Realisasi</label>
                                            <div class="col-sm-8">
                                                <input name="vol_realisasi" class="form-control typeahead" value="<?=$monitoring[0]['vol_realisasi']?>" type="text"  required>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="satuan_realisasi" class="col-sm-3 col-form-label">Satuan Realisasi</label>
                                            <div class="col-sm-8">
                                                <input name="satuan_realisasi" class="form-control typeahead" value="<?=$monitoring[0]['satuan_realisasi']?>" type="text"  required>
                                            </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="tgl_realisasi" class="col-sm-3 col-form-label">Tanggal Realisasi</label>
                                            <div class="col-sm-8">
                                                <input name="tgl_realisasi" class="form-control typeahead" value="<?=$monitoring[0]['tgl_realisasi']?>" type="date"  required>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                                            <div class="col-sm-8">
                                                 <input name="keterangan" class="form-control typeahead" value="<?=$monitoring[0]['keterangan']?>" type="text"  required>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-3 col-form-label">Status</label>
                                            <div class="col-sm-8">
                                                 <input name="status"  class="form-control typeahead" value="<?=$monitoring[0]['status']?>" type="text"  required>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pencapaian" class="col-sm-3 col-form-label">Pencapaian</label>
                                            <div class="col-sm-8">
                                                 <input name="pencapaian"  class="form-control typeahead" value="<?=$monitoring[0]['pencapaian']?>" type="text"  required>
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

<div class="modal-footer">
    <a href="<?= base_url('wo/monitoring')?>" class="btn btn-dark mr-auto" >Kembali</a>
</div>
  