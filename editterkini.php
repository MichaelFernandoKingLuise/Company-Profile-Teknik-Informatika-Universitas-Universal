<style>
    .container-inputhomepage {
        padding-left: 26px;
        padding-right: 32px;
    }

    form {
        margin: 40px 0;
    }
</style>

<?php
include "koneksi.php";
$id = $_GET['idterkini'];
$sql = mysqli_query($db, "SELECT * FROM tbl_terkini where id_terkini = '$id'");
$rdata = mysqli_fetch_array($sql);
?>

<div class="container-fluid container-inputhomepage">
    <form method="POST" action="admin.php?page=edit_terkiniaksi" enctype="multipart/form-data">
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Edit isi terkini: </label>
                    <br>
                    <textarea name="isi_terkini" cols="169" rows="20"><?php echo $rdata['isi_terkini']; ?></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <label>Pilih Gambar (maksimal 2 mb)</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Input Judul terkini: </label>
                    <br>
                    <textarea name="judul_terkini" cols="169" rows="3"><?php echo $rdata['judul_terkini']; ?></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Input Tanggal: </label>
                    <br>
                    <input type="date" name="tanggal_terkini">
                </div>
            </div>
        </div>
        <div class="form-group mt-4">
            <input type="hidden" name="id_terkini" value="<?php echo $rdata['id_terkini']; ?>">
            <input type="submit" name="ubah" value="Ubah" class="btn btn-warning">
        </div>
    </form>
</div>