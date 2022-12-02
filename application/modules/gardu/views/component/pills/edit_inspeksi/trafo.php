<div class="tab-pane fade" id="pills-trafo" role="tabpanel" aria-labelledby="pills-trafo-tab"> 
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <!-- <?//= $this->session->flashdata('message_trafo') ?> -->
                    <form class="user" method="post" action="<?= base_url('gardu/editinspeksi')?>">
                        <input type="hidden" name="data" value="trafo">
                        <div class="form-group row">
                            <label for="no_gardu" class="col-sm-3 col-form-label">Nomor Gardu</label>
                                <div class="col-sm-8">
                                    <select name="id_gardu" id="id_gardu" class="form-control" required>
                                        <?php foreach ($pelaksana as $key => $data) : ?>
                                            <?php if($data['id_gardu']== $get_id): ?>
                                                <option value="<?= $data['id_gardu'] ?>" selected><?= $data['no_gardu'] ?></option>
                                            <?php else : ?>
                                                <option value="<?= $data['id_gardu'] ?>" selected><?= $data['no_gardu'] ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                        </div>
                        
                        <!-- <pre>
                            <?php var_dump($pelaksana) ?>
                        </pre> -->
                        

                        <div class="form-group row">
                            <label for="up3" class="col-sm-3 col-form-label">UP 3</label>
                                <div class="col-sm-8">
                                    <input name="up3" class="form-control typeahead" value="<?=$pelaksana[0]['up3']?>" type="text"  required>
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="ulp" class="col-sm-3 col-form-label">ULP</label>
                                <div class="col-sm-8">
                                    <input name="ulp"  class="form-control typeahead" value="<?=$pelaksana[0]['ulp']?>" type="text"  required>
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="merk" class="col-sm-3 col-form-label">Merek</label>
                                <div class="col-sm-8">
                                    <input name="merk"  class="form-control typeahead" value="<?=$pelaksana[0]['merk']?>" type="text" required>
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="tahunpembuatan" class="col-sm-3 col-form-label">Tahun Pembuatan</label>
                                <div class="col-sm-8">
                                    <input name="tahunpembuatan"  class="form-control typeahead" value="<?=$pelaksana[0]['tahunpembuatan']?>" type="text"  required>
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="beratminyak" class="col-sm-3 col-form-label">Berat Minyak</label>
                                <div class="col-sm-8">
                                    <input name="beratminyak"  class="form-control typeahead" value="<?=$pelaksana[0]['beratminyak']?>" type="text"  required>
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="berattotal" class="col-sm-3 col-form-label">Berat Total</label>
                                <div class="col-sm-8">
                                    <input name="berattotal" class="form-control typeahead" value="<?=$pelaksana[0]['berattotal']?>" type="text"  required>
                                </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success btn-submit mr-5">Simpan</button>
                        </div>
                            
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>