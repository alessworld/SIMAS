<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Aset Tetap Kecamatan Air Batu</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tetap WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover">
                        <tr>
                            <td>No.Asset</td> <td><?= $data['no_asset'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Asset</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis dan Golongan</td> <td><?= $data['jenis'] ?></td>
                        </tr>
						            <tr>
                            <td>Lokasi</td> <td><?= $data['lokasi'] ?></td>
                        </tr>
                        <tr>
                            <td>Posisi</td> <td><?= $data['posisi'] ?></td>
                        </tr>
                        <tr>
                            <td>Ukuran</td> <td><?= $data['ukuran'] ?></td>
                        </tr>
						            <tr>
                            <td>Status</td> <td><?= $data['status'] ?></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                        </tr>
                    </table>

                </div> <!--end panel-body-->
                <!--panel footer-->
                <div class="panel-footer">
                    <a href="?page=tetap&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Aset Tetap </a>
                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>
