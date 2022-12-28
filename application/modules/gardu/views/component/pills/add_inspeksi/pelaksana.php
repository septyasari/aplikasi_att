<div class="tab-pane fade show active " id="pills-pelaksana" role="tabpanel" aria-latabContentbelledby="pills-pelaksana-tab">
   <!-- Pelaksana -->
   <div class="row">
      <div class="col-12 grid-margin stretch-card">
         <div class="card">
            <div class="card-body">
               <?php echo $this->session->flashdata('message') ?>
               <form class="user" method="post" action="<?= base_url('gardu/tambahpelaksana')?>">
                  <div class="form-group row">
                     <label for="no_gardu" class="col-sm-3 col-form-label">Nomor Gardu</label>
                     <div class="col-sm-8">
                        <input name="no_gardu" data-type='' placeholder="Masukkan Nomor Gardu" class="form-control typeahead" type="text" id="no_gardu" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                     <div class="col-sm-8">
                        <input name="tanggal" data-type='' placeholder="" class="form-control typeahead" type="date" id="" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="petugas" class="col-sm-3 col-form-label">Petugas</label>
                     <div class="col-sm-8">
                        <input name="petugas" data-type='' placeholder="Masukkan Petugas" class="form-control typeahead" type="text" id="" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="penyulang" class="col-sm-3 col-form-label">Penyulang</label>
                     <div class="col-sm-8">
                        <input name="penyulang" data-type='' placeholder="Masukkan penyulang" class="form-control typeahead" type="text" id="" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="lokasi" class="col-sm-3 col-form-label">Lokasi</label>
                     <div class="col-sm-8">
                        <input name="lokasi" data-type='' placeholder="Masukkan lokasi" class="form-control typeahead" type="text" id="" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="type" class="col-sm-3 col-form-label">Jenis Gardu</label>
                     <div class="col-sm-8">
                        <select name="type" id="type" class="form-control" required>
                           <option value="">Pilih Jenis</option>
                           <option value="Beton">BETON</option>
                           <option value="Kios">KIOS</option>
                           <option value="Tiang">TIANG</option>
                           <option value="Cantel">CANTEL</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="kapasitas" class="col-sm-3 col-form-label">Kapasitas</label>
                     <div class="col-sm-8">
                        <input name="kapasitas" data-type='' placeholder="Masukkan Kapasitas" class="form-control typeahead" type="text" id="" required>
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
