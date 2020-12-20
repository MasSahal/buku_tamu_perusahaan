<div class="card bg-light p-4 shadow border-light">
    <h3 class="text-center pt-2">Daftar Tamu</h3>
    <div class="row p-2">
        <div class="col m-auto justify-content-center">
            <div class="form pb-3">
                <form method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" required class="form-control" placeholder="Masukan Nama" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="perusahaan">Nama Perusahaan</label>
                        <input type="text" class="form-control" required name="perusahaan" id="perusahaan" placeholder="Masukan Nama Perusahaan">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" required id="alamat" rows="3" class="form-control" placeholder="Masukan Alamat" aria-describedby="helpId"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" name="tamu" value="Simpan">
                    <?php

                    if (isset($_POST['tamu'])) {
                        $nama = $_POST['nama'];
                        $perusahaan = $_POST['perusahaan'];
                        $tgl = date('H : i') . ' - ' . date('D, M  Y');
                        $alamat = $_POST['alamat'];

                        $add = $koneksi->query("INSERT INTO tb_tamu (nama_tamu, perusahaan_tamu, tgl_tamu, alamat_tamu) VALUES ('$nama','$perusahaan','$tgl','$alamat')");
                        var_dump($add);
                        if ($add == 'success') {
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