<?php
if(isset($_POST['simpan'])) {
    $id = $_POST['nip'];
    $nama_guru = $_POST['nama_guru'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $mata_diklat = $_POST['mata_diklat'];
    $aksi = $_POST['aksi'];
    

    include_once "setting.php";
    $sql = "INSERT INTO ujianawal SET nip='$nip', nama_guru='$nama_guru', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat', telepon='$telepon', email='$email', mata_diklat='$mata_diklat', aksi='$aksi'";
    if($result) {
        header('location: ?m=ujianawal&s=tampil');
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
} else {
    echo "Jangan Akses langsung ke file simpan.php";
}
