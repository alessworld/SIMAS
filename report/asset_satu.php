<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Asset</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM asset WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>SIMAS Kecamatan Air Batu </h2>
                        <h4>Jalan Lintas Sumatera,Sei Alim Ulu,Air Batu <br>
                        Kabupaten Asahan, Sumatera Utara, Kode Pos : 21272</h4>
                        <hr>
                        <hr>
                        <h3>DATA ASSET KANTOR</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
                              <tr>
                                  <td width="200">Nomor Asset</td> <td><?= $data['no_asset'] ?></td>
                              </tr>
                              <tr>
                                  <td>Nama Aset</td> <td><?= $data['nama_asset'] ?></td>
                              </tr>
                              <tr>
                                  <td>Merek</td> <td><?= $data['merek'] ?></td>
                              </tr>
                              <tr>
                                  <td>Ruang Letak</td> <td><?= $data['ruang_letak'] ?></td>
                              </tr>
                              <tr>
                                  <td>Tanggal Masuk</td> <td><?= $data['tgl_masuk'] ?></td>
                              </tr>
                              <tr>
                                  <td>Penerima</td> <td><?= $data['penerima'] ?></td>
                              </tr>
      						            <tr>
                                  <td>Status</td> <td><?= $data['status'] ?></td>
                              </tr>
      						            <tr>
                                  <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                              </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>BPBMD Air Batu<strong></u><br>
                                        NIP.1722021400
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
