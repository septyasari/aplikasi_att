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
  
<!-- <script>
	var faqs_row = 2;
	var row = 2;

	function addfaqs() {

		html = '<tr class="count" id="faqs-row' + faqs_row + '">';
		html += '<td><select name="id_gardu' + faqs_row + '" class="form-control" required><option value="">Pilih Gardu</option><?php foreach ($pelaksana as $key => $data) : ?><option value="<?= $data['id']; ?>"><?= $data['no_gardu'] ?></option><?php endforeach; ?></select></td>';
		html += '<td><input type="file" class="form-control" name="dok' + faqs_row + '"></td>';
		html += '<td class="mt-10"><button class="badge badge-danger" onclick="removeFaqs(' + faqs_row + ')"><i class="mdi mdi-minus"></i></button></td>';

		html += '</tr>';

		$('#faqs tbody').append(html);

		faqs_row++;

		var row = $('.count').length;
		//console.log(row);
		$('#jumlah_gambar').val(row);
	}

	function removeFaqs(id) {
		$('#faqs-row' + id).remove();
		var row = $('.count').length;
		faqs_row -= 1;
		$('#jumlah_gambar').val(row);
	}
</script> -->
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
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-pelaksana" role="tabpanel" aria-labelledby="pills-pelaksana-tab">
                <!-- Pelaksana -->
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <?php echo $this->session->flashdata('message') ?>
                                        <form class="user" method="post" action="<?= base_url('gardu/tambahData')?>">
                                            <div class="form-group row">
                                                <label for="no_gardu" class="col-sm-3 col-form-label">Nomor Gardu</label>
                                                    <div class="col-sm-8">
                                                        <input name="no_gardu" data-type='' placeholder="Masukkan Nomor Gardu" class="form-control typeahead" type="text" id="no_gardu" required>
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                                                    <div class="col-sm-8">
                                                        <input name="tanggal" data-type='' placeholder="" class="form-control typeahead" type="date" id="" required>
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="petugas" class="col-sm-3 col-form-label">Petugas</label>
                                                    <div class="col-sm-8">
                                                        <input name="petugas" data-type='' placeholder="Masukkan Petugas" class="form-control typeahead" type="text" id="" required>
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="penyulang" class="col-sm-3 col-form-label">Penyulang</label>
                                                    <div class="col-sm-8">
                                                        <input name="penyulang" data-type='' placeholder="Masukkan penyulang" class="form-control typeahead" type="text" id="" required>
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lokasi" class="col-sm-3 col-form-label">Lokasi</label>
                                                    <div class="col-sm-8">
                                                        <input name="lokasi" data-type='' placeholder="Masukkan lokasi" class="form-control typeahead" type="text" id="" required>
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="type" class="col-sm-3 col-form-label">Jenis Gardu</label>
                                                    <div class="col-sm-8">
                                                        <select name="type" id="type" class="form-control" required>
                                                            <option value="">Pilih Jenis</option>
                                                            <option value="Beton">BETON</option>
                                                            <option value="Kios">KIOS</option>
                                                            <option value="Tiang">TIANG</option>
                                                            <option value="Cantel">CANTEL</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="kapasitas" class="col-sm-3 col-form-label">Kapasitas</label>
                                                    <div class="col-sm-8">
                                                        <input name="kapasitas" data-type='' placeholder="Masukkan Kapasitas" class="form-control typeahead" type="text" id="" required>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success mr-5">Simpan</button>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="tab-pane fade" id="pills-trafo" role="tabpanel" aria-labelledby="pills-trafo-tab"> 
                <!-- Trapo -->
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <?php echo $this->session->flashdata('message_trafo') ?>
                                        <form class="user" method="post" action="<?= base_url('gardu/tambahtrafo')?>">
                                            <tr class="entry">
                                                <div class="form-group row">
                                                    <label for="no_gardu" class="col-sm-3 col-form-label">Nomor Gardu</label>
                                                        <div class="col-sm-8">
                                                            <select name="id_gardu" id="id_gardu" class="form-control" required>
                                                                <option value="">Pilih Gardu</option>
                                                                    <?php foreach ($pelaksana as $key => $data) : ?>
                                                                        <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                                                    <?php endforeach; ?>
                                                            </select>   
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="up3" class="col-sm-3 col-form-label">UP 3</label>
                                                        <div class="col-sm-8">
                                                            <input name="up3" data-type='' placeholder="Masukkan up3" class="form-control typeahead" type="text" id="" required>
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="ulp" class="col-sm-3 col-form-label">ULP</label>
                                                        <div class="col-sm-8">
                                                            <input name="ulp" data-type='' placeholder="Masukkan ulp" class="form-control typeahead" type="text" id="" required>
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="merk" class="col-sm-3 col-form-label">Merek</label>
                                                        <div class="col-sm-8">
                                                            <input name="merk" data-type='' placeholder="Masukkan Merek" class="form-control typeahead" type="text" id="" required>
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="tahunpembuatan" class="col-sm-3 col-form-label">Tahun Pembuatan</label>
                                                        <div class="col-sm-8">
                                                            <input name="tahunpembuatan" data-type='' placeholder="Masukkan Tahun" class="form-control typeahead" type="text" id="" required>
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="beratminyak" class="col-sm-3 col-form-label">Berat Minyak</label>
                                                        <div class="col-sm-8">
                                                            <input name="beratminyak" data-type='' placeholder="Masukkan Berat Minyak" class="form-control typeahead" type="text" id="" required>
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="berattotal" class="col-sm-3 col-form-label">Berat Total</label>
                                                        <div class="col-sm-8">
                                                            <input name="berattotal" data-type='' placeholder="Masukkan Berat Total" class="form-control typeahead" type="text" id="" required>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success mr-5">Simpan</button>
                                                </div>
                                            </tr>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="tab-pane fade" id="pills-pemeriksaan" role="tabpanel" aria-labelledby="pills-pemeriksaan-tab"> 
                <!-- Pemeriksaan -->
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                   <?php echo $this->session->flashdata('message_pemeriksa') ?>
                                        <form class="user" method="post" action="<?= base_url('gardu/tambahpemeriksaan')?>">
                                            <tr class="entry">
                                                <div class="form-group row">
                                                    <label for="no_gardu" class="col-sm-3 col-form-label">Nomor Gardu</label>
                                                        <div class="col-sm-8">
                                                            <select name="id_gardu" id="id_gardu" class="form-control" required>
                                                                <option value="">Pilih Gardu</option>
                                                                    <?php foreach ($pelaksana as $key => $data) : ?>
                                                                        <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                                                    <?php endforeach; ?>
                                                            </select>   
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="bidangyangdiperiksa" class="col-sm-3 col-form-label">Hal Yang Harus Diperiksa</label>
                                                        <div class="col-sm-8">
                                                            <input type="checkbox" name="check[]" value="Kontruksi" id="">
                                                                Kontruksi</br>
                                                            <input type="checkbox" name="check[]" value="PHB" id="">
                                                                PHB</br>
                                                            <input type="checkbox" name="check[]" value="AC FUSE" id="">
                                                                AC FUSE</br>
                                                            <input type="checkbox" name="check[]" value="KUNCI" id="">
                                                                KUNCI</br>
                                                            <input type="checkbox" name="check[]" value="Gangguan Binatang" id="">
                                                                Gangguan Binatang </br>
                                                            <input type="checkbox" name="check[]" value="Tanda Peringatan" id="">
                                                                Tanda Peringatan </br>
                                                            <input type="checkbox" name="check[]" value="Kebersihan" id="">
                                                                Kebersihan </br>
                                                            <input type="checkbox" name="check[]" value="Kebocoran Minyak" id="">
                                                                Kebocoran Minyak</br>
                                                            <input type="checkbox" name="check[]" value="Kondisi Tangki" id="">
                                                                Kondisi Tangki</br>
                                                            <input type="checkbox" name="check[]" value="Loncatan Bunga Api" id="">
                                                                Loncatan Bunga Api</br>
                                                            <input type="checkbox" name="check[]" value="Bunyi Dengung" id="">
                                                                Bunyi Dengung</br>
                                                            <input type="checkbox" name="check[]" value="Pertanahan" id="">
                                                                Pertanahan</br>
                                                            <input type="checkbox" name="check[]" value="FUSE TM" id="">
                                                                FUSE TM</br>
                                                            <input type="checkbox" name="check[]" value="Jumper TM" id="">
                                                                Jumper TM</br>
                                                            <input type="checkbox" name="check[]" value="Konektor TM" id="">
                                                                Konektor TM</br>
                                                            <input type="checkbox" name="check[]" value="Saklar TR" id="">
                                                                Saklar TR</br>
                                                            <input type="checkbox" name="check[]" value="Kabel TR" id="">
                                                                Kabel TR</br>
                                                            <input type="checkbox" name="check[]" value="Fuse TR" id="">
                                                                Fuse TR</br>
                                                            <input type="checkbox" name="check[]" value="Konektor TR" id="">
                                                                Konektor TR</br>
                                                            <input type="checkbox" name="check[]" value="Bushing TM" id="">
                                                                Bushing TM</br>
                                                            <input type="checkbox" name="check[]" value="Bushing TR" id="">
                                                                Bushing TR</br>
                                                            <input type="checkbox" name="check[]" value="Arester" id="">
                                                                Arester</br>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success mr-5">Simpan</button>
                                                </div>
                                            </tr>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="tab-pane fade" id="pills-pemerhatikan" role="tabpanel" aria-labelledby="pills-pemerhatikan-tab">
                <!-- pemerhatikan -->
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                     <?php echo $this->session->flashdata('message_pemerhatikan') ?>
                                        <form class="user" method="post" action="<?= base_url('gardu/tambahpemerhatikan')?>">
                                            <tr class="entry">
                                                <div class="form-group row">
                                                    <label for="no_gardu" class="col-sm-3 col-form-label">Nomor Gardu</label>
                                                        <div class="col-sm-8">
                                                            <select name="id_gardu" id="id_gardu" class="form-control" required>
                                                                <option value="">Pilih Gardu</option>
                                                                    <?php foreach ($pelaksana as $key => $data) : ?>
                                                                        <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                                                    <?php endforeach; ?>
                                                            </select>   
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="up3" class="col-sm-3 col-form-label">UP 3</label>
                                                        <div class="col-sm-8">
                                                            <input name="up3" data-type='' placeholder="Masukkan up3" class="form-control typeahead" type="text" id="" required>
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="ulp" class="col-sm-3 col-form-label">ULP</label>
                                                        <div class="col-sm-8">
                                                            <input name="ulp" data-type='' placeholder="Masukkan ulp" class="form-control typeahead" type="text" id="" required>
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="merk" class="col-sm-3 col-form-label">Merek</label>
                                                        <div class="col-sm-8">
                                                            <input name="merk" data-type='' placeholder="Masukkan Merek" class="form-control typeahead" type="text" id="" required>
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="tahunpembuatan" class="col-sm-3 col-form-label">Tahun Pembuatan</label>
                                                        <div class="col-sm-8">
                                                            <input name="tahunpembuatan" data-type='' placeholder="Masukkan Tahun" class="form-control typeahead" type="text" id="" required>
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="beratminyak" class="col-sm-3 col-form-label">Berat Minyak</label>
                                                        <div class="col-sm-8">
                                                            <input name="beratminyak" data-type='' placeholder="Masukkan Berat Minyak" class="form-control typeahead" type="text" id="" required>
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="berattotal" class="col-sm-3 col-form-label">Berat Total</label>
                                                        <div class="col-sm-8">
                                                            <input name="berattotal" data-type='' placeholder="Masukkan Berat Total" class="form-control typeahead" type="text" id="" required>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success mr-5">Simpan</button>
                                                </div>
                                            </tr>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="card-body">
                    <div id="">
                        <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="">
                            <?php echo $this->session->flashdata('message_pemerhatikan') ?>
                            <thead>
                                <tr>
                                    <th rowspan="2">Nomor Gardu </th>
                                    <th rowspan="2">Hal Yang Diperhatikan</th>
                                    <th rowspan="2">Kondisi</th>
                                    <th rowspan="2">Saran - Saran</th>
                                    <th colspan="2">Pelaksanaan Saran-Saran</th>
                                    <th rowspan="2"><i class="fas fa-cog"></th>
                                </tr>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Jenis</th>
                                </tr>

                            </thead>
                            <form class="user" method="post" action="<?= base_url('gardu/tambahpemerhatikan')?>">
                                <tbody>
                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="KONDISI UMUM" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                                <option value="">Kondisi</option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kurang Baik">Kurang Baik</option>
                                                <option value="Tidak Baik">Tidak Baik</option>
                                                <option value="Rusak">Rusak</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="">
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="">
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <th>
                                            <button class="btn btn-mini btn-success btn-add" type="submit" name="savepemerhatikan">Tambah</button>
                                        </th>

                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="CAT PINTU BAGIAN LUAR" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                                <option value="">Kondisi</option>
                                                <option value="Boks Bersih, Instalasi Rapi">Boks Bersih, Instalasi Rapi</option>
                                                <option value="Boks Kotor, Instalasi Rapi">Boks Kotor, Instalasi Rapi</option>
                                                <option value="Boks Karatan, Instalasi Rapi">Boks Karatan, Instalasi Rapi</option>
                                                <option value="Boks Bocor, Instalasi Buruk">Boks Bocor, Instalasi Buruk</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="">
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="">
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="SPEKNYA SESUAI ATAU TIDAK" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" required>
                                                <option value="">Kondisi</option>
                                                <option value="Sesuai">Sesuai</option>
                                                <option value="Tidak Sesuai">Tidak Sesuai</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="FUNGSINYA" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                                <option value="">Kondisi</option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kurang Baik">Kurang Baik</option>
                                                <option value="Tidak Baik">Tidak Baik</option>
                                                <option value="Rusak">Rusak</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                        <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="BURUNG, SERANGGA DLL" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                                <option>Kondisi</option>
                                                <option>Ada</option>
                                                <option>Tidak Ada</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="TIDAK ADA, TIDAK TERBACA" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                                <option value="">Kondisi</option>
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="KONDISI UMUM PERALATAN DALAM PANEL" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                            <option value="">Kondisi</option>
                                                <option value="Bersih">Bersih</option>
                                                <option value="Sedikit Kotor">Sedikit Kotor</option>
                                                <option value="Kotor">Kotor</option>
                                                <option value="Rapi">Rapi</option>
                                                <option value="Tidak Rapi">Tidak Rapi</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="PACKING SEEL" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                            <option value="">Kondisi</option>
                                                <option value="Bersih">Bersih</option>
                                                <option value="Packing Retak">Packing Retak</option>
                                                <option value="Berminyak">Berminyak</option>
                                                <option value="Rembers/Tetes">Rembers/Tetes</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="BAIK / BERKARAT" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                            <option value="">Kondisi</option>
                                                <option value="Mulus">Mulus</option>
                                                <option value="Cacat Sirip Minor">Cacat Sirip Minor</option>
                                                <option value="Cacat Sirip Mayor">Cacat Sirip Mayor</option>
                                                <option value="Bengkak">Bengkak</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="TANDA KERUSAKAN" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                            <option value="">Kondisi</option>
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="TRAFO TIDAK NORMAL" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                            <option value="">Kondisi</option>
                                                <option value="Normal">Normal</option>
                                                <option value="Dengung">Dengung</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="ADA / TIDAK ADA" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                            <option value="">Kondisi</option>
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="SAMBUNGAN GROUNDING (TM/TR)" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                            <option value="">Kondisi</option>
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="FISIK DAN FUNGSINYA" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                            <option value="">Kondisi</option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kurang Baik">Kurang Baik</option>
                                                <option value="Tidak Baik">Tidak Baik</option>
                                                <option value="Rusak">Rusak</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="KONDISI FISIKNYA" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                            <option value="">Kondisi</option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kurang Baik">Kurang Baik</option>
                                                <option value="Tidak Baik">Tidak Baik</option>
                                                <option value="Rusak">Rusak</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="KONDISI FISIKNYA" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                            <option value="">Kondisi</option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kurang Baik">Kurang Baik</option>
                                                <option value="Tidak Baik">Tidak Baik</option>
                                                <option value="Rusak">Rusak</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="JENIS KONEKTORNYA" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                            <option value="">Kondisi</option>
                                                <option value="Paraller Group">Paraller Group</option>
                                                <option value="CCO">CCO</option>
                                                <option value="Lilit">Lilit</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="FISIK DAN FUNGSINYA" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                            <option value="">Kondisi</option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kurang Baik">Kurang Baik</option>
                                                <option value="Tidak Baik">Tidak Baik</option>
                                                <option value="Rusak">Rusak</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="ISOLASINYA" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                            <option value="">Kondisi</option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kurang Baik">Kurang Baik</option>
                                                <option value="Tidak Baik">Tidak Baik</option>
                                                <option value="Rusak">Rusak</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="FISIK DAN FUNGSINYA" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                            <option value="">Kondisi</option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kurang Baik">Kurang Baik</option>
                                                <option value="Tidak Baik">Tidak Baik</option>
                                                <option value="Rusak">Rusak</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="NH FUSE TERPASANG" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                            <option value="">Kondisi</option>
                                                <option value="160,200,100,250 AMP">160,200,100,250 AMP</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="KONDISI FISIKNYA" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                            <option value="">Kondisi</option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kurang Baik">Kurang Baik</option>
                                                <option value="Tidak Baik">Tidak Baik</option>
                                                <option value="Rusak">Rusak</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="JENIS KONEKTORNYA" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                            <option value="">Kondisi</option>
                                                <option value="Joint Bimetal">Joint Bimetal</option>
                                                <option value="Tap Konektor">Tap Konektor</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="KONDISI FISIKNYA" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                            <option value="">Kondisi</option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kurang Baik">Kurang Baik</option>
                                                <option value="Tidak Baik">Tidak Baik</option>
                                                <option value="Rusak">Rusak</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="KONDISI FISIKNYA" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                            <option value="">Kondisi</option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kurang Baik">Kurang Baik</option>
                                                <option value="Tidak Baik">Tidak Baik</option>
                                                <option value="Rusak">Rusak</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="KONDISI FISIKNYA" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                            <option value="">Kondisi</option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kurang Baik">Kurang Baik</option>
                                                <option value="Tidak Baik">Tidak Baik</option>
                                                <option value="Rusak">Rusak</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="nama_bidang[]" data-type='' class="form-control typeahead" type="text" id="" value="SAMBUNGAN / HUBUNGAN KE TANAH" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td><select name="kondisi[]" class="form-control" id="" required>
                                            <option value="">Kondisi</option>
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                                </select>
                                            </td>


                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="saran[]" data-type='' placeholder="Saran-Saran" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <input name="tanggal[]" data-type='' placeholder="" class="form-control typeahead" type="date" id="">
                                        </td>

                                    <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="keterangan[]" data-type='' placeholder="Ketik Jenis " class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                </tbody>
                            </form>
                            </table>
                        </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-nhfuse" role="tabpanel" aria-labelledby="pills-nhfuse-tab">
                <!-- nhfuse -->
                <div class="card-body">

                    <div id="">
                        <?php echo $this->session->flashdata('message_nhfuse') ?>
                        <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="">
                            <thead>
                                <tr>
                                    <th>Nomor Gardu </th>
                                    <th>Jurusan</th>
                                    <th>R</th>
                                    <th>S</th>
                                    <th>T</th>
                                    <th><i class="fas fa-cog"></th>
                                </tr>
                            </thead>
                            <form class="user" method="post" action="<?= base_url('gardu/tambahnhfuse')?>">
                                <tbody>
                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><select name="id_jurusan[]" id="id_jurusan" class="form-control" required>
                                            <option value="">Pilih Jurusan</option>
                                            <?php foreach ($jurusan as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['jurusan'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>
                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="r[]" data-type='' placeholder="Masukkan R" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="s[]" data-type='' placeholder="Masukkan S" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="t[]" data-type='' placeholder="Masukkan T" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <th>
                                            <button class="btn btn-mini btn-success btn-add" type="submit">Tambah</button>
                                        </th>

                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><select name="id_jurusan[]" id="id_jurusan" class="form-control" required>
                                            <option value="">Pilih Jurusan</option>
                                            <?php foreach ($jurusan as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['jurusan'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>
                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="r[]" data-type='' placeholder="Masukkan R" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="s[]" data-type='' placeholder="Masukkan S" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="t[]" data-type='' placeholder="Masukkan T" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><select name="id_jurusan[]" id="id_jurusan" class="form-control" required>
                                            <option value="">Pilih Jurusan</option>
                                            <?php foreach ($jurusan as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['jurusan'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>
                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="r[]" data-type='' placeholder="Masukkan R" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="s[]" data-type='' placeholder="Masukkan S" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="t[]" data-type='' placeholder="Masukkan T" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><select name="id_jurusan[]" id="id_jurusan" class="form-control" required>
                                            <option value="">Pilih Jurusan</option>
                                            <?php foreach ($jurusan as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['jurusan'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>
                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="r[]" data-type='' placeholder="Masukkan R" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="s[]" data-type='' placeholder="Masukkan S" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="t[]" data-type='' placeholder="Masukkan T" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                </tbody>
                            </form>
                            </table>
                        </div>
                </div>

            </div>

            <div class="tab-pane fade" id="pills-hasilpengukuran" role="tabpanel" aria-labelledby="pills-hasilpengukuran-tab">      
                <!-- hasilpengukuran -->
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <?php echo $this->session->flashdata('message_pengukuran') ?>
                                        <form class="user" method="post" action="<?= base_url('gardu/tambahhasilpengukuran')?>">
                                            <tr class="entry">
                                                <div class="form-group row">
                                                    <label for="no_gardu" class="col-sm-3 col-form-label">Nomor Gardu</label>
                                                        <div class="col-sm-8">
                                                            <select name="id_gardu" id="id_gardu" class="form-control" required>
                                                                <option value="">Pilih Gardu</option>
                                                                    <?php foreach ($pelaksana as $key => $data) : ?>
                                                                        <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                                                    <?php endforeach; ?>
                                                            </select>   
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="nol_omega" class="col-sm-3 col-form-label">Nol (Ω)</label>
                                                        <div class="col-sm-8">
                                                            <input name="nol_omega" data-type='' placeholder="Ketikkan Nol (Ω)" class="form-control typeahead" type="text" id="" required>
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="body_omega" class="col-sm-3 col-form-label">Body (Ω)</label>
                                                        <div class="col-sm-8">
                                                            <input name="body_omega" data-type='' placeholder="Ketikkan Body (Ω)" class="form-control typeahead" type="text" id="" required>
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="arrester_omega" class="col-sm-3 col-form-label">Arrester (Ω)</label>
                                                        <div class="col-sm-8">
                                                            <input name="arrester_omega" data-type='' placeholder="Ketikkan Arrester (Ω)" class="form-control typeahead" type="text" id="" required>
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="nol_ma" class="col-sm-3 col-form-label">Nol (mA)</label>
                                                        <div class="col-sm-8">
                                                            <input name="nol_ma" data-type='' placeholder="Ketikkan Nol (mA)" class="form-control typeahead" type="text" id="" required>
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="body_ma" class="col-sm-3 col-form-label">Body (mA)</label>
                                                        <div class="col-sm-8">
                                                            <input name="body_ma" data-type='' placeholder="Ketikkan Body (mA)" class="form-control typeahead" type="text" id="" required>
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="arrester_ma" class="col-sm-3 col-form-label">Arrester (mA)</label>
                                                        <div class="col-sm-8">
                                                            <input name="arrester_ma" data-type='' placeholder="Ketikkan Arrester (mA)" class="form-control typeahead" type="text" id="" required>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success mr-5">Simpan</button>
                                                </div>
                                            </tr>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="tab-pane fade" id="pills-induk" role="tabpanel" aria-labelledby="pills-induk-tab"> 
                <!-- Induk -->
                <div class="card-body">

                    <div id="">
                        <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="">
                            <?php echo $this->session->flashdata('message_induk') ?>
                            <thead>
                                <tr>
                                    <th>Nomor Gardu </th>
                                    <th>Waktu</th>
                                    <th>R</th>
                                    <th>S</th>
                                    <th>T</th>
                                    <th>N</th>
                                    <th>TEG.PHB</th>
                                    <th><i class="fas fa-cog"></th>
                                </tr>
                            </thead>
                            <form class="user" method="post" action="<?= base_url('gardu/tambahinduk')?>">
                                <tbody>
                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><!-- <select name="waktu[]" id="waktu" class="form-control" required>
                                            <option value="">Pilih Waktu</option>
                                            <option value="Siang">Siang</option>
                                            <option value="Malam">Malam</option>
                                        </select> -->
                                            <span class="input-icon input-icon-right">
                                            <input name="waktu[]" data-type='' class="form-control typeahead" type="text" id="" value="Siang" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="r[]" data-type='' placeholder="Masukkan R" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="s[]" data-type='' placeholder="Masukkan S" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="t[]" data-type='' placeholder="Masukkan T" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="n[]" data-type='' placeholder="Masukkan N" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="tegphb[]" data-type='' placeholder="Masukkan TEG.PHB" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <th>
                                            <button class="btn btn-mini btn-success btn-add" type="submit">Tambah</button>
                                        </th>

                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><!-- <select name="waktu[]" id="waktu" class="form-control" required>
                                            <option value="">Pilih Waktu</option>
                                            <option value="Siang">Siang</option>
                                            <option value="Malam">Malam</option>
                                        </select> -->
                                        <span class="input-icon input-icon-right">
                                            <input name="waktu[]" data-type='' class="form-control typeahead" type="text" id="" value="Malam" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="r[]" data-type='' placeholder="Masukkan R" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="s[]" data-type='' placeholder="Masukkan S" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="t[]" data-type='' placeholder="Masukkan T" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="n[]" data-type='' placeholder="Masukkan N" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="tegphb[]" data-type='' placeholder="Masukkan Teg.Phb" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                </tbody>
                            </form>
                            </table>
                        </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-datajurusan" role="tabpanel" aria-labelledby="pills-datajurusan-tab"> 
                <!-- datajurusan -->
                <div class="card-body">
                    <div id="">
                        <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="">
                            <?php echo $this->session->flashdata('message_jurusan') ?>
                            <thead>
                                <tr>
                                    <th>Nomor Gardu </th>
                                    <th>Jurusan</th>
                                    <th>Waktu</th>
                                    <th>R</th>
                                    <th>S</th>
                                    <th>T</th>
                                    <th>N</th>
                                    <th>TEG.PHB</th>
                                    <th><i class="fas fa-cog"></th>
                                </tr>
                            </thead>
                            <form class="user" method="post" action="<?= base_url('gardu/tambahjurusan')?>">
                                <tbody>
                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><select name="id_jurusan[]" id="id_jurusan" class="form-control" required>
                                            <option value="">Pilih Jurusan</option>
                                            <?php foreach ($jurusan as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['jurusan'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><span class="input-icon input-icon-right">
                                            <input name="waktu[]" data-type='' class="form-control typeahead" type="text" id="" value="Siang" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="r[]" data-type='' placeholder="Masukkan R" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="s[]" data-type='' placeholder="Masukkan S" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="t[]" data-type='' placeholder="Masukkan T" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="n[]" data-type='' placeholder="Masukkan N" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="tegphb[]" data-type='' placeholder="Masukkan TEG.PHB" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <th>
                                            <button class="btn btn-mini btn-success btn-add" type="submit">Tambah</button>
                                        </th>

                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><select name="id_jurusan[]" id="id_jurusan" class="form-control" required>
                                            <option value="">Pilih Jurusan</option>
                                            <?php foreach ($jurusan as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['jurusan'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><span class="input-icon input-icon-right">
                                            <input name="waktu[]" data-type='' class="form-control typeahead" type="text" id="" value="Malam" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="r[]" data-type='' placeholder="Masukkan R" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="s[]" data-type='' placeholder="Masukkan S" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="t[]" data-type='' placeholder="Masukkan T" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="n[]" data-type='' placeholder="Masukkan N" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="tegphb[]" data-type='' placeholder="Masukkan Teg.Phb" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><select name="id_jurusan[]" id="id_jurusan" class="form-control" required>
                                            <option value="">Pilih Jurusan</option>
                                            <?php foreach ($jurusan as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['jurusan'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><span class="input-icon input-icon-right">
                                            <input name="waktu[]" data-type='' class="form-control typeahead" type="text" id="" value="Siang" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="r[]" data-type='' placeholder="Masukkan R" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="s[]" data-type='' placeholder="Masukkan S" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="t[]" data-type='' placeholder="Masukkan T" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="n[]" data-type='' placeholder="Masukkan N" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="tegphb[]" data-type='' placeholder="Masukkan Teg.Phb" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><select name="id_jurusan[]" id="id_jurusan" class="form-control" required>
                                            <option value="">Pilih Jurusan</option>
                                            <?php foreach ($jurusan as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['jurusan'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><span class="input-icon input-icon-right">
                                            <input name="waktu[]" data-type='' class="form-control typeahead" type="text" id="" value="Malam" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="r[]" data-type='' placeholder="Masukkan R" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="s[]" data-type='' placeholder="Masukkan S" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="t[]" data-type='' placeholder="Masukkan T" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="n[]" data-type='' placeholder="Masukkan N" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="tegphb[]" data-type='' placeholder="Masukkan Teg.Phb" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><select name="id_jurusan[]" id="id_jurusan" class="form-control" required>
                                            <option value="">Pilih Jurusan</option>
                                            <?php foreach ($jurusan as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['jurusan'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><span class="input-icon input-icon-right">
                                            <input name="waktu[]" data-type='' class="form-control typeahead" type="text" id="" value="Siang" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="r[]" data-type='' placeholder="Masukkan R" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="s[]" data-type='' placeholder="Masukkan S" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="t[]" data-type='' placeholder="Masukkan T" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="n[]" data-type='' placeholder="Masukkan N" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="tegphb[]" data-type='' placeholder="Masukkan Teg.Phb" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><select name="id_jurusan[]" id="id_jurusan" class="form-control" required>
                                            <option value="">Pilih Jurusan</option>
                                            <?php foreach ($jurusan as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['jurusan'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><span class="input-icon input-icon-right">
                                            <input name="waktu[]" data-type='' class="form-control typeahead" type="text" id="" value="Malam" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="r[]" data-type='' placeholder="Masukkan R" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="s[]" data-type='' placeholder="Masukkan S" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="t[]" data-type='' placeholder="Masukkan T" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="n[]" data-type='' placeholder="Masukkan N" class="form-control typeahead" type="text" id=""required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="tegphb[]" data-type='' placeholder="Masukkan Teg.Phb" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><select name="id_jurusan[]" id="id_jurusan" class="form-control" required>
                                            <option value="">Pilih Jurusan</option>
                                            <?php foreach ($jurusan as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['jurusan'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><span class="input-icon input-icon-right">
                                            <input name="waktu[]" data-type='' class="form-control typeahead" type="text" id="" value="Siang" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="r[]" data-type='' placeholder="Masukkan R" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="s[]" data-type='' placeholder="Masukkan S" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="t[]" data-type='' placeholder="Masukkan T" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="n[]" data-type='' placeholder="Masukkan N" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="tegphb[]" data-type='' placeholder="Masukkan Teg.Phb" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><select name="id_jurusan[]" id="id_jurusan" class="form-control" required>
                                            <option value="">Pilih Jurusan</option>
                                            <?php foreach ($jurusan as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['jurusan'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><span class="input-icon input-icon-right">
                                            <input name="waktu[]" data-type='' class="form-control typeahead" type="text" id="" value="Malam" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="r[]" data-type='' placeholder="Masukkan R" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="s[]" data-type='' placeholder="Masukkan S" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="t[]" data-type='' placeholder="Masukkan T" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="n[]" data-type='' placeholder="Masukkan N" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="tegphb[]" data-type='' placeholder="Masukkan Teg.Phb" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><select name="id_jurusan[]" id="id_jurusan" class="form-control" required>
                                            <option value="">Pilih Jurusan</option>
                                            <?php foreach ($jurusan as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['jurusan'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><span class="input-icon input-icon-right">
                                            <input name="waktu[]" data-type='' class="form-control typeahead" type="text" id="" value="Siang" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="r[]" data-type='' placeholder="Masukkan R" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="s[]" data-type='' placeholder="Masukkan S" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="t[]" data-type='' placeholder="Masukkan T" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="n[]" data-type='' placeholder="Masukkan N" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="tegphb[]" data-type='' placeholder="Masukkan Teg.Phb" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="entry">
                                        <td><select name="id_gardu[]" id="id_gardu" class="form-control" required>
                                            <option value="">Pilih Gardu</option>
                                            <?php foreach ($pelaksana as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['no_gardu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><select name="id_jurusan[]" id="id_jurusan" class="form-control" required>
                                            <option value="">Pilih Jurusan</option>
                                            <?php foreach ($jurusan as $key => $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['jurusan'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>

                                        <td><span class="input-icon input-icon-right">
                                            <input name="waktu[]" data-type='' class="form-control typeahead" type="text" id="" value="Malam" readonly>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="r[]" data-type='' placeholder="Masukkan R" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="s[]" data-type='' placeholder="Masukkan S" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="t[]" data-type='' placeholder="Masukkan T" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="n[]" data-type='' placeholder="Masukkan N" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="input-icon input-icon-right">
                                            <input name="tegphb[]" data-type='' placeholder="Masukkan Teg.Phb" class="form-control typeahead" type="text" id="" required>
                                            <i class="ace-icon fa fa-spinner fa-spin orange bigger-125" id="" style="display: none"></i>
                                            </span>
                                        </td>
                                    </tr>

                                </tbody>
                            </form>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="pills-keterangan" role="tabpanel" aria-labelledby="pills-keterangan-tab">
                <!-- Keterangan -->
                <div class="card-body">
                    <form action="<?= base_url("gardu/tambah_keterangan");?>" method="post">
                    <?= $this->session->flashdata('message_keterangan');  ?>
                        <div class="form-group">
                            <select name="id_gardu[]" id="id_gardu" class="form-control" required>
                            <option value="">Pilih Gardu</option>
                            <?php foreach ($pelaksana as $key => $data) : ?>
                                <option value="<?= $data['id']; ?>"><?= $data['no_gardu'] ?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="form-group mt-3">
                            <label for="gambar">Gambar</label>
                            <input type="file" id="gambar" name="gambar" class="form-control" >
                        </div>

                        <div class="form-group mt-3">
                            <label for="id_ket">Keterangan gambar</label>
                            <textarea name="keterangan" id="id_ket" placeholder="Masukkan Keterangan Gambar" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Tambah Keterangan </button>
                    </form>
                </div>
            </div>
        </div>
</div>
<div class="modal-footer">
    <a href="<?= base_url('gardu/inspeksi')?>" class="btn btn-dark mr-auto" >Kembali</a>
</div>

<script>
	$(document).ready(function() {
		var row = $('.count').length;
		console.log(row);
	});
</script>
