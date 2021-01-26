<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Asset Tetap</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                      <div class="form-group">
                          <label for="no_asset" class="col-sm-3 control-label">No.Asset</label>
                          <div class="col-sm-9">
                              <input type="text" name="no_asset"class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Asset" required>
                          </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Asset</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama"class="form-control" id="inputEmail3" placeholder="Inputkan Nama Asset" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenis" class="col-sm-3 control-label">Jenis Asset</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="jenis" class="form-control">
                                    <option value="Tanah">Tanah</option>
                                    <option value="Gedung dan Bangunan">Gedung dan Bangunan</option>
                                    <option value="Peralatan dan Mesin">Peralatan dan Mesin</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lokasi" class="col-sm-3 control-label">Lokasi Aset/Desa</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="lokasi" class="form-control">
                                    <option value="Sei Alim Ulu">Sei Alim Ulu</option>
                                    <option value="Air Teluk Hessa">Air Teluk Hessa</option>
                                    <option value="Air Teluk Kiri">Air Teluk Kiri</option>
                                    <option value="Hessa Air Genting">Hessa Air Genting</option>
                                    <option value="Danau Sijabut">Danau Sijabut</option>
                                    <option value="Air Batu I/II">Air Batu I/II</option>
                                    <option value="Air Batu III/IX">Air Batu III/IX</option>
                                    <option value="Perk. Pulahan">Perk. Pulahan</option>
                                    <option value="Air Genting">Air Genting</option>
                                    <option value="Pinangripan">Pinangripan</option>
                                    <option value="Pulau Pule">Pulau Pule</option>
                                    <option value="Sijabut Teratai">Sijabut Teratai</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="posisi" class="col-sm-3 control-label">Posisi</label>
                            <div class="col-sm-9">
                                <input type="text" name="posisi" class="form-control" id="inputEmail3" placeholder="Inputkan Posisi dan Alamat Lengkap" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ukuran" class="col-sm-3 control-label">Ukuran</label>
                            <div class="col-sm-9">
                                <input type="text" name="ukuran" class="form-control" id="inputEmail3" placeholder="Inputkan Ukuran" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="status" class="form-control">
                                    <option value="Menganggur">Menganggur</option>
                                    <option value="Disewakan">Disewakan</option>
                                    <option value="Digunakan Pemda">Digunakan Pemda</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                                        <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="keterangan" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                                        </div>
                                    </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Asset</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=tetap&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Asset Tetap
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $no_asset=$_POST['no_asset'];
  $nama=$_POST['nama'];
  $jenis=$_POST['jenis'];
  $lokasi=$_POST['lokasi'];
  $posisi=$_POST['posisi'];
  $ukuran=$_POST['ukuran'];
  $status=$_POST['status'];
	$keterangan=$_POST['keterangan'];
    //buat sql
    $sql="INSERT INTO tetap VALUES ('','$no_asset','$nama','$jenis','$lokasi','$posisi','$ukuran','$status','$keterangan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Asset Tetap Error");
    if ($query){
        echo "<script>window.location.assign('?page=tetap&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
