<div class="container-fluid">
  <h3><?= $judul; ?></h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Beranda</a></li>
      <li class="breadcrumb-item"><a href="<?=base_url('gardu');?>">Gardu</a></li>
      <li class="breadcrumb-item"><a href="<?=base_url('gardu/gangguan')?>">Gangguan</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $judul;?></li>
    </ol>
  </nav>
    <!-- <div>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-gangguan-tab" data-toggle="pill" href="#pills-gangguan" role="tab" aria-controls="pills-gangguan" aria-selected="true">Gangguan</a>
            </li>
        </ul>
    </div> -->
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-gangguan" role="tabpanel" aria-labelledby="pills-gangguan-tab"> 
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <?php echo $this->session->flashdata('message') ?>
                                    <form class="user" method="post" enctype="multipart/form-data" action="<?= base_url('gardu/tambahgangguan')?>">
                                        <div class="form-group row">
                                            <label for="no_gardu" class="col-sm-3 col-form-label">Nomor Gardu</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="no_gardu" class="form-control" placeholder="Masukkan Nomor Gardu" aria-label="no_gardu" aria-describedby="basic-addon1">
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kapasitas" class="col-sm-3 col-form-label">Kapasitas</label>
                                                <div class="col-sm-8">
                                                    <input name="kapasitas" data-type='' placeholder="Masukkan Kapasitas" class="form-control typeahead" type="text" id="" required>
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                                                <div class="col-sm-8">
                                                    <input name="tanggal" data-type='' placeholder="" class="form-control typeahead" type="date" id="" required>
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="komponen" class="col-sm-3 col-form-label">Komponen</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="komponen" class="form-control" placeholder="Masukkan Komponen" aria-label="komponen" aria-describedby="basic-addon1">
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jenis" class="col-sm-3 col-form-label">Jenis</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="jenis" class="form-control" placeholder="Masukkan Jenis" aria-label="jenis" aria-describedby="basic-addon1">
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="keterangan" class="form-control" placeholder="Masukkan Keterangan" aria-label="keterangan" aria-describedby="basic-addon1">
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="penyebab_gangguan" class="col-sm-3 col-form-label">Penyebab Gangguan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="penyebab_gangguan" class="form-control" placeholder="Masukkan Penyebab Gangguan" aria-label="penyebab_gangguan" aria-describedby="basic-addon1">
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="uraian" class="col-sm-3 col-form-label">Uraian</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="uraian" class="form-control" placeholder="Masukkan Uraian" aria-label="uraian" aria-describedby="basic-addon1">
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="material_terpakai" class="col-sm-3 col-form-label">Material Terpakai</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="material_terpakai" class="form-control" placeholder="Masukkan Material Terpakai" aria-label="material_terpakai" aria-describedby="basic-addon1">
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="vol" class="col-sm-3 col-form-label">Vol</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="vol" class="form-control" placeholder="Masukkan Vol" aria-label="vol" aria-describedby="basic-addon1">
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="frekuensi" class="col-sm-3 col-form-label">Frekuensi</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="frekuensi" class="form-control" placeholder="Masukkan Frekuensi" aria-label="frekuensi" aria-describedby="basic-addon1">
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
    <a href="<?= base_url('gardu/gangguan')?>" class="btn btn-dark mr-auto" >Kembali</a>
</div>
</div>