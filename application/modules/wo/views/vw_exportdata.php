<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=Latihan.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
    <div class="card-body">

		<div class="table-responsive">
            <table border="1">
                <tbody>
                    <?php foreach ($monitoring as $index => $tbmonitoring ) : ?>
                        <tr>
                            <th rowspan="2" class="text-center">
                                REKAP REALISASI WO NON RUTIN YANTEK
                                RAYON TANJUNG PINANG KOTA
                                TAHUN 2019
                            </th>
                        </tr>
                    <?php endforeach ; ?>
                </tbody>
            </table>
        </div>

	        <table border="1">
	            <tbody>
					<tr>
						<th rowspan="2">No</th>
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
                        <th rowspan="2">No WO </th>
                        <th rowspan="2">Tanggal Terbit</th>
                        <th rowspan="2">Uraian Pekerjaan</th>
                        <th rowspan="2">Lokasi</th>
                        <th colspan="2"><center>Target<center></th>
                        <th colspan="2"><center> Realisasi <center></th>
                        <th rowspan="2">Tanggal Realisasi</th>
                        <th rowspan="2"> Keterangan </th>
                        <th rowspan="2"> Status </th>
                        <th rowspan="2"> Pencapaian </th>
					</tr>

                    <tr>
                        <th>Vol</th>
                        <th>Satuan</th>
                    
                        <th> Vol </th>
                        <th> Satuan </th>
                    </tr>

                    <?php $i = 1; ?>
                        <?php foreach ($gsp as $index => $tbgsp) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $tbmonitoring['no_wo'] ?></td>
                                <td><?php $tgl = strtotime($tbmonitoring['tgl_terbit']); echo tgl_indo(date('Y-m-d', $tgl));?></td>
                                <td><?= $tbmonitoring['uraian_pekerjaan'] ?></td>
                                <td><?= $tbmonitoring['lokasi'] ?></td>
                                <td><?= $tbmonitoring['vol_target'] ?></td>
                                <td><?= $tbmonitoring['satuan_target'] ?></td>
                                <td><?= $tbmonitoring['vol_realisasi'] ?></td>
                                <td><?= $tbmonitoring['satuan_realisasi'] ?></td>
                                <td><?= $tbmonitoring['tgl_realisasi'] ?></td>
                                <td><?= $tbmonitoring['keterangan'] ?></td>
                                <td><?= $tbmonitoring['status'] ?></td>
                                <td><?= $tbmonitoring['pencapaian'] ?></td>
                            </tr>
	                    <?php endforeach ; ?>
	            </tbody>
	        </table>

	</div>