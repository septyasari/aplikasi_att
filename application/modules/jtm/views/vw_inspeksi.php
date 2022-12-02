<div class="container-fluid">
  <h3><?= $judul; ?></h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Beranda</a></li>
      <li class="breadcrumb-item"><a href="#">JTM</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $judul;?></li>
    </ol>
  </nav>
  <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <?= $this->session->flashdata('message'); ?>
                <?= form_error('menu', '<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>') ?>
                <a href="<?= base_url('jtm/tambahData')?>"  class="btn btn-primary mb-3 btn-lg btn-block">
                    <i class="mdi mdi-plus"></i>
                    Tambah Data Baru
                </a>
                <div class="table-responsive">
                    <table id="inspeksijtm" class="table table-responsive" style="width:100%">
                        <thead>
                            <tr class="text-center">
                                <th style="vertical-align: top;">No</th>
                                <th style="vertical-align: top;">Tanggal Inspeksi</th>
                                <th style="vertical-align: top;">Feeder</th>
                                <th style="vertical-align: top;">No Tiang</th>
                                <th style="vertical-align: top;">Konstruksi</th>
                                <th style="vertical-align: top;">Lokasi</th>
                                <th style="vertical-align: top;">Masalah</th>
                                <th style="vertical-align: top;">Dokumentasi Sebelum</th>
                                <th style="vertical-align: top;">Material</th>
                                <th style="vertical-align: top;">Sesudah</th>
                                <th style="vertical-align: top;">Keterangan</th>
                                <th style="vertical-align: top;">Aksi</th>
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
                                <?php foreach ($join as $index => $tblpel ) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?php $tgl = strtotime($tblpel['tanggal']); echo tgl_indo(date('Y-m-d', $tgl));?></td>
                                        <td><?= $tblpel['penyulang'] ?></td>
                                        <td><?= $tblpel['nomor'] ?></td>
                                        <td><?= $tblpel['konstruksi'] ?></td>
                                        <td><?= $tblpel['alamat'] ?></td>
                                        <td><?= $tblpel['masalah'] ?></td>
                                        <td><?= $tblpel['utuh'] ?></td>
                                        <td><?= $tblpel['atas'] ?></td>
                                        <td><?= $tblpel['bawah'] ?></td>
                                        <td><?= $tblpel['saran'] ?></td>
                                        <td>
                                            <a href="<?= base_url('jtm/detail/'). $tblpel['id'] ?>" class="badge badge-info">
                                                Lihat Semua Data
                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>jtm/edit/<?php echo $tblpel['id']; ?>" class="btn btn-success btn-xs"><i class="mdi mdi-pencil"></i></a>
                                            <a href="<?php echo base_url();?>jtm/delete/<?php echo $tblpel['id'];?>" onclick="return confirm ('Yakin Akan Menghapus Data')"class="btn btn-danger btn-xs"><i class="mdi mdi-delete"></i></a>
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
  $(document).ready(function() {
    $('#inspeksijtm').DataTable();
  });
</script>