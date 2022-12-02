<div class="container-fluid">
  <h3><?= $judul; ?></h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Beranda</a></li>
      <li class="breadcrumb-item"><a href="<?=base_url('jtm');?>">JTM</a></li>
      <li class="breadcrumb-item"><a href="<?=base_url('jtm/inspeksi')?>">Inspeksi</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $judul;?></li>
    </ol>
  </nav>

  <div>
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item">
              <a class="nav-link active" id="pills-pelaksana-tab" data-toggle="pill" href="#pills-pelaksana" role="tab" aria-controls="pills-pelaksana" aria-selected="true">Pelaksana</a>
          </li>
          
          <li class="nav-item">
              <a class="nav-link" id="pills-kontruksi-tab" data-toggle="pill" href="#pills-kontruksi" role="tab" aria-controls="pills-kontruksi" aria-selected="false">Kontruksi</a>
          </li>
      </ul>
  </div>
  
  <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-pelaksana" role="tabpanel" aria-labelledby="pills-pelaksana-tab"> 
      <!-- pelaksana -->
          <div class="row">
              <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <?php echo $this->session->flashdata('message') ?>
                          <form class="user" method="post" action="<?= base_url('jtm/editinspeksi')?>">
                              <input type="hidden" name="data" value="pelaksana">
  
                              <div class="form-group row">
                                  <label for="garduinduk" class="col-sm-3 col-form-label">Gardu Induk</label>
                                      <div class="col-sm-8">
                                          <input name="garduinduk" class="form-control typeahead"   type="text"  required>
                                      </div>
                              </div>
                              <div class="form-group row">
                                  <label for="penyulang" class="col-sm-3 col-form-label">Penyulang</label>
                                      <div class="col-sm-8">
                                          <input name="penyulang" class="form-control typeahead" value="<?=$pelaksana[0]['penyulang']?>"  type="text"  required>
                                      </div>
                              </div>
                              <div class="form-group row">
                                  <label for="petugas" class="col-sm-3 col-form-label">Petugas</label>
                                  <div class="col-sm-8">
                                      <input name="petugas" class="form-control typeahead" value="<?=$pelaksana[0]['petugas']?>" type="text"  required>
                                  </div>
                              </div>
  
                              <div class="form-group row">
                                  <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                                  <div class="col-sm-8">
                                      <input name="tanggal"  class="form-control typeahead" value="<?=$pelaksana[0]['tanggal']?>" type="date"  required>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="total" class="col-sm-3 col-form-label">Total</label>
                                  <div class="col-sm-8">
                                      <input name="total" class="form-control typeahead" value="<?=$pelaksana[0]['total']?>" type="text"  required>
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
  
      <div class="tab-pane fade" id="pills-kontruksi" role="tabpanel" aria-labelledby="pills-kontruksi-tab"> 
          <!-- Kontruksi -->
          <div class="row">
              <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <?php echo $this->session->flashdata('message') ?>
                          <form class="user" method="post" enctype="multipart/form-data" action="<?= base_url('jtm/editinspeksi')?>">
                              <input type="hidden" name="data" value="kontruksi">
                              <div class="form-group row">
                                  <label for="penyulang" class="col-sm-3 col-form-label">Penyulang</label>
                                    <div class="col-sm-8">
                                        <select name="id_penyulang" id="id_penyulang" class="form-control" required>
                                            <option value="">Pilih Penyulang</option>
                                                <?php foreach ($pelaksana as $key => $data) : ?>
                                                    <option value="<?= $data['id'] ?>"><?= $data['penyulang'] ?></option>
                                                <?php endforeach; ?>
                                        </select>
                                    </div>
                              </div>
                              <div class="form-group row">
                                  <label for="nomor" class="col-sm-3 col-form-label">Nomor</label>
                                  <div class="col-sm-8">
                                      <input type="text" name="nomor" class="form-control" value="<?=$kontruksi[0]['nomor']?>" aria-label="nomor" aria-describedby="basic-addon1">
                                  </div>
                              </div>
  
                              <div class="form-group row">
                                  <label for="jenis" class="col-sm-3 col-form-label">Jenis</label>
                                  <div class="col-sm-8">
                                      <input type="text" name="jenis" class="form-control" value="<?=$kontruksi[0]['jenis']?>" aria-label="jenis" aria-describedby="basic-addon1">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="keadaan" class="col-sm-3 col-form-label">Keadaan</label>
                                  <div class="col-sm-8">
                                      <input type="text" name="keadaan" class="form-control" value="<?=$kontruksi[0]['keadaan']?>" aria-label="keadaan" aria-describedby="basic-addon1">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="tinggi" class="col-sm-3 col-form-label">Tinggi</label>
                                  <div class="col-sm-8">
                                      <input type="text" name="tinggi" class="form-control" value="<?=$kontruksi[0]['tinggi']?>" aria-label="tinggi" aria-describedby="basic-addon1">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="kekuatan" class="col-sm-3 col-form-label">kekuatan</label>
                                  <div class="col-sm-8">
                                      <input type="text" name="kekuatan" class="form-control" value="<?=$kontruksi[0]['kekuatan']?>" aria-label="kekuatan" aria-describedby="basic-addon1">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="penghalangpanjat" class="col-sm-3 col-form-label">Penghalang Panjat</label>
                                  <div class="col-sm-8">
                                      <input type="text" name="penghalangpanjat" class="form-control" value="<?=$kontruksi[0]['penghalangpanjat']?>" aria-label="penghalangpanjat" aria-describedby="basic-addon1">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="kepemilikan" class="col-sm-3 col-form-label">Kepemilikan</label>
                                  <div class="col-sm-8">
                                      <input type="text" name="kepemilikan" class="form-control" value="<?=$kontruksi[0]['kepemilikan']?>"  aria-label="kepemilikan" aria-describedby="basic-addon1">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="panjanghantaran" class="col-sm-3 col-form-label">Panjang Hantaran</label>
                                  <div class="col-sm-8">
                                      <input type="text" name="panjanghantaran" class="form-control" value="<?=$kontruksi[0]['panjanghantaran']?>"  aria-label="panjanghantaran" aria-describedby="basic-addon1">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="jenispenghantar" class="col-sm-3 col-form-label">Jenis penghatar</label>
                                  <div class="col-sm-8">
                                      <input type="text" name="jenispenghantar" class="form-control" value="<?=$kontruksi[0]['jenispenghantar']?>"  aria-label="jenispenghantar" aria-describedby="basic-addon1">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="jeniskawat" class="col-sm-3 col-form-label">Jenis Kawat</label>
                                  <div class="col-sm-8">
                                      <input type="text" name="jeniskawat" class="form-control" value="<?=$kontruksi[0]['jeniskawat']?>"  aria-label="jeniskawat" aria-describedby="basic-addon1">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="jenisikatanhantaran" class="col-sm-3 col-form-label">Jenis Ikatan Hantaran</label>
                                  <div class="col-sm-8">
                                      <input type="text" name="jenisikatanhantaran" class="form-control" value="<?=$kontruksi[0]['jenisikatanhantaran']?>"  aria-label="jenisikatanhantaran" aria-describedby="basic-addon1">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="jenistegangan" class="col-sm-3 col-form-label">Jenis Tegangan</label>
                                  <div class="col-sm-8">
                                      <input type="text" name="jenistegangan" class="form-control" value="<?=$kontruksi[0]['jenistegangan']?>"  aria-label="jenistegangan" aria-describedby="basic-addon1">
                                  </div>
                              </div>
  
                              <div class="form-group row">
                                  <label for="saran" class="col-sm-3 col-form-label">Saran - Saran</label>
                                  <div class="col-sm-8">
                                      <input type="text" name="saran" class="form-control" value="<?=$kontruksi[0]['saran']?>" aria-label="saran" aria-describedby="basic-addon1">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="masalah" class="col-sm-3 col-form-label">Masalah</label>
                                  <div class="col-sm-8">
                                      <input type="text" name="masalah" class="form-control" value="<?=$kontruksi[0]['masalah']?>"  aria-label="masalah" aria-describedby="basic-addon1">
                                  </div>
                              </div>
                              
                              <div class="form-group row">
                                  <label for="konstruksi" class="col-sm-3 col-form-label">Kontruksi</label>
                                  <div class="col-sm-8">
                                      <input type="text" name="konstruksi" class="form-control" value="<?=$kontruksi[0]['konstruksi']?>"  aria-label="konstruksi" aria-describedby="basic-addon1">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                  <div class="col-sm-8">
                                      <input type="text" name="alamat" class="form-control" value="<?=$kontruksi[0]['alamat']?>"  aria-label="alamat" aria-describedby="basic-addon1">
                                  </div>
                              </div>
                                  
                              <div class="form-group row">
                                  <label for="alamat" class="col-sm-3 col-form-label">Tiang</label>
                                  <div class="col-sm-8">
                                      <input type="file" name="tiang" class="form-control" value="<?=$kontruksi[0]['tiang']?>" aria-label="tiang" aria-describedby="basic-addon1">
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
      <a href="<?= base_url('jtm/inspeksi')?>" class="btn btn-dark mr-auto" >Kembali</a>
  </div>

</div>


        

  