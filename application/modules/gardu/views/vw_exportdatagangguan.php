<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=Gangguan.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<div class="card-body">
		<div class="table-responsive">
            <table border="1">
                    <tbody>
                        <?php foreach ($gangguan as $index => $tbgan ) : ?>
                            <th colspan="12" class="text-center">
                            REKAP GANGGUAN GARDU<br> 
                            ULP TANJUNGPINANG KOTA
                            </th>
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
                        <?php endforeach ; ?>
                    </tbody>
            </table>
        </div>

	        <table border="1">
	            <tbody>
					<tr>
						<th rowspan="2">No</th>
                        <th rowspan="2">No.Gardu</th>
                        <th rowspan="2">Kapasitas</th>
                        <th rowspan="2">Tgl Gangguan</th>
                        <th colspan="3">Jenis Gangguan</th>
                        <th rowspan="2">Penyebab Gangguan</th>
                        <th colspan="3"> Uraian Tindak Lanjut</th>
                        <th rowspan="2"> Frekuensi Gangguan </th>
					</tr>

                    <tr>
                        <th>Komponen</th>
                        <th></th>
                        <th>Ket</th>
                    
                        <th>Uraian</th>
                        <th>Material Terpakai</th>
                        <th>Vol</th>
                    </tr>

                    <?php $i = 1; ?>
                        <?php foreach ($gangguan as $index => $tbgan) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $tbgan['no_gardu'] ?></td>
                                <td><?= $tbgan['kapasitas'] ?></td>
                                <td><?php $tgl = strtotime($tbgan['tanggal']); echo tgl_indo(date('Y-m-d', $tgl));?></td>
                                <td><?= $tbgan['komponen'] ?></td>
                                <td><?= $tbgan['jenis'] ?></td>
                                <td><?= $tbgan['keterangan'] ?></td>
                                <td><?= $tbgan['penyebab_gangguan'] ?></td>
                                <td><?= $tbgan['uraian'] ?></td>
                                <td><?= $tbgan['material_terpakai'] ?></td>
                                <td><?= $tbgan['vol'] ?></td>
                                <td><?= $tbgan['frekuensi'] ?></td>
                                </tr>
	                    <?php endforeach ; ?>
	            </tbody>
	        </table>
	    </div>
	</div>
