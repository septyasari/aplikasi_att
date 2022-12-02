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
  <?php foreach ($pelaksana as $index => $tball ) : ?>	
	<h5>Data JTM <?php echo $tball['id_penyulang'] ?></h5>
<?php endforeach ; ?>

	<div class="card">
	        <div class="card-body">
                <div class="table-responsive">
                    <?php
                        function tgl_indo($date){
                            $bulan = array(
                            1 => 'Januari',
                                'Februari',
                                'Maret',
                                'April',
                                'Mei',
                                'Juni',
                                'Juli',
                                'Agustus',
                                'September',
                                'Oktober',
                                'November',
                                'Desember'
                            );
                        $pecahkan = explode('-', $date);

                        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                        }
                    ?>

                        <table id="myTable" class="table table-bordered" style="width:100%">
                            <tbody>
                                <?php foreach ($pelaksana as $index => $tbpeljtm ) : ?>
                                    <tr>
                                        <th rowspan="2">
                                            <img src ="<?= base_url(); ?>assets/img/index.jpg" width="50px">
                                                <span>
                                                    PT. PLN (Persero) UIW Riau & Kepri
                                                    UP3 Tanjungpinang ULP
                                                    Tanjungpinang Kota
                                                </span>
                                        </th>

                                        <th rowspan="2" class="text-center" >LAPORAN PELAKSANAAN INSPEKSI RUTIN<p> KONSTRUKSI</th>

                                        <th>Kartu   : <p>
                                            Hal     : 1 - 9 </th>
                                    </tr>

                                    <tr>
                        
                                        <th>Bulan : <?php $tgl = strtotime($tbpeljtm['tanggal']); echo tgl_indo(date('Y-m-d', $tgl));?><p>
                                            Petugas : <?= $tbpeljtm['petugas'] ?><br>
                                            Tanda Tangan  :</th>
                                    </tr>
                                <?php endforeach ; ?>
                            </tbody>
                        </table>
                </div>

                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered" style="width:100%">
                        <tbody>
                            <?php foreach ($pelaksana as $index => $tbpeljtm ) : ?>
                            <tr>
                                <th>Gardu Induk</th>
                                <td><?= $tbpeljtm['garduinduk'] ?></td>
                            </tr>

                            <tr>
                                <th>Penyulang</th>
                                <td><?= $tbpeljtm['penyulang'] ?></td>
                            </tr>
                            
                            <tr>
                                <th>Total</th>
                                <td><?= $tbpeljtm['total'] ?></td>
                                
                            </tr>
                            
                            <?php endforeach ; ?>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered" style="width:100%;" >
                        <tbody>
                            <tr>
                                <th rowspan="2" valign="center">No</th>
                                <th colspan="3" class="text-center">TIANG</th>
                                <th colspan="9" class="text-center">INFO ASET TIANG</th>
                                <th colspan="2">FOTO TEMUAN</th>
                                <th rowspan="2">Saran-Saran</th>
                                <th colspan="3">FOTO KONSTRUKSI</th>
                                <th rowspan="2">KONSTRUKSI</th>
                                <th rowspan="2">ALAMAT</th>
                            </tr>

                            <tr>
                                <th>NOMOR</th>
                                <th>JENIS</th>
                                <th>KEADAAN</th>

                                <th>TINGGI</th>
                                <th>KEKUATAN</th>
                                <th>PENGHALANG PANJAT</th>
                                <th>KEPEMILIKAN</th>
                                <th>PENJANG HANTARAN</th>
                                <th>JENIS PENGHANTAR</th>
                                <th>JENIS KAWAT</th>
                                <th>JENIS IKATAN HANTARAN</th>
                                <th>JENIS TEGANGAN</th>

                                <th>TIANG</th>
                                <th>ROW</th>

                                <th>UTUH</th>
                                <th>ATAS</th>
                                <th>BAWAH</th>
                            </tr>
                            <tr>
                            <?php for ($i = 1; $i < 22; $i++) {?>
                                <td class="text-center"><?= $i;?></td>
                            <?php }?>
                            </tr>

                            <?php $i = 1; ?>
                            <?php foreach ($kontruksi as $index => $tbkontruksijtm ) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $tbkontruksijtm['nomor'] ?></td>
                                <td><?= $tbkontruksijtm['jenis'] ?></td>
                                <td><?= $tbkontruksijtm['keadaan'] ?></td>
                                <td><?= $tbkontruksijtm['tinggi'] ?></td>
                                <td><?= $tbkontruksijtm['kekuatan'] ?></td>
                                <td><?= $tbkontruksijtm['penghalangpanjat'] ?></td>
                                <td><?= $tbkontruksijtm['kepemilikan'] ?></td>
                                <td><?= $tbkontruksijtm['panjanghantaran'] ?></td>
                                <td><?= $tbkontruksijtm['jenispenghantar'] ?></td>
                                <td><?= $tbkontruksijtm['jeniskawat'] ?></td>
                                <td><?= $tbkontruksijtm['jenisikatanhantaran'] ?></td>
                                <td><?= $tbkontruksijtm['jenistegangan'] ?></td>
                                <td><?= $tbkontruksijtm['tiang'] ?></td>
                                <td><?= $tbkontruksijtm['row'] ?></td>
                                <td><?= $tbkontruksijtm['utuh'] ?></td>
                                <td><?= $tbkontruksijtm['atas'] ?></td>
                                <td><?= $tbkontruksijtm['bawah'] ?></td>
                                <td><?= $tbkontruksijtm['konstruksi'] ?></td>
                                <td><?= $tbkontruksijtm['alamat'] ?></td>
                            </tr>
                            <?php endforeach ; ?>
                        </tbody>
                    </table>
                </div>  
	        </div>
	    </div>
    <div class="modal-footer">
        <a href="<?= base_url('jtm/inspeksi')?>" class="btn btn-dark mr-auto" >Kembali</a>
        <?php foreach ($pelaksana as $index => $tball ) : ?>
            <a href="<?= base_url('jtm/export')?>/<?php echo $tball['id_penyulang'] ?>" class="btn btn-success mt-2 ml-2"  style="float:left; font-size: 15px;">
                <i class="mdi mdi-arrow-down-bold-circle-outline"></i>
                    Export Ke Excel
            </a>
        <?php endforeach ; ?>
    </div>
</div>


