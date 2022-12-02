<div class="container-fluid">
    <h3><?= $judul; ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url('dashboard');?>">Beranda</a>
            </li>
            <li class="breadcrumb-item"><a href="#">Gardu</a></li>
            <li class="breadcrumb-item">
                <a href="<?=base_url('gardu/gangguan')?>">Gangguan</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <?= $judul;?>
            </li>
        </ol>
    </nav>
</div>
<?php foreach ($gangguan as $index =>
$tbgan ) : ?>
<h5>
    Data Gangguan
    <?php echo $tbgan['no_gardu'] ?>
</h5>
<?php endforeach ; ?>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <?php
            function tgl_indo($date){
                $bulan = array(
                1 =>
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli',
            'Agustus', 'September', 'Oktober', 'November', 'Desember' );
            $pecahkan = explode('-', $date); return $pecahkan[2] . ' ' . $bulan[
            (int)$pecahkan[1] ] . ' ' . $pecahkan[0]; } ?>

            <table
                id="myTable"
                class="table table-bordered"
                style="width: 100%"
            >
                <tbody>
                    <?php foreach ($gangguan as $index =>
                    $tbgan ) : ?>
                    <tr>
                        <th class="text-center border-white" colspan="12">
                            REKAP GANGGUAN GARDU ULP TANJUNGPINANG KOTA
                        </th>
                    </tr>
                    <!-- <center> REKAP GANGGUAN GARDU ULP TANJUNGPINANG KOTA </center> -->

                    <?php endforeach ; ?>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table
                id=""
                class="table table-bordered table-sm"
                style="width: 120%"
            >
                <thead>
                    <tr>
                        <th rowspan="2" class="align-middle">No</th>
                        <th rowspan="2" class="align-middle">No.Gardu</th>
                        <th rowspan="2" class="align-middle">Kapasitas</th>
                        <th rowspan="2" class="align-middle">Tgl Gangguan</th>
                        <th colspan="3" class="align-middle text-center">
                            Jenis Gangguan
                        </th>
                        <th rowspan="2" class="align-middle">
                            Penyebab Gangguan
                        </th>
                        <th colspan="3" class="align-middle text-center">
                            Uraian Tindak Lanjut
                        </th>
                        <th rowspan="2" class="align-middle">
                            Frekuensi Gangguan
                        </th>
                    </tr>

                    <tr>
                        <th class="align-middle">Komponen</th>
                        <th class="align-middle">Jenis</th>
                        <th class="align-middle">Keterangan</th>
                        <!-- --------------------------------------- -->
                        <th class="align-middle">Uraian</th>
                        <th class="align-middle">Material Terpakai</th>
                        <th class="align-middle">Vol</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($gangguan as $index =>
                    $tbgan) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $tbgan['no_gardu'] ?></td>
                        <td><?= $tbgan['kapasitas'] ?></td>
                        <td>
                            <?php $tgl = strtotime($tbgan['tanggal']); echo tgl_indo(date('Y-m-d', $tgl));?>
                        </td>
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
</div>
<div>
    <div class="modal-footer">
        <a href="<?= base_url('gardu/gangguan')?>" class="btn btn-dark mr-auto"
            >Kembali</a
        >
        <?php foreach ($gangguan as $index =>
        $tbgan ) : ?>
        <a
            href="<?= base_url('gardu/exportgangguan')?>/<?php echo $tbgan['id'] ?>"
            class="btn btn-success mt-2 ml-2"
            style="float: left; font-size: 15px"
            ><i class="mdi mdi-arrow-down-bold-circle-outline"></i> Export Ke
            Excel</a
        >
        <?php endforeach ; ?>
    </div>
</div>
