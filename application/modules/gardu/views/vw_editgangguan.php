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
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <?= $this->session->flashdata('message') ?>
                    <form action="<?= base_url('gardu/editgangguan')?>" class="user" method="post">
                        <input type="hidden" name="data" value="gangguan">

                            <div class="form-group row">
                                <label for="no_gardu" class="col-sm-3 col-form-label">Nomor Gardu</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="no_gardu" class="form-control"value="<?php echo $gangguan[0]['no_gardu'] ?>" aria-label="no_gardu" aria-describedby="basic-addon1">
                                    </div>
                            </div>

                            <div class="form-group row">
                                <label for="kapasitas" class="col-sm-3 col-form-label">Kapasitas</label>
                                    <div class="col-sm-8">
                                        <input name="kapasitas" data-type='' class="form-control typeahead"  value="<?php echo $gangguan[0]['kapasitas'] ?>" type="text" id="kapasitas" required>
                                    </div>
                            </div>
                                                        
                            <div class="form-group row">
                                <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                                    <div class="col-sm-8">
                                        <input name="tanggal" data-type='' placeholder="" class="form-control typeahead" value="<?php echo $gangguan[0]['tanggal'] ?>" type="date" id="" required>
                                    </div>
                            </div>
                                                        
                            <div class="form-group row">
                                <label for="komponen" class="col-sm-3 col-form-label">Komponen</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="komponen" class="form-control" value="<?php echo $gangguan[0]['komponen'] ?>" aria-label="komponen" aria-describedby="basic-addon1">
                                    </div>
                            </div>
                                                        
                            <div class="form-group row">
                                <label for="jenis" class="col-sm-3 col-form-label">Jenis</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="jenis" class="form-control" value="<?php echo $gangguan[0]['jenis'] ?>" aria-label="jenis" aria-describedby="basic-addon1">
                                    </div>
                            </div>
                                                        
                            <div class="form-group row">
                                <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="keterangan" class="form-control" value="<?php echo $gangguan[0]['keterangan'] ?>" aria-label="keterangan" aria-describedby="basic-addon1">
                                    </div>
                            </div>
                                                        
                            <div class="form-group row">
                                <label for="penyebab_gangguan" class="col-sm-3 col-form-label">Penyebab Gangguan</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="penyebab_gangguan" class="form-control" value="<?php echo $gangguan[0]['penyebab_gangguan'] ?>" aria-label="penyebab_gangguan" aria-describedby="basic-addon1">
                                    </div>
                            </div>
                                                        
                            <div class="form-group row">
                                <label for="uraian" class="col-sm-3 col-form-label">Uraian</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="uraian" class="form-control" value="<?php echo $gangguan[0]['uraian'] ?>" aria-label="uraian" aria-describedby="basic-addon1">
                                    </div>
                            </div>
                                                    
                            <div class="form-group row">
                                <label for="material_terpakai" class="col-sm-3 col-form-label">Material Terpakai</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="material_terpakai" class="form-control" value="<?php echo $gangguan[0]['material_terpakai'] ?>" aria-label="material_terpakai" aria-describedby="basic-addon1">
                                    </div>
                            </div>
                                                        
                            <div class="form-group row">
                                <label for="vol" class="col-sm-3 col-form-label">Vol</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="vol" class="form-control" value="<?php echo $gangguan[0]['vol'] ?>" aria-label="vol" aria-describedby="basic-addon1">
                                    </div>
                            </div>
                                                        
                            <div class="form-group row">
                                <label for="frekuensi" class="col-sm-3 col-form-label">Frekuensi</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="frekuensi" class="form-control" value="<?php echo $gangguan[0]['frekuensi'] ?>" aria-label="frekuensi" aria-describedby="basic-addon1">
                                    </div>
                            </div>
                                                        
                            <div class="modal-footer">
                                <a href="<?= base_url('gardu/gangguan')?>" class="btn btn-dark mr-auto" >Kembali</a>

                                <button type="submit" class="btn btn-success mr-5">Simpan</button>

                            </div>                  
                    </form>
                            
                </div>
                        
            </div>
                    
        </div>
                
    </div>
           
</div>