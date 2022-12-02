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
                    <a href="<?= base_url('wo/tambahData')?>"  class="btn btn-primary mb-3 btn-lg btn-block">
                        <i class="mdi mdi-plus"></i>
                        Tambah Data Baru
                    </a>
                    <div class="table-responsive">
                        <table id="monitoring" class="table table-responsive" style="width:100%">
                            <thead>
                                <tr class="text-center">
                                    <th style="vertical-align: top;">No</th>
                                    <th style="vertical-align: top;">No WO </th>
                                    <th style="vertical-align: top;">Tanggal Terbit</th>
                                    <th style="vertical-align: top;">Jenis Pekerjaan</th>
                                    <th style="vertical-align: top;">Lokasi</th>
                                    <th style="vertical-align: top;">Status</th>
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
                                        <?php foreach($monitoring as $index => $tbmonitoring ) : ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $tbmonitoring['no_wo'] ?></td>
                                                <td><?php $tgl = strtotime($tbmonitoring['tgl_terbit']); echo tgl_indo(date('Y-m-d', $tgl));?></td>
                                                <td><?=$tbmonitoring['uraian_pekerjaan']?></td>
                                                <td><?= $tbmonitoring['lokasi'] ?></td>
                                                <td><?= $tbmonitoring['status'] ?></td>
                                                <td class="text-center">
                                                    <a href="<?php echo base_url();?>wo/edit/<?php echo $tbmonitoring['id']; ?>" class="btn btn-success btn-xs"><i class="mdi mdi-pencil"></i></a>
                                                    <a href="<?php echo base_url();?>wo/delete/<?php echo $tbmonitoring['id'];?>" onclick="return confirm ('Yakin Akan Menghapus Data')"class="btn btn-danger btn-xs"><i class="mdi mdi-delete"></i></a>
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
        <a href="<?= base_url('wo/detail/'). $tbmonitoring['id'] ?>" class="badge badge-info">Lihat Semua Data</a>
    </div>
    <a href="<?= base_url('wo/exportmonitoring')?>" class="btn btn-success mt-2 ml-2" style="float:left; font-size: 15px;"><i class="mdi mdi-arrow-down-bold-circle-outline"></i> Export Ke Excel</a>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#monitoring').DataTable();
  });
</script>
