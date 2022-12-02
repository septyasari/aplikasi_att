<div class="tab-pane fade" id="pills-pemeriksaan" 
role="tabpanel" aria-labelledby="pills-pemeriksaan-tab"> 
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <!-- <?php echo $this->session->flashdata('message_pemeriksa') ?> -->
                        <form class="user" method="post" action="<?= base_url('gardu/editinspeksi')?>">
                            <input type="hidden" name="data" value="pemeriksaan">
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
                            <div class="form-group row">
                            <?php $data_checkbox = [
                                "Kontruksi", "PHB", "AC FUSE", "KUNCI", "Gangguan Binatang", "Tanda Peringatan", "Kebersihan", 
                                "Kebocoran Minyak", "Kondisi Tangki", "Loncatan Bunga Api", "Bunyi Dengung", "Pertanahan",
                                "FUSE TM", "Jumper TM", "Konektor TM", "Saklar TR", "Kabel TR", "Fuse TR", "Konektor TR", 
                                "Bushing TM", "Bushing TR", "Arester"
                            ];
                                $count_periksa = count($pemeriksa)-1;
                                 ?>
                                
                                <!-- <label for="bidangyangdiperiksa" class="col-sm-3 col-form-label">Hal Yang Harus Diperiksa</label> -->
        <?php /* 
        $data_checkbox[0] == $pemeriksa[0] kontruksi
        $data_checkbox[1] == $pemeriksa[1] pbh
        $data_checkbox[2] == $pemeriksa[2] ac fuse
        $data_checkbox[3] == $pemeriksa[3] kunci
        $data_checkbox[4] == $pemeriksa[4] g.binatang
        $data_checkbox[5] == $pemeriksa[5] t.peringtan
        $data_checkbox[6] == $pemeriksa[6] kebersihan
        $data_checkbox[7] == $pemeriksa[7]
        $data_checkbox[8] == $pemeriksa[8]
        $data_checkbox[9] == $pemeriksa[9]
        $data_checkbox[10] == $pemeriksa[10]
        $data_checkbox[11] == $pemeriksa[11]
        $data_checkbox[12] == $pemeriksa[12]
        $data_checkbox[13] == $pemeriksa[13]
        $data_checkbox[14] == $pemeriksa[14]
        $data_checkbox[15] == $pemeriksa[15]
        $data_checkbox[16] == $pemeriksa[16]
        $data_checkbox[17] == $pemeriksa[17]
        $data_checkbox[18] == $pemeriksa[18]
        $data_checkbox[19] == $pemeriksa[19] b. tm
        $data_checkbox[20] == $pemeriksa[]
        $data_checkbox[21] == $pemeriksa[20] arester
        */ 
        print_r(array_filter($data_checkbox, function($data_checkbox){
            $this->db->select('*');
            $this->db->from('tb_pemeriksa');
            $this->db->where('id_gardu', 9);
            $pemeriksa = $this->db->get()->result_array();
            foreach($pemeriksa as $data){
                return $data_checkbox === $data['bidangyangdiperiksa'];
            }
        }));
        ?>
                                    <div class="col-sm-8">
                                        <?php echo count($data_checkbox) ?>
                                        <?php echo $count_periksa; ?>
                                        <br>
                                        <?php foreach($data_checkbox as $key => $data) : ?>
                                            <?php foreach($pemeriksa as $periksa): ?>
                                                <?php
                                                if ($data === $periksa['bidangyangdiperiksa']){
                                                    echo ($periksa['bidangyangdiperiksa']. ' sama == '. $data. '<br>');
                                                   break;
                                                }  
                                                else if ($data !== $periksa['bidangyangdiperiksa']) {
                                                    echo '<br>'. 'hi ini kah, <b>'. $data.'</b>';
                                                } continue;
                                                
                                                
                                                ?>
                                                
                                            <?php endforeach; ?>
                                            <?php 
                                            // if($data !== $pemeriksa[$count_periksa]['bidangyangdiperiksa']){
                                            //     echo $data . " ini yah ". $pemeriksa[$count_periksa]['bidangyangdiperiksa'];
                                            // } 
                                            ?>
                                        <?php endforeach; ?>
                                        <?php foreach($data_checkbox as $key => $data) : ?>
                                            <input type="checkbox" name="check[]" value="<?= $data ?>" checked>
                                            <?= $data ?></br>
                                        <?php endforeach; ?>
                                        <!-- <input type="checkbox" name="check[]" value="Kontruksi" id="" checked>
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
                                            Arester</br> -->
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