<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Data Asset Tetap</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
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
                      <h3>DATA SELURUH ASSET TETAP KECAMATAN AIR BATU</h3>
                      <table class="table table-bordered table-striped table-hover">
                      <tbody>
                                <thead>
								<tr>
                  <tr>
                      <th>No.</th>
                      <th>Nama Asset</th>
                      <th>Jenis</th>
                      <th>Lokasi</th>
                      <th>Ukuran</th>
                      <th>Status</th>
                      <th>Keterangan</th>
                  </tr>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tetap";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['nama'] ?></td>
									                  <td><?= $data['jenis'] ?></td>
									                  <td><?= $data['lokasi'] ?></td>
                                    <td><?= $data['ukuran'] ?></td>
                                    <td><?= $data['status'] ?></td>
                                    <td><?= $data['keterangan'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="8" class="text-right">
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
