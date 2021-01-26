<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Asset Kantor</h3>
                </div>

                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM asset WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover">
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
                    </table>

                </div> <!--end panel-body-->
                <!--panel footer-->
                <div class="panel-footer">
                    <a href="?page=asset&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Asset Kantor </a>
                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>
