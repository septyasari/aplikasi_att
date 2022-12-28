<div class="tab-pane fade" id="pills-pemeriksaan" role="tabpanel" aria-labelledby="pills-pemeriksaan-tab">
   <!-- Pemeriksaan -->
   <div class="row">
      <div class="col-12 grid-margin stretch-card">
         <div class="card">
            <div class="card-body">
               <?php echo $this->session->flashdata('message_pemeriksa') ?>
               <form class="user" method="post" action="<?= base_url('gardu/tambahpemeriksaan')?>">
                  <tr class="entry">
                     <div class="form-group row">
                        <label for="no_gardu" class="col-sm-3 col-form-label">Nomor Gardu</label>
                        <div class="col-sm-8">
                           <select name="id_gardu" id="id_gardu" class="form-control" required>
                              <option value="">Pilih Gardu</option>
                              <?php foreach ($pelaksana as $key => $data) : ?>
                              <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                              <?php endforeach; ?>
                           </select>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="bidangyangdiperiksa" class="col-sm-3 col-form-label">Hal Yang Harus Diperiksa</label>
                        <div class="col-sm-8">
                           <input type="checkbox" name="check[]" value="Kontruksi" id="">
                           Kontruksi</br>
                           <input type="checkbox" name="check[]" value="PHB" id="">
                           PHB</br>
                           <input type="checkbox" name="check[]" value="AC FUSE" id="">
                           AC FUSE</br>
                           <input type="checkbox" name="check[]" value="KUNCI" id="">
                           KUNCI</br>
                           <input type="checkbox" name="check[]" value="Gangguan Binatang" id="">
                           Gangguan Binatang </br>
                           <input type="checkbox" name="check[]" value="Tanda Peringatan" id="">
                           Tanda Peringatan </br>
                           <input type="checkbox" name="check[]" value="Kebersihan" id="">
                           Kebersihan </br>
                           <input type="checkbox" name="check[]" value="Kebocoran Minyak" id="">
                           Kebocoran Minyak</br>
                           <input type="checkbox" name="check[]" value="Kondisi Tangki" id="">
                           Kondisi Tangki</br>
                           <input type="checkbox" name="check[]" value="Loncatan Bunga Api" id="">
                           Loncatan Bunga Api</br>
                           <input type="checkbox" name="check[]" value="Bunyi Dengung" id="">
                           Bunyi Dengung</br>
                           <input type="checkbox" name="check[]" value="Pertanahan" id="">
                           Pertanahan</br>
                           <input type="checkbox" name="check[]" value="FUSE TM" id="">
                           FUSE TM</br>
                           <input type="checkbox" name="check[]" value="Jumper TM" id="">
                           Jumper TM</br>
                           <input type="checkbox" name="check[]" value="Konektor TM" id="">
                           Konektor TM</br>
                           <input type="checkbox" name="check[]" value="Saklar TR" id="">
                           Saklar TR</br>
                           <input type="checkbox" name="check[]" value="Kabel TR" id="">
                           Kabel TR</br>
                           <input type="checkbox" name="check[]" value="Fuse TR" id="">
                           Fuse TR</br>
                           <input type="checkbox" name="check[]" value="Konektor TR" id="">
                           Konektor TR</br>
                           <input type="checkbox" name="check[]" value="Bushing TM" id="">
                           Bushing TM</br>
                           <input type="checkbox" name="check[]" value="Bushing TR" id="">
                           Bushing TR</br>
                           <input type="checkbox" name="check[]" value="Arester" id="">
                           Arester</br>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="submit" class="btn btn-success mr-5">Simpan</button>
                     </div>
                  </tr>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
