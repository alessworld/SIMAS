<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="?page=utama">Sistem Informasi Manajemen Asset (SIMAS)</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>

                <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Master Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=asset&actions=tampil">Data Asset Kantor</a></li>
                        <li><a href="?page=tetap&actions=tampil">Data Aset Kecamatan</a></li>
                        <li><a href="?page=pajak&actions=tampil">Data Pendapatan Kecamatan</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=asset&actions=report">Laporan Asset Kantor</a></li>
						            <li><a href="?page=tetap&actions=report">Laporan Asset Kecamatan</a></li>
                        <li><a href="?page=pajak&actions=report">Laporan Pendapatan Kecamatan</a></li>
                    </ul>
                </li>
                <li><a href="?page=user&actions=tampil">User</a></li>


                <?php } ?>
                <?php if(isset($_SESSION['level']) && $_SESSION['level']==2) { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Master Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=asset_multi&actions=tampil">Data Asset Kantor</a></li>
                        <li><a href="?page=tetap_multi&actions=tampil">Data Aset Kecamatan</a></li>
                        <li><a href="?page=pajak_multi&actions=tampil">Data Pendapatan Kecamatan</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=asset&actions=report">Laporan Asset Kantor</a></li>
                        <li><a href="?page=tetap&actions=report">Laporan Asset Kecamatan</a></li>
                        <li><a href="?page=pajak&actions=report">Laporan Pendapatan Kecamatan</a></li>
                    </ul>
                </li>

                <?php } ?>
                <?php if(isset($_SESSION['level']) && $_SESSION['level']==3) { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Master Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=asset_multi&actions=tampil">Data Asset Kantor</a></li>
                        <li><a href="?page=tetap_multi&actions=tampil">Data Aset Kecamatan</a></li>
                        <li><a href="?page=pajak_multi&actions=tampil">Data Pendapatan Kecamatan</a></li>
                    </ul>
                </li>

                <?php } ?>

                <li><a href="?page=about&actions=tampil">About</a></li>
                <li><a href="?page=kontak&actions=tampil">Contact</a></li>

                    <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
