<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Wajib Pajak</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                      <div class="form-group">
                          <label for="noph" class="col-sm-3 control-label">No.Perusahaan</label>
                          <div class="col-sm-9">
                              <input type="text" name="noph"class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Perusahaan" required>
                          </div>
                      </div>
                        <div class="form-group">
                            <label for="namaph" class="col-sm-3 control-label">Nama Perusahaan</label>
                            <div class="col-sm-9">
                                <input type="text" name="namaph"class="form-control" id="inputEmail3" placeholder="Inputkan Nama Perusahaan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenis" class="col-sm-3 control-label">Jenis Perusahaan</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="jenis" class="form-control">
                                    <option value="Perusahaan Agraris">Perusahaan Agraris</option>
                                    <option value="Perusahaan Industri">Perusahaan Industri</option>
                                    <option value="Perusahaan Ekstratif">Perusahaan Ekstratif</option>
                                    <option value="Perusahaan Perdagangan">Perusahaan Perdagangan</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Lokasi Perusahaan/Desa</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="alamat" class="form-control">
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
                            <label for="bayar" class="col-sm-3 control-label">Pembayaran/Bulan</label>
                            <div class="col-sm-9">
                                <input type="text" name="bayar" class="form-control" id="inputEmail3" placeholder="Inputkan Nominal Pembayaran Perusahaan/Bulan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="status" class="form-control">
                                    <option value="Masih Beroperasi">Masih Beroperasi</option>
                                    <option value="Tidak Beroperasi Lagi">Tidak Beroperasi Lagi</option>
                                    <option value="Berhenti Sementara">Berhenti Sementara</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pajak&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Wajib Pajak
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $noph=$_POST['noph'];
  $namaph=$_POST['namaph'];
  $jenis=$_POST['jenis'];
  $alamat=$_POST['alamat'];
  $bayar=$_POST['bayar'];
  $status=$_POST['status'];
    //buat sql
    $sql="INSERT INTO pajak VALUES ('','$noph','$namaph','$jenis','$alamat','$bayar','$status')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Wajib Pajak Error");
    if ($query){
        echo "<script>window.location.assign('?page=pajak&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
