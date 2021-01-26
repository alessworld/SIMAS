<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Wajib Pajak Kecamatan Air Batu</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM pajak WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover">
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
                    </table>

                </div> <!--end panel-body-->
                <!--panel footer-->
                <div class="panel-footer">
                    <a href="?page=pajak&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Wajib Pajak </a>
                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>
