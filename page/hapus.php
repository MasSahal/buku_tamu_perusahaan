<?php
$id = $_GET['id'];
$delete = $koneksi->query("DELETE FROM tb_tamu WHERE id_tamu='$id'");
    
    if ($delete == 'success') {
            echo "<script>alert('Berhasil');</script>";
            echo "<meta http-equiv='refresh' content='0.1;url=index.php?page=list_guest'>";
        }else{
            echo "<script>alert('Gagal');</script>";
            echo "<meta http-equiv='refresh' content='0.1;url=index.php?page=list_guest'>";
        }
?>