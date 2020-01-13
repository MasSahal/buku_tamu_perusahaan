<div class="card bg-light p-4 shadow border-light">
    <h3 class="text-center py-2">Daftar Tamu Undangan</h3>

    <div class=" table table-responsive">
        <table class="table table-bordered table-hover table-striped dataTable" id="myTable">
            <thead>
                <tr class="bg-info text-light">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nama Perusahaan</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                $sql = $koneksi->query("SELECT * FROM tb_tamu");
                while ($data = $sql->fetch_array()) {
                ?>
                    <tr>
                        <td><?= $i += 1; ?></td>
                        <td><?= $data['nama_tamu']; ?></td>
                        <td><?= $data['perusahaan_tamu']; ?></td>
                        <td><?= $data['tgl_tamu']; ?></td>
                        <td><?= $data['alamat_tamu']; ?></td>
                        <td>
                            <a href="?page=edit&id=<?= $data['id_tamu']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Ubah</a>
                            <a href="?page=hapus&id=<?= $data['id_tamu']; ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <span><a href="?page=guest" class="btn btn-sm btn-success mt-2"><i class="fa fa-plus"></i> Tambah</a></span>
    </div>
</div>