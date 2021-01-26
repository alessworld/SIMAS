<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Wajib Pajjak</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM pajak WHERE id='" . $_GET ['id'] . "'";
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
                        <h3>DATA WAJIB PAJAK KECAMATAN AIR BATU</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
                              <tr>
                                  <td>No.Perusahaan</td> <td><?= $data['noph'] ?></td>
                              </tr>
                              <tr>
                                  <td>Nama Perusahaan</td> <td><?= $data['namaph'] ?></td>
                              </tr>
                              <tr>
                                  <td>Jenis Perusahaan</td> <td><?= $data['jenis'] ?></td>
                              </tr>
      						            <tr>
                                  <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                              </tr>
                              <tr>
                                  <td>Pembayaran/Bulan</td> <td><?= $data['bayar'] ?></td>
                              </tr>
      						            <tr>
                                  <td>Status</td> <td><?= $data['status'] ?></td>
                              </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
                                      Air Batu  <?= date("d-m-Y") ?>
                                      <br><br><br><br>
                                      <u>BPPPD Air Batu<strong></u><br>
                                      NIP.1722021401
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
