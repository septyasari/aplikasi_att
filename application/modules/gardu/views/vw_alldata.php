<div class="container-fluid">
  <h3><?= $judul; ?></h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Beranda</a></li>
      <li class="breadcrumb-item"><a href="<?=base_url('gardu');?>">Gardu</a></li>
      <li class="breadcrumb-item"><a href="<?=base_url('gardu/inspeksi')?>">Inspeksi</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $judul;?></li>
    </ol>
  </nav>
<?php foreach ($pelaksana as $index => $tball ) : ?>
	<h5>Data Gardu <?php echo $tball['no_gardu'] ?></h5>
<?php endforeach ; ?>

	<div class="card">
	    <div class="card-body">
			<div class="table-responsive">
            <table id="myTable" class="table table-bordered" style="width:100%">
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

							<th colspan="2">Kartu   : LHR - 01<br>
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

	        <table id="myTable" class="table table-bordered" style="width:100%">
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

			<table id="myTable" class="table table-bordered" style="width:100%">
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
								<input type="checkbox" name="checked[]" >
							</td>
	                	</tr>
	                <?php endforeach ; ?>
	            </tbody>
	        </table>

	        <table id="myTable" class="table table-bordered" style="width:100%">
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

	        <table id="myTable" class="table table-bordered" style="width:100%">
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

			<table id="myTable" class="table table-bordered" style="width:100%">
				<tr>
					<th colspan="2">HASIL PENGUKURAN TAHANAN PERTANAHAN</th>
				</tr>

	            <tbody>
	                <?php foreach ($hslpengukuran as $index => $tbpel ) : ?>
						<tr>
							<td>Nol (Ω) </td>
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

			<table id="myTable" class="table table-bordered" style="width:100%">
				<tr>
					<th colspan="11">Jurusan</th>
				</tr>
				
				<tr>
					<th rowspan="2">Jurusan</th>
					<th colspan="5">Siang</th>
					<th colspan="5">Malam</th>
				</tr>

				<tr>
					<th>R</th>
					<th>S</th>
					<th>T</th>
					<th>N</th>
					<th>Teg.phb</th>
					<th>R</th>
					<th>S</th>
					<th>T</th>
					<th>N</th>
					<th>Teg.phb</th>
				</tr>

	            <tbody>
	                <tr>
	                    <?php foreach ($jurusan as $index => $tbjrs) : ?>
	                    <td><?= $tbjrs['jurusan'] ?></td>
	                </tr>
	                	<?php endforeach ; ?>
					<tr>
	                    <?php foreach ($jrs as $index => $tbjrssiang) : ?>
							<td><?= $tbjrssiang['r']?></td>
							<td><?= $tbjrssiang['s']?></td>
	               		 <?php endforeach ; ?>
	                </tr>
	            </tbody>
	        </table>

	        <table id="myTable" class="table table-bordered" style="width:100%">
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

	        <table id="myTable" class="table table-bordered" style="width:100%">
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

	        <table id="myTable" class="table table-bordered" style="width:100%">
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
						
							<th colspan="2">Keterangan</th>
						</tr>
							<td colspan="2">
								<?php foreach ($keterangan as $index => $tbketerangan ) : ?>
									<tr>
										<td>Keterangan</td>
										<td><?= $tbketerangan['keterangan'] ?></td>
									</tr>
								<?php endforeach; ?>
							</td>
	            </tbody>
	        </table>
		
		</div>
	</div>
<div class="modal-footer">
	<a href="<?= base_url('gardu/inspeksi')?>" class="btn btn-dark mr-auto" >Kembali</a>
	<?php foreach ($pelaksana as $index => $tball ) : ?>
	<a href="<?= base_url('gardu/export')?>/<?php echo $tball['id_gardu'] ?>" class="btn btn-success mt-2 ml-2" style="float:left; font-size: 15px;"><i class="mdi mdi-arrow-down-bold-circle-outline"></i> Export Ke Excel</a>
	<?php endforeach ; ?>
</div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#alldata').DataTable();
  });
</script>
