<div class="tab-pane fade show active" id="pills-pelaksana" role="tabpanel" aria-labelledby="pills-pelaksana-tab">
<!-- Pelaksana -->
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <!-- <?php //echo $this->session->flashdata('message') ?> -->
                    <form class="user" method="post" action="<?= base_url('gardu/editinspeksi')?>">
                        <input type="hidden" name="data" value="pelaksana">
                        <input type="hidden" name="id" value="<?= $get_id ?>">
                        <div class="form-group row">
                            <label for="no_gardu" class="col-sm-3 col-form-label">Nomor Gardu</label>
                                <div class="col-sm-8">
                                    <input name="no_gardu" class="form-control typeahead" value="<?php echo $pelaksana[0]['no_gardu'] ?>" type="text" id="no_gardu" required>
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                                <div class="col-sm-8">
                                    <input name="tanggal" class="form-control typeahead" type="date" id="" value="<?php echo $pelaksana[0]['tanggal'] ?>" required>
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="petugas" class="col-sm-3 col-form-label">Petugas</label>
                                <div class="col-sm-8">
                                    <input name="petugas" class="form-control typeahead" value="<?php echo $pelaksana[0]['petugas']?>" type="text" id="" required>
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="penyulang" class="col-sm-3 col-form-label">Penyulang</label>
                                <div class="col-sm-8">
                                    <input name="penyulang" class="form-control typeahead" value="<?php echo $pelaksana[0]['penyulang']?>" type="text" id="" required>
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="lokasi" class="col-sm-3 col-form-label">Lokasi</label>
                                <div class="col-sm-8">
                                    <input name="lokasi" class="form-control typeahead" value="<?php echo $pelaksana[0]['lokasi']?> " type="text" id="" required>
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-sm-3 col-form-label">Jenis Gardu</label>
                                <div class="col-sm-8">
                                    <?php $datatype = ['BETON','KIOS','TIANG','CANTEL']; ?>

                                    <select name="type" id="type" class="form-control" required>
                                        <option value="<?php echo $pelaksana[0]['type']?>" selected><?php echo $pelaksana[0]['type']?></option>
                                        <?php
                                            foreach($datatype as $type) :
                                                if($type != $pelaksana[0]['type']) :
                                        ?>
                                        <option value="<?= $type ?>"><?= $type?></option>
                                        <?php 
                                                endif ; 
                                            endforeach ;
                                        ?>
                                    </select>
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="kapasitas" class="col-sm-3 col-form-label">Kapasitas</label>
                                <div class="col-sm-8">
                                    <input name="kapasitas" class="form-control typeahead" value="<?= $pelaksana[0]['kapasitas']?>"type="text" id="" required>
                                </div>
                        </div>

                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success btn-submit mr-5" value="Simpan" >
                            <!-- <button type="submit" class="btn btn-success mr-5">Simpan</button> -->
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>