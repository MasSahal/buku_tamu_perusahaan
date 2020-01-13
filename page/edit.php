<?php

$id = $_GET['id'];
$ambil = $koneksi->query("SELECT * FROM tb_tamu WHERE id_tamu='$id'");
$data = $ambil->fetch_assoc();
?>
<div class="card bg-light p-4 shadow border-light">
    <h3 class="text-center pt-2">Daftar Tamu - Edit </h3>
    <div class="row p-2">
        <div class="col m-auto justify-content-center">
            <div class="form pb-3">
                <form method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" required class="form-control" value="<?=$data['nama_tamu'];?>" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="perusahaan">Nama Perusahaan</label>
                        <input type="text" class="form-control" required name="perusahaan" id="perusahaan"  value="<?=$data['perusahaan_tamu'];?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" required id="alamat" rows="3" class="form-control" aria-describedby="helpId"><?=$data['alamat_tamu'];?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Set Tanggal Saat Ini" class="btn btn-info btn-sm mb-4" name="set_date">
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" name="tamu" value="Simpan">
                    <?php

                    if (isset($_POST['set_date'])) {
                        $tgl = date('H : i') .' - '. date('D, M  Y');
                        $set_date = $koneksi->query("UPDATE tb_tamu SET tgl_tamu='$tgl' WHERE id_tamu='$id'");
                        
                        if ($set_date == 'success') {
                            echo "<script>alert('Behasil set ke $tgl');</script>";
                        } else {
                            echo "<script>alert('gagal');</script>";
                        }
                    }
                    if (isset($_POST['tamu'])) {
                        $nama = $_POST['nama'];
                        $perusahaan = $_POST['perusahaan'];
                        
                        $alamat = $_POST['alamat'];
                        
                        $up = $koneksi->query("UPDATE tb_tamu SET nama_tamu='$nama', perusahaan_tamu='$perusahaan', alamat_tamu='$alamat' WHERE id_tamu='$id'");
                        
                        if ($up == 'success') {
                            echo "<script>alert('Behasil');</script>";
                            echo "<meta http-equiv='refresh' content='0.1;url=index.php?page=guest'>";
                        } else {
                            echo "<script>alert('gagal');</script>";
                            echo "<meta http-equiv='refresh' content='0.1;url=index.php?page=guest'>";
                        }
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>