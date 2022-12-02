<div class="container-fluid">
  <h3><?= $judul; ?></h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Beranda</a></li>
      <li class="breadcrumb-item"><a href="#">WO</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $judul;?></li>
    </ol>
  </nav>
  <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <?= $this->session->flashdata('message'); ?>
                    <?= form_error('menu', '<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>') ?>
                    <a href="<?= base_url('wo/tambahDatawo')?>"  class="btn btn-primary mb-3 btn-lg btn-block">
                        <i class="mdi mdi-plus"></i>
                        Tambah Data Baru
                    </a>
                    <div class="table-responsive">
                        <table id="wo" class="table table-responsive" style="width:100%">
                            <thead>
                                <tr class="text-center">
                                    <th style="vertical-align: top;">No</th>
                                    <th style="vertical-align: top;">Nomor</th>
                                    <th style="vertical-align: top;">Perihal</th>
                                    <th style="vertical-align: top;">DiTugaskan Kepada</th>
                                    <th style="vertical-align: top;">Pekerjaan</th>
                                    <th style="vertical-align: top;">Lokasi Pekerjaan</th>
                                    <th style="vertical-align: top;">Target</th>
                                    <th style="vertical-align: top;">Realisasi</th>
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
                                        <?php foreach($wo as $index => $tbwo ) : ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $tbwo['nomor'] ?></td>
                                                <td><?= $tbwo['perihal'] ?></td>
                                                <td><?= $tbwo['tugas'] ?></td>
                                                <td><?=$tbwo['pekerjaan']?></td>
                                                <td><?= $tbwo['lokasi'] ?></td>
                                                <td><?= $tbwo['target'] ?></td>
                                                <td><?= $tbwo['realisasi'] ?></td>
                                                <td class="text-center">
                                                    <a href="<?php echo base_url();?>wo/editdatawo/<?php echo $tbwo['id']; ?>" class="btn btn-success btn-xs"><i class="mdi mdi-pencil"></i></a>
                                                    <a href="<?php echo base_url();?>wo/delete/<?php echo $tbwo['id'];?>" onclick="return confirm ('Yakin Akan Menghapus Data')"class="btn btn-danger btn-xs"><i class="mdi mdi-delete"></i></a>
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
        <a href="<?= base_url('wo/detailwo/'). $tbwo['id'] ?>" class="badge badge-info">Lihat Semua Data</a>
    </div>
    <a href="<?= base_url('wo/exportmonitoring')?>" class="btn btn-success mt-2 ml-2" style="float:left; font-size: 15px;"><i class="mdi mdi-arrow-down-bold-circle-outline"></i> Export Ke Excel</a>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#wo').DataTable();
  });
</script>

