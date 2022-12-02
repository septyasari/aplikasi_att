<div class="container-fluid">
  <h3><?= $judul; ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Beranda</a></li>
        <li class="breadcrumb-item"><a href="#">Laporan Distribusi</a></li>
        <li class="breadcrumb-item"><a href="<?=base_url('Lapdis/se')?>">SE 017</a></li>
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

                            <th>
                                <span>
                                   <center>
                                       Rekapitulasi Hasil Implementasi Pemeliharaan Trafo Distribusi Berbasis Manajemen Aset (SE.0017.E/DIR/2014)<br>	
                                       PT. PLN (Persero) Wilayah Riau dan Kepulauan Riau<br>
                                       Triwulan 3 - 2020																		
                                   </center>
                                </span>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="table-responsive">
                <table id="myTable" class="table table-bordered" style="width:100%">
                    <tbody>
                        <tr>
                            <th rowspan="2" class="text-center">No</th>
                            <th colspan="2" class="text-center">Gardu</th>
                            <th rowspan="2" class="text-center">ULP</th>
                            <th rowspan="2" class="text-center">UP3</th>
                            <th rowspan="2" class="text-center">Waktu Pelaksanaan</th>
                            <th colspan="2" class="text-center">Trafo</th>
                            <th colspan="2" class="text-center">Aset</th>
                            <th colspan="5" class="text-center">Hasil Asseessment</th>
                            <th rowspan="3" class="text-center">Health Index</th>
                            <th rowspan="3" class="text-center">Catatan Perbaikan</th>

                        <tr>
                            <th>Nama</th>
                            <th>Lokasi</th>
                        
                            <th>KVA</th>
                            <th>Tipe Seal</th>
                            <th>Kelas</th>
                            <th>Kategori</th>

                            <th rowspan="2">Inspeksi Fisik</th>
                            <th colspan="2">Tier-1</th>
                            <th>Tier-2</th>
                            <th rowspan="2">Tier-3</th>
                        </tr>

                        <tr>
                            <th>Karakteristik</th>
                            <th>Health Index</th>
                           
                     
                            <th>Karakteristik</th>
                            <th>Health Index</th>
                        </tr>
                           

                        <!-- <?php $i = 1; ?>
                            <?php foreach ($se as $index => $tbse) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?php $tgl = strtotime($tbgsp['tanggal']); echo tgl_indo(date('Y-m-d', $tgl));?></td>
                                    <td><?= $tbgsp['regu_perampalan'] ?></td>
                                    <td><?= $tbgsp['no_tiang/gardu'] ?></td>
                                    <td><?= $tbgsp['penyulang'] ?></td>
                                    <td><?= $tbgsp['jenis_pohon'] ?></td>
                                    <td><?= $tbgsp['pohon'] ?></td>
                                    <td><?= $tbgsp['gardu'] ?></td>
                                    <td><?= $tbgsp['layangan'] ?></td>
                                    <td><?= $tbgsp['akar'] ?></td>
                                    <td><?= $tbgsp['animal_guard'] ?></td>
                                    <td><?= $tbgsp['rantas'] ?></td>
                                    <td><?= $tbgsp['lokasi'] ?></td>
                                    <td><?= $tbgsp['status'] ?></td>
                                    <td><?= $tbgsp['keterangan'] ?></td>
                                </tr>
                            <?php endforeach ; ?> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <a href="<?= base_url('lapdis/se')?>" class="btn btn-dark mr-auto" >Kembali</a>
                
        <a href="<?= base_url('lapdis/export')?>/<?php echo $tbse['id'] ?>" class="btn btn-success mt-2 ml-2" style="float:left; font-size: 15px;"><i class="mdi mdi-arrow-down-bold-circle-outline"></i> Export Ke Excel</a>
            
    </div>
