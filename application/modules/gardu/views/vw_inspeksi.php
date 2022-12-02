<div class="container-fluid">
  <h3><?= $judul; ?></h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Beranda</a></li>
      <li class="breadcrumb-item"><a href="#">Gardu</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $judul;?></li>
    </ol>
  </nav>
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <?= $this->session->flashdata('message'); ?>
          <?= form_error('menu', '<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>') ?>
          <a href="<?= base_url('gardu/tambahData')?>"  class="btn btn-primary mb-3 btn-lg btn-block">
            <i class="mdi mdi-plus"></i>
            Tambah Data Baru
          </a>
          <div class="table-responsive">
            <table id="inspeksi" class="table table-responsive" style="width:100%">
             <thead>
                        <tr class="text-center">
                            <th style="vertical-align: top;">No</th>
                            <th style="vertical-align: top;">Nomor Gardu</th>
                            <th style="vertical-align: top;">Tanggal</th>
                            <th style="vertical-align: top;">Penyulang</th>
                            <th style="vertical-align: top;">Kapasitas</th>
                            <th style="vertical-align: top;">Lokasi</th>
                            <th style="vertical-align: top;">Tahun Pembuatan</th>
                            <th style="vertical-align: top;">Merek</th>
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
                                <?php foreach ($join as $index => $tbpel ) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $tbpel['no_gardu'] ?></td>
                                        <td><?php $tgl = strtotime($tbpel['tanggal']); echo tgl_indo(date('Y-m-d', $tgl));?></td>
                                        <td><?= $tbpel['penyulang'] ?></td>
                                        <td><?= $tbpel['kapasitas'] ?></td>
                                        <td><?= $tbpel['lokasi'] ?></td>
                                        <td><?= $tbpel['tahunpembuatan'] ?></td>
                                        <td><?= $tbpel['merk'] ?></td>  
                                        <td class="text-center"><a href="<?= base_url('gardu/detail/'). $tbpel['id'] ?>" class="badge badge-info">Lihat Semua Data</a>
                                        </td>
                                        <td class="text-center">
                                            <a href="<?php echo base_url(); ?>gardu/edit/<?php echo $tbpel['id']; ?>" class="btn btn-success btn-xs"><i class="mdi mdi-pencil"></i></a>
                                            <a href="<?php echo base_url(); ?>gardu/delete/<?php echo $tbpel['id']; ?>" onclick="return confirm ('Yakin Akan Menghapus Data')" class="btn btn-danger btn-xs"><i class="mdi mdi-delete"></i></a>
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
    $('#inspeksi').DataTable();
  });
</script>

