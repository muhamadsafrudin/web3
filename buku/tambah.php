<?php
include('../template/header.php');
include('../template/sidebar.php');
?>


<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group text-right">
                    <a class="btn btn-sm btn-info" href="index.php">Kembali</a>
                </div>
                <form action="proses.php" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label for="">Judul Buku</label>
                        <input class="form-control" name="judul" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Penulis Buku</label>
                        <input class="form-control" name="penulis" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Tahun Terbit</label>
                        <input class="form-control" name="tahun" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah</label>
                        <input class="form-control" name="jumlah" type="number">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-sm btn-primary" type="submit" name="simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include('../template/footer.php');
?>