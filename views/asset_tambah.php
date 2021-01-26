<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Asset Kantor</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_asset" class="col-sm-3 control-label">Nomor Asset</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_asset"class="form-control" id="inputEmail3" placeholder="Inputkan ID Asset" required>
                            </div>
                        </div>
						            <div class="form-group">
                            <label for="nama_asset" class="col-sm-3 control-label">Nama Asset</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_asset" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Asset" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="merek" class="col-sm-3 control-label">Merek Asset</label>
                            <div class="col-sm-9">
                                <input type="text" name="merek" class="form-control" id="inputEmail3" placeholder="Inputkan Merek Asset" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ruang_arsip" class="col-sm-3 control-label">Ruang Letak</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="ruang_letak" class="form-control">
                                    <option value="Ruang Camat">Ruangan Camat</option>
                                    <option value="Ruang Sekcam">Aula Kecamatan</option>
                                    <option value="Ruang Pelayanan">Ruangan Pelayanan</option>
                                    <option value="Ruang Perpustakaan">Gudang</option>
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>

						<div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Penerima Asset</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerima" class="form-control" id="inputPassword3" placeholder="Inputkan Staff Penerima Berkas" required>
                            </div>
                        </div>

                        <!--Status-->

                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status" class="form-control">
									<option value="Ada">Ada</option>
									<option value="Digunakan">Digunakan</option>
									<option value="Rusak">Rusak</option>
								</select>
                            </div>
                        </div>
                        <!--Akhir Status-->

						<div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan </button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=asset&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Asset Kantor
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
  $nama_asset=$_POST['nama_asset'];
  $merek=$_POST['merek'];
  $ruang=$_POST['ruang_letak'];
  $tglmasuk=$_POST['tgl_masuk'];
	$penerima=$_POST['penerima'];
  $status=$_POST['status'];
	$ket=$_POST['ket'];
    //buat sql
    $sql="INSERT INTO asset VALUES ('','$no_asset','$nama_asset','$merek','$ruang','$tglmasuk','$penerima','$status','$ket')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Asset Error");
    if ($query){
        echo "<script>window.location.assign('?page=asset&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
