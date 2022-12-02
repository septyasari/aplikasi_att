<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=Inspeksi.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
	<div class="card-body">
		<div class="table-responsive">
            <table border="1">
                <tbody>
                    <?php foreach ($pelaksana as $index => $tbpel ) : ?>
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

							<th rowspan="2" class="text-center" >
							LAPORAN PELAKSANAAN PEMERIKSAAN RUTIN<br>
									GARDU DISTRIBUSI<br>					
									TRAFO 3 PHASA					
							</th>
							<th>Kartu   : : LHR - 01<br>
								Hal     : 1 - 9 
							</th>
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
								<th>Tanggal<br>
									Petugas <br>
									Tanda Tangan 
								</th>

									<td><?php $tgl = strtotime($tbpel['tanggal']); echo tgl_indo(date('Y-m-d', $tgl));?><br>
									<?= $tbpel['petugas'] ?><br></td>

                        </tr>
                	<?php endforeach ; ?>
            	</tbody>
            </table>
        </div>

			<table border="1">
				<tbody>
	                <?php foreach ($pelaksana as $index => $tbpel ) : ?>
						<tr>
	                		<th colspan="3">GARDU BETON / KIOS / TIANG / CANTEL (<?= $tbpel['type'] ?>)<br>
											Nomor Gardu  : <?= $tbpel['no_gardu'] ?><br>
											Kapasitas : <?= $tbpel['kapasitas'] ?><br>
											No Tiang  :
							</th>
							<th>Penyulang : <?= $tbpel['penyulang'] ?><br>
								Lokasi : <?= $tbpel['lokasi'] ?> </th>
						</tr>
	                <?php endforeach ; ?>
	            </tbody>
	        </table>

	        <table border="1">
				<tr>
					<th colspan="2">Hal-Hal Yang Diperiksa</th>
				</tr>

	            <tbody>
	                <?php foreach ($pemeriksa as $index => $tbpel ) : ?>
	                	<tr>
							<td>
								<value="<?= $tbpel['bidangyangdiperiksa'] ?>" <?php echo ($tbpel['bidangyangdiperiksa']==$tbpel['bidangyangdiperiksa'] ? 'checked' : '');?>>   <?= $tbpel['bidangyangdiperiksa'] ?>
							</td>

							<td>
								<input type="checkbox" name="check[]" >
							</td>
	                	</tr>
	                <?php endforeach ; ?>
	            </tbody>
	        </table>

	        <table border="1">
	            <tbody>
	            	<tr>
	                	<th rowspan="2">Hal - Hal yang Harus Diperhatikan</th>
	                    <th rowspan="2">Kondisi</th>
	                    <th rowspan="2">Saran-Saran</th>
	                    <th colspan="2">Pelaksanaan Saran-Saran</th>
	                </tr>

	                <tr>
	                    <th>Tanggal</th>
	                    <th>Keterangan</th>
	                </tr>

	                <?php foreach ($pemerhatikan as $index => $tbpemerhatikan ) : ?>
						<tr>
							<td><?= $tbpemerhatikan['nama_bidang'] ?></td>
							<td><?= $tbpemerhatikan['kondisi'] ?></td>
							<td><?= $tbpemerhatikan['saran'] ?></td>
							<td><?php $tgl = strtotime($tbpemerhatikan['tanggal']); echo tgl_indo(date('Y-m-d', $tgl));?></td>
							<td><?= $tbpemerhatikan['keterangan'] ?></td>
						</tr>
	                <?php endforeach ; ?>
	            </tbody>
	        </table>

	       	<table border="1">
				<tr>
					<th colspan="4">NH FUSE TERPASANG</th>
				</tr>
	              
				<tr>
					<th>Jurusan</th>
					<th>R</th>
					<th>S</th>
					<th>T</th>
				</tr>

	            <tbody>
	                <?php foreach ($nhfuse as $index => $tbnhfuse) : ?>
						<tr>
							<td><?= $tbnhfuse['jurusan'] ?></td>
							<td><?= $tbnhfuse['r'] ?></td>
							<td><?= $tbnhfuse['s'] ?></td>
							<td><?= $tbnhfuse['t'] ?></td>
						</tr>
	                <?php endforeach ; ?>
	            </tbody>
	        </table>

	       	<table border="1">
				<tr>
					<th colspan="2">HASIL PENGUKURAN TAHANAN PERTANAHAN</th>
				</tr>

	            <tbody>
	                <?php foreach ($hslpengukuran as $index => $tbpel ) : ?>
						<tr>
							<td>Nol (Ω)</td>
							<td><?= $tbpel['nol_omega'] ?> Ω</td>
						</tr>
						<tr>
							<td>Body (Ω)</td>
							<td><?= $tbpel['body_omega'] ?> Ω</td>
						</tr>
						<tr>
							<td>Arrester (Ω)</td>
							<td><?= $tbpel['arrester_omega'] ?> Ω</td>
						</tr>
						<tr>
							<td>Nol (mA)</td>
							<td><?= $tbpel['nol_ma'] ?> mA</td>
						</tr>
						<tr>
							<td>Body (mA)</td>
							<td><?= $tbpel['body_ma'] ?> mA</td>
						</tr>
						<tr>
							<td>Arrester (mA)</td>
							<td><?= $tbpel['arrester_ma'] ?> mA</td>
						</tr>
	                <?php endforeach ; ?>
	            </tbody>
	        </table>

	       	<table border="1">
				<tr>
					<th colspan="2">Induk</th>
				</tr>
				
	            <tbody>
	                <?php foreach ($induk as $index => $tbpel ) : ?>
						<tr>
							<th>Waktu</th>
							<th><?= $tbpel['waktu'] ?></th>
						</tr>
						<tr>
							<td>R</td>
							<td><?= $tbpel['r'] ?></td>
						</tr>
						<tr>
							<td>S</td>
							<td><?= $tbpel['s'] ?></td>
						</tr>
						<tr>
							<td>T</td>
							<td><?= $tbpel['t'] ?></td>
						</tr>
						<tr>
							<td>TEG PHB</td>
							<td><?= $tbpel['tegphb'] ?></td>
						</tr>
	                <?php endforeach ; ?>
	            </tbody>
	        </table>

	       	<table border="1">
				<tr>
					<th colspan="2">Beban dan Beban Real</th>
				</tr>

	            <tbody>
	                <?php foreach ($beban as $index => $tbpel ) : ?>
						<tr>
							<td>Nilai Beban (<b><?= $tbpel['waktu'] ?></b>)</td>
							<td><?= $tbpel['nilai'] ?> %</td>
						</tr>

						<tr>
							<td>Hasil</td>
							<td><b><?= $tbpel['hasil'] ?></b></td>
						</tr>
	                <?php endforeach ; ?>
	                
					<?php foreach ($bebanreal as $index => $tbpel ) : ?>
						<tr>
							<td>Nilai Beban Real (<b><?= $tbpel['waktu'] ?></b>)</td>
							<td><?= $tbpel['nilai'] ?></td>
						</tr>
	                <?php endforeach ; ?>
	            </tbody>
	        </table>

	       <table border="1">
				<tr>
					<th colspan="2">Penyeimbangan</th>
				</tr>
				
	            <tbody>
	                <?php foreach ($penyeimbang as $index => $tbpenyeimbang ) : ?>
						<tr>
							<td>Beban Puncak</td>
							<td><b><?= $tbpenyeimbang['beban_puncak'] ?></b></td>
						</tr>
						<tr>
							<td>Max</td>
							<td><?= $tbpenyeimbang['max'] ?></td>
						</tr>
						<tr>
							<td>Min</td>
							<td><?= $tbpenyeimbang['min'] ?></td>
						</tr>
						<tr>
							<td>Selisih</td>
							<td><?= $tbpenyeimbang['selisih'] ?> %</td>
						</tr>
						<tr>
							<td>Hasil</td>
							<td><?= $tbpenyeimbang['hasil'] ?></td>
						</tr>
	                <?php endforeach ; ?>

						<tr>
							<th>Gambar</th>
						</tr>
						<tr>
							<td>
								<?php foreach ($gambar as $val): ?>
									<img src="data:<?= $val['tipe_gambar']; ?>;base64,<?= $val['gambar'] ?>" alt="" class="img-rounded center-block mr-4" width="200">
								<?php endforeach; ?>
							</td>
						</tr>
	            </tbody>
	        </table>
	    </div>
	</div>