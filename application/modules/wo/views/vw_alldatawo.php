<div class="container-fluid">
  <h3><?= $judul; ?></h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Beranda</a></li>
      <li class="breadcrumb-item"><a href="<?=base_url('wo');?>">WO</a></li>
      <li class="breadcrumb-item"><a href="<?=base_url('wo/inputwo')?>">Input Wo</a></li>
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
                            <th rowspan="2">
                                <img src ="<?= base_url(); ?>assets/img/index.jpg" width="50px">
                            </th>

                            <th rowspan="2">
                                <span>
                                    PT. PLN (Persero) WILAYAH RIAU & KEPRI <p>
                                    UP3 TANJUNGPINANG <br>
                                    ULP TANJUNGPINANG KOTA
                                </span>
                            </th>
                        </tr>
                    </tbody>
                </table>
            
                <div class="table-responsive">
                    <table class="table table-hover" >
                        <tbody>
                            <?php foreach ($inputwo as $index => $tbwo ) : ?>
                                <tr>
                                    <th>
                                        NOMOR :
                                    </th>
                                    <td><?= $tbwo['nomor'] ?></td>
                                </tr>
                                <tr>
                                    
                                </tr>
                                    <th>
                                        PERIHAL :
                                    </th>
                                    <td><?= $tbwo['perihal'] ?></td>
                                <tr>
                                    <th>DITUGASKAN KEPADA</th>
                                    <td><?= $tbwo['tugas'] ?></td>
                                </tr>
                                <tr>
                                    <th>PEKERJAAN</th>
                                    <td><?= $tbwo['pekerjaan'] ?></td>
                                </tr>
                                <tr>
                                    <th>LOKASI PEKERJAAN</th>
                                     <td><?= $tbwo['lokasi'] ?></td>
                                </tr>
                                <tr>
                                    <th>TARGET</th>
                                    <td><?= $tbwo['target'] ?></td>
                                </tr>
                                <tr>
                                    <th>REALISASI</th>
                                    <td><?= $tbwo['realisasi'] ?></td>
                                </tr>
                             <?php endforeach ; ?>
                        </tbody>
                    </table>
                </div>  
	        </div>
	    </div>
    </div>
    <div class="modal-footer">
        <a href="<?= base_url('wo/inputwo')?>" class="btn btn-dark mr-auto" >Kembali</a>
        <?php foreach ($inputwo as $index => $tbwo ) : ?>
            <a href="<?= base_url('wo/export')?>" class="btn btn-success mt-2 ml-2"  style="float:left; font-size: 15px;">
                <i class="mdi mdi-arrow-down-bold-circle-outline"></i>
                    Export Ke Excel
            </a>
        <?php endforeach ; ?>
    </div>
