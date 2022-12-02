<div class="container-fluid">
    <h3><?= $judul; ?></h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Beranda</a></li>
            <li class="breadcrumb-item"><a href="<?=base_url('gardu');?>">Gardu</a></li>
            <li class="breadcrumb-item"><a href="<?=base_url('gardu/inspeksi')?>">Inspeksi</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $judul;?></li>
            </ol>
        </nav>

        <div>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-pelaksana-tab" data-toggle="pill" href="#pills-pelaksana" role="tab" aria-controls="pills-pelaksana" aria-selected="true">Pelaksana</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="pills-trafo-tab" data-toggle="pill" href="#pills-trafo" role="tab" aria-controls="pills-trafo" aria-selected="false">Trafo</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="pills-pemeriksaan-tab" data-toggle="pill" href="#pills-pemeriksaan" role="tab" aria-controls="pills-pemeriksaan" aria-selected="false">Pemeriksaan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="pills-pemerhatikan-tab" data-toggle="pill" href="#pills-pemerhatikan" role="tab" aria-controls="pills-pemerhatikan" aria-selected="false">Pemerhatikan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="pills-nhfuse-tab" data-toggle="pill" href="#pills-nhfuse" role="tab" aria-controls="pills-nhfuse" aria-selected="false">NH FUSE</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="pills-hasilpengukuran-tab" data-toggle="pill" href="#pills-hasilpengukuran" role="tab" aria-controls="pills-hasilpengukuran" aria-selected="false">Hasil Pengukuran</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="pills-induk-tab" data-toggle="pill" href="#pills-induk" role="tab" aria-controls="pills-induk" aria-selected="false">Induk</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="pills-datajurusan-tab" data-toggle="pill" href="#pills-datajurusan" role="tab" aria-controls="pills-datajurusan" aria-selected="false">Data Jurusan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="pills-keterangan-tab" data-toggle="pill" href="#pills-keterangan" role="tab" aria-controls="pills-keterangan" aria-selected="false">Keterangan</a>
                </li>
            </ul>
        </div>

        <?php 
            if ($this->session->flashdata('message_data'))
                echo $this->session->flashdata('message_data')
         ?>
        

        <div class="tab-content" id="pills-tabContent">
            <!-- pills pelaksana -->
            <?php $this->load->view($pills_pelaksana) ?>
            <!-- pills trafo -->
            <?php $this->load->view($pills_trafo); ?>
            <!-- pills pemeriksaan -->
            <?php $this->load->view($pills_pemeriksaan) ?>
            <!-- pills pemerhatikan -->
            <?php $this->load->view($pills_pemerhatikan) ?>
            <!-- pills nhfuse -->
            <?php $this->load->view($pills_nhfuse) ?>
            <!-- pills hasilpengukuran -->
            <?php $this->load->view($pills_hasilpengukuran) ?>
            <!-- pills induk -->
            <?php $this->load->view($pills_induk) ?>
            <!-- pills datajurusan -->
            <?php $this->load->view($pills_datajurusan) ?>
            <!-- pills keterangan -->
            <?php $this->load->view($pills_keterangan) ?>
        </div>

        

        <!-- <form action="<?= base_url('gardu/cobaaja')?>" method="post">
            <h5>pertama</h5>
            <input type="hidden" name="data" value="pertama">
            <input type="text" name="satu">
            <input type="submit" name="simpan" value="simpan">
        </form>
        <form action="<?= base_url('gardu/cobaaja')?>" method="post">
            <h5>ketiga</h5>
            <input type="hidden" name="data" value="ketiga">
            <input type="text" name="satu">
            <input type="submit" name="simpan" value="simpan">
        </form>                                                 
        <form action="<?= base_url('gardu/cobaaja')?>" method="post">
        <h5>keempat</h5> 
            <input type="hidden" name="data" value="keempat">
            <input type="text" name="satu">
            <input type="submit" name="simpan" value="simpan">
        </form> -->


</div>

<div class="modal-footer">
    <a href="<?= base_url('gardu/inspeksi')?>" class="btn btn-dark mr-auto" >Kembali</a>
</div>

<script>
	$(document).ready(function() {
		var row = $('.count').length;
		console.log(row);

        $("#success-alert").hide();
        $(".btn-submit").click(function showAlert() {
            $("#success-alert").fadeTo(10000, 500).slideUp(500, function() {
            $("#success-alert").slideUp(500);
            });
        });
	});

    // $(document).ready(function() {
        
    // });
</script>
