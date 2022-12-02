<div class="container-fluid">
  <h3><?= $judul; ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Beranda</a></li>
        <li class="breadcrumb-item"><a href="#">Laporan Distribusi</a></li>
        <li class="breadcrumb-item"><a href="<?=base_url('Lapdis/gsp')?>">GSP</a></li>
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
                                    <center>LAPORAN PELAKSANAAN <br> GERAKAN SIPA PEDULI (GSP) <br> AGUSTUS 2020</center> 
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
                            <th rowspan="2" class="text-center">Tanggal</th>
                            <th rowspan="2" class="text-center">Regu Perampalan</th>
                            <th rowspan="2" class="text-center">No Tiang/Gard</th>
                            <th rowspan="2" class="text-center">Penyulang</th>
                            <th rowspan="2" class="text-center">Jenis Pohon</th>
                            <th colspan="6" class="text-center">Jumlah</th>
                            <!-- <th rowspan="2" class="text-center">Sebelum</th>
                            <th rowspan="2" class="text-center">Sesudah</th> -->
                            <th rowspan="2" class="text-center">Lokasi</th>
                            <th rowspan="2" class="text-center">Status</th>
                            <th rowspan="2" class="text-center">Keterangan</th>

                        <tr>
                            <th>Pohon (GWG)</th>
                            <th>Gardu (Titik)</th>
                            <th>Layangan (Titik)</th>
                            <th>Akar (Titik)</th>
                            <th>Animal Guard (Titik)</th>
                            <th>Rantas (Titik)</th>
                        </tr>

                        <?php $i = 1; ?>
                            <?php foreach ($gsp as $index => $tbgsp) : ?>
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
                            <?php endforeach ; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <a href="<?= base_url('lapdis/gsp')?>" class="btn btn-dark mr-auto" >Kembali</a>
                
        <a href="<?= base_url('lapdis/export')?>/<?php echo $tbgsp['id'] ?>" class="btn btn-success mt-2 ml-2" style="float:left; font-size: 15px;"><i class="mdi mdi-arrow-down-bold-circle-outline"></i> Export Ke Excel</a>
            
    </div>
