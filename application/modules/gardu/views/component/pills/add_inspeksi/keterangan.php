<style>
   .add {
      position: absolute;
      top: 5px;
      right: 5px;
      border-radius: 8px;
   } 
   .delate_ {
      position: absolute; top:-8px; right:-8px
   }
   .file_cont p{clear:both;}
</style>

<div class="tab-pane fade card" id="pills-keterangan" role="tabpanel" aria-labelledby="pills-keterangan-tab">
   <!-- Keterangan -->
   <div class="card-body">
      <form action="<?= base_url("gardu/tambah_keterangan");?>" method="post">
         <?= $this->session->flashdata('message_keterangan');  ?>
         <!-- <form action="<?//base_url("gardu/upload_gambar") ?>"> -->
            <div class="form-group">
               <select name="id_gardu[]" id="id_gardu" class="form-control" required>
                  <option value="">Pilih Gardu</option>
                  <?php foreach ($pelaksana as $key => $data) : ?>
                  <option value="<?= $data['id']; ?>"><?= $data['no_gardu'] ?></option>
                  <?php endforeach; ?>
               </select>
            </div>
            <div class="form-group mt-3" style="position: relative;">
               <div class="file_cont gambar border border-light rounded-1 p-2 row" style="border:dotted">
                  <p class="col-5 mb-2">
                     <input 
                        type="file"
                        name="gambar[]" 
                        class="form-control file" 
                        required
                     />
                     <button type="button" class="delate_ btn btn-danger rounded-circle btn-sm" title="x">
                        x
                     </button>
                  </p>
                  
               </div>
               <p style="clear:both;">
                  <button class="add btn btn-primary btn-sm" type="button" title="Tambah Gambar">+</button>
               </p>
               <button class="btn btn-primary btn-sm btn-block" type="submit" name="img_submit" title="Upload Gambar">Upload Gambar</button>
            </div>
         <!-- </form> -->
         <div class="form-group mt-3">
            <label for="id_ket">Keterangan gambar</label>
            <textarea name="keterangan" id="id_ket" placeholder="Masukkan Keterangan Gambar" class="form-control"></textarea>
         </div>
         <button type="submit" class="btn btn-success" id="btn_submit" name="ket_submit">Tambah Keterangan</button>
      </form>

      <form action="">
         <div class="form-group">
            <select name="" id="" class="form-control">
               <option value="">Pilih gardu</option>
            </select>
            
            <button type="button" class="btn btn-primary">Upload Gambar</button>
            <button type="button" class="btn btn-primary">Tambah Keterangan</button>

         </div>
      </form>
   </div>

</div>

<script>
   $(document).ready(function(){
      $('#btn_submit').click(function(){
         var file_val = $('.file').val();
         if(file_val == ""){
            alert("Please select file.");
            return false;
         }
      });
      $('.add').click(function(){ 
         $('.file_cont').append('<p class="col-5 mb-2"> <input type="file" name="gambar[]" class="form-control file" required /> <button type="button" class="delate_ btn btn-danger rounded-circle btn-sm" title="x"> x</button></p>');       
      });
      $('.file_cont').on('click', '.delate_', function() {
         $(this).parents('p').remove();
         console.log($(this).parents('p').remove());
      });
   })
</script>
