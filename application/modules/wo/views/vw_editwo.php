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
    
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-inputwo" role="tabpanel" aria-labelledby="pills-inputwo-tab">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <?php echo $this->session->flashdata('message') ?>
                                    <form class="user" method="post" enctype="multipart/form-data" action="<?= base_url('wo/editwo')?>">
                                    <input type="hidden" name="data" value="input wo">

                                        <div class="form-group row">
                                            <label for="nomor" class="col-sm-3 col-form-label">Nomor</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="nomor" class="form-control" value="<?=$wo[0]['nomor']?>"  aria-label="nomor" aria-describedby="basic-addon1">
                                                </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="perihal" class="col-sm-3 col-form-label">Perihal</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="perihal" class="form-control" value="<?=$wo[0]['perihal']?>" aria-label="perihal" aria-describedby="basic-addon1">
                                                </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="tugas" class="col-sm-3 col-form-label">DiTugaskan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="tugas" class="form-control" value="<?=$wo[0]['tugas']?>" aria-label="tugas" aria-describedby="basic-addon1">
                                                </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="pekerjaan" class="form-control" value="<?=$wo[0]['pekerjaan']?>" aria-label="pekerjaan" aria-describedby="basic-addon1">
                                                </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="lokasi" class="col-sm-3 col-form-label">Lokasi</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="lokasi" class="form-control" value="<?=$wo[0]['lokasi']?>" aria-label="lokasi" aria-describedby="basic-addon1">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="target" class="col-sm-3 col-form-label">Target</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="target" class="form-control" value="<?=$wo[0]['target']?>" aria-label="target" aria-describedby="basic-addon1">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="realisasi" class="col-sm-3 col-form-label">Realisasi</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="realisasi" class="form-control" value="<?=$wo[0]['realisasi']?>" aria-label="realisasi" aria-describedby="basic-addon1">
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

    <div class="modal-footer">
        <a href="<?= base_url('wo/inputwo')?>" class="btn btn-dark mr-auto" >Kembali</a>
    </div>

</div>



  