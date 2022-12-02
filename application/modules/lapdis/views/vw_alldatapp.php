<div class="container-fluid">
  <h3><?= $judul; ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Beranda</a></li>
        <li class="breadcrumb-item"><a href="#">Laporan Distribusi</a></li>
        <li class="breadcrumb-item"><a href="<?=base_url('Lapdis/pp')?>">Pekerjaan Pemeliharaan</a></li>
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
                                <img src ="<?= base_url(); ?>assets/img/index.jpg" width="50px">
                            </th>

                            <th>
                                <span>
                                    PT. PLN (Persero) WILAYAH RIAU & KEPRI <br>UP3 TANJUNGPINANG <br> ULP TANJUNGPINANG KOTA
                                </span>
                            </th>

                             <th>
                                <span>
                                    <center>LAPORAN PELAKSANAAN <br> PEKERJAAN PEMELIHARAAN JARINGAN <br> AGUSTUS 2020</center> 
                                </span>
                            </th>

                            <th>
                                <span>
                                    PT. HALEYORA POWER <br> UP3 TANJUNGPINANG <br> ULP TANJUNGPINANG KOTA 
                                </span>
                            </th>

                             <th>
                                <img src ="<?= base_url(); ?>assets/img/logo1.jpg" width="50px">
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="table-responsive">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th rowspan="2" class="text-center">No</th>
                            <th rowspan="2" class="text-center">Tanggal Pekerjaan</th>
                            <th rowspan="2" class="text-center">No Tiang / Gardu</th>
                            <th rowspan="2" class="text-center">Penyulang</th>
                            <th rowspan="2" class="text-center">Kontruksi</th>
                            <th rowspan="2" class="text-center">Jumlah </th>
                            <th rowspan="2" class="text-center">Lokasi</th>
                            <th rowspan="2" class="text-center">Uraian Pekerjaan</th>
                            <th colspan="3" class="text-center"> Foto </th>
                            <th rowspan="2" class="text-center">Petugas Pelaksana</th>
                            <th rowspan="2" class="text-center">Keterangan</th>
                        </tr>

                        <tr>
                            <th>Sebelum</th>
                            <th>Pekerjaan</th>
                            <th>Sesudah</th>
                        </tr>

                        <?php $i = 1; ?>
                            <?php foreach ($pp as $index => $tbpp) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?php $tgl = strtotime($tbpp['tgl_pekerjaan']); echo tgl_indo(date('Y-m-d', $tgl));?></td>
                                    <td><?= $tbpp['no_tiang/gardu'] ?></td>
                                    <td><?= $tbpp['penyulang'] ?></td>
                                    <td><?= $tbpp['kontruksi'] ?></td>
                                    <td><?= $tbpp['jumlah'] ?></td>
                                    <td><?= $tbpp['lokasi'] ?></td>
                                    <td><?= $tbpp['uraian_pekerjaan'] ?></td>
                                    <td><?= $tbpp['sebelum'] ?></td>
                                    <td><?= $tbpp['pekerjaan'] ?></td>
                                    <td><?= $tbpp['sesudah'] ?></td>
                                    <td><?= $tbpp['petugas_pelaksana'] ?></td>
                                    <td><?= $tbpp['keterangan'] ?></td>
                                </tr>
                            <?php endforeach ; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <a href="<?= base_url('lapdis/pp')?>" class="btn btn-dark mr-auto" >Kembali</a>
                
        <a href="<?= base_url('lapdis/export')?>/<?php echo $tbpp['id'] ?>" class="btn btn-success mt-2 ml-2" style="float:left; font-size: 15px;"><i class="mdi mdi-arrow-down-bold-circle-outline"></i> Export Ke Excel</a>
            
    </div>
