<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Data Asset Kantor</title>
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
                        <h3>DATA SELURUH ASSET KANTOR</h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                                <thead>
								<tr>
                  <th>No.</th>
                  <th>No. Asset</th>
                  <th>Nama. Asset</th>
                  <th>Merek</th>
                  <th>Ruang Letak</th>
                  <th>Tanggal Masuk</th>
                  <th>Status</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM asset";
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
                                  <td><?= $data['no_asset'] ?></td>
                                  <td><?= $data['nama_asset'] ?></td>
                                  <td><?= $data['merek'] ?></td>
                                  <td><?= $data['ruang_letak'] ?></td>
                                  <td><?= $data['tgl_masuk'] ?></td>
                                  <td><?= $data['status'] ?></td>
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
                                        <u>BPBMD Air Batu<strong></u><br>
                                        NIP.1722021400
									</td>
                  </table>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
