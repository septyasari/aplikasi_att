<div class="container-fluid">
    <h3><?= $judul; ?></h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Beranda</a></li>
            <li class="breadcrumb-item"><a href="#">Laporan Distribusi</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $judul;?></li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <?= $this->session->flashdata('message'); ?>
                        <?= form_error('menu', '<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>') ?>
                        <a href="<?= base_url('lapdis/tambahDatapp')?>"  class="btn btn-primary mb-3 btn-lg btn-block">
                            <i class="mdi mdi-plus"></i>
                            Tambah Data Baru
                        </a>
                            <div class="table-responsive">
                                <table id="pp" class="table table-responsive" style="width:100%">
                                    <thead>
                                        <tr class="text-center" >
                                            <th style="vertical-align: top;">No</th>
                                            <th style="vertical-align: top;">Tanggal Pekerjaan</th>
                                            <th style="vertical-align: top;">Nomor Tiang / Gardu</th>
                                            <th style="vertical-align: top;">Penyulang</th>
                                            <th style="vertical-align: top;">Kontruksi</th>
                                            <th style="vertical-align: top;">Jumlah</th>
                                            <th style="vertical-align: top;">Lokasi</th>
                                            <th style="vertical-align: top;">Uraian Pekerjaan</th>
                                            <th style="vertical-align: top;">Sebelum</th> 
                                            <th style="vertical-align: top;">Pekerjaan</th>
                                            <th style="vertical-align: top;">Sesudah</th>
                                            <th style="vertical-align: top;">Petugas Pelaksana</th>
                                            <th style="vertical-align: top;">Keterangan</th>
                                            <th style="vertical-align: top;"><i class="mdi mdi-settings"></th>
                                        </tr>
                                    </thead>
                                        <tbody>
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
                                            <?php $i = 1; ?>
                                            <?php foreach ($pp as $index => $tbpp ) : ?>
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
                                                    <td class="text-center">
                                                        <a href="<?php echo base_url(); ?>lapdis/editdatapp/<?php echo $tbpp['id']; ?>" class="btn btn-success btn-xs"><i class="mdi mdi-pencil"></i></a>
                                                        <a href="<?php echo base_url(); ?>lapdis/delete/<?php echo $tbpp['id']; ?>" onclick="return confirm ('Yakin Akan Menghapus Data')" class="btn btn-danger btn-xs"><i class="mdi mdi-delete"></i></a>
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
    <div class="modal-footer">
        <a href="<?= base_url('lapdis/detail/'). $tbpp['id'] ?>" class="badge badge-info">Lihat Semua Data</a>
    </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#pp').DataTable();
  });
</script>