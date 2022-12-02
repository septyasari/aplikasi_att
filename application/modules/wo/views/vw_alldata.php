<div class="container-fluid">
  <h3><?= $judul; ?></h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Beranda</a></li>
      <li class="breadcrumb-item"><a href="<?=base_url('wo');?>">WO</a></li>
      <li class="breadcrumb-item"><a href="<?=base_url('wo/monitoring')?>">Monitoring</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $judul;?></li>
    </ol>
  </nav>
</div>
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
                        <tr>
                            <th class="text-center" >REKAP REALISASI WO NON RUTIN YANTEK <p> RAYON TANJUNG PINANG KOTA <p>TAHUN 2019</th>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="table-responsive">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th rowspan="2" valign="center">No</th>
                            <th rowspan="2" class="text-center">NO WO</th>
                            <th rowspan="2" class="text-center">TGL TERBIT</th>
                            <th rowspan="2" class="text-center">URAIAN PEKERJAAN</th>
                            <th rowspan="2" class="text-center">LOKASI</th>
                            <th colspan="2" class="text-center">TARGET</th>
                            <th colspan="2" class="text-center">REALISASI</th>
                            <th rowspan="2" class="text-center">TGL REALISASI</th>
                            <th rowspan="2" class="text-center">KETERANGAN</th>
                            <th rowspan="2" class="text-center">STATUS</th>
                            <th rowspan="2" class="text-center">PENCAPAIAN</th>
                        </tr>

                        <tr>
                            <th>VOL</th>
                            <th>SATUAN</th>

                            <th>VOL</th>
                            <th>SATUAN</th>
                        </tr>

                        <?php $i = 1; ?>
                        <?php foreach ($monitoring as $index => $tbmonitoring ) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $tbmonitoring['no_wo'] ?></td>
                                <td><?= $tbmonitoring['tgl_terbit'] ?></td>
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
	    </div>
	</div>
    
    <div class="modal-footer">
        <a href="<?= base_url('wo/monitoring')?>" class="btn btn-dark mr-auto" >Kembali</a>
            <a href="<?= base_url('wo/export')?>" class="btn btn-success mt-2 ml-2"  style="float:left; font-size: 15px;">
                <i class="mdi mdi-arrow-down-bold-circle-outline"></i>
                    Export Ke Excel
            </a>
    </div>
