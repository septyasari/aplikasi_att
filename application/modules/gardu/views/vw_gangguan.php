<div class="container-fluid">
    <h3><?= $judul; ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url('dashboard');?>">Beranda</a>
            </li>
            <li class="breadcrumb-item"><a href="#">Gardu</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                <?= $judul;?>
            </li>
        </ol>
    </nav>

    <!-- <a href="<?= base_url('gardu/exportgangguan')?>" class="btn btn-success mt-2 ml-2" style="float:left; font-size: 15px;"><i class="fa fa-download"></i> Export Ke Excel</a>         -->
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <?= $this->session->flashdata('message'); ?>
                    <?= form_error('menu', '<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>') ?>
                    <a
                        href="<?= base_url('gardu/tambahDatagangguan')?>"
                        class="btn btn-primary mb-3 btn-lg btn-block"
                    >
                        <i class="mdi mdi-plus"></i>
                        Tambah Data Baru
                    </a>
                    <?php echo $this->session->flashdata('message_data') ?>

                    <div class="">
                        <table
                            id="gangguan"
                            class="table table-responsive"
                            style="width: 100%"
                        >
                            <thead>
                                <tr role="row" class="text-center">
                                    <th style="vertical-align: top" rowspan="2">
                                        No
                                    </th>
                                    <th style="vertical-align: top" rowspan="2">
                                        No Gardu
                                    </th>
                                    <th style="vertical-align: top" rowspan="2">
                                        Kapasitas (kVA)
                                    </th>
                                    <th style="vertical-align: top" rowspan="2">
                                        Tanggal Gangguan
                                    </th>
                                    <th style="vertical-align: top" colspan="3">
                                        Jenis Gangguan
                                    </th>
                                    <th style="vertical-align: top" rowspan="2">
                                        Penyebab Gangguan
                                    </th>
                                    <th style="vertical-align: top" rowspan="2">
                                        Tindak Lanjut
                                    </th>
                                    <th style="vertical-align: top" rowspan="2">
                                        Frekuensi Gangguan (Kali)
                                    </th>
                                    <th style="vertical-align: top" rowspan="2">
                                        Aksi
                                    </th>
                                    <th style="vertical-align: top" rowspan="2">
                                        <i class="mdi mdi-settings"></i>
                                    </th>
                                </tr>

                                <tr>
                                    <th>Komponen</th>
                                    <th>Jenis</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php 
                                function tgl_indo($date){
                                  $bulan = array(
                                  1 =>
                                'Januari', 'Februari', 'Maret', 'April', 'Mei',
                                'Juni', 'Juli', 'Agustus', 'September',
                                'Oktober', 'November', 'Desember' ); $pecahkan =
                                explode('-', $date); return $pecahkan[2] . ' ' .
                                $bulan[ (int)$pecahkan[1] ] . ' ' .
                                $pecahkan[0]; } ?>
                                <?php $i = 1; ?>
                                <?php foreach ($gangguan as $index =>
                                $tbgan ) : ?>
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
                                    <td><?= $tbgan['frekuensi'] ?></td>
                                    <td class="text-center">
                                        <a
                                            href="<?= base_url('gardu/detailgangguan/'). $tbgan['id'] ?>"
                                            class="badge badge-info"
                                        >
                                            Lihat Semua Data</a
                                        >
                                    </td>
                                    <td class="text-center">
                                        <!-- href="<?php echo base_url(); ?>gardu/editdatagangguan/<?php echo $tbgan['id']; ?>" -->
                                        <a
                                            href="<?php echo base_url(); ?>gardu/editdatagangguan/<?php echo $tbgan['id']; ?>"
                                            class="btn btn-success btn-xs"
                                            ><i class="mdi mdi-pencil"></i
                                        ></a>
                                        <a
                                            href="<?php echo base_url(); ?>gardu/delete/<?php echo $tbgan['id']; ?>"
                                            onclick="return confirm ('Yakin Akan Menghapus Data')"
                                            class="btn btn-danger btn-xs"
                                            ><i class="mdi mdi-delete"></i
                                        ></a>
                                    </td>
                                </tr>
                                <?php endforeach ; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#gangguan").DataTable();
    });
</script>
