<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=JTM.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
	<div class="card-body">

        <div class="table-responsive">
            <table border="1">
                <tbody>
                    <?php foreach ($pelaksana as $index => $tbpeljtm ) : ?>
                        <tr>
                            <th rowspan="2">
                                <img src ="<?= base_url(); ?>assets/img/index.jpg" width="50px">
                            </th>

                            <th rowspan="2">
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

                            <th>Bulan : <?php $tgl = strtotime($tbpeljtm['tanggal']); echo tgl_indo(date('Y-m-d', $tgl));?><p>
                            Petugas : <?= $tbpeljtm['petugas'] ?><br>
                            Tanda Tangan  :</th>
                        </tr>

                    <?php endforeach ; ?>
                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <table border="1">
                <tbody>
                    <?php foreach ($pelaksana as $index => $tbpeljtm ) : ?>
                        <tr>
                            <th colspan ="2">Gardu Induk</th>
                            <td colspan="2"><?= $tbpeljtm['garduinduk'] ?></td>
                        </tr>

                        <tr>
                            <th colspan="2">Penyulang</th>
                            <td colspan="2"><?= $tbpeljtm['penyulang'] ?></td>
                        </tr>
                        
                        <tr>
                            <th colspan="2">Total</th>
                            <td colspan="2"><?= $tbpeljtm['total'] ?></td>
                        </tr>
                    <?php endforeach ; ?>
                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <table border="1">
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
