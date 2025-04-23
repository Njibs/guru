<?php
if(isset($_POST['update'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $matadiklat = $_POST['matadiklat'];

    include_once "setting.php";
    $sql = "UPDATE ujianawal SET nip='$nip', nama='$nama', jk='$jk', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat', telepon='$telepon', email='$email', matadiklat='$matadiklat' WHERE nip='$nip'";
    $result = mysqli_query($koneksi, $sql);
    if($result) {
        header('location: ?m=guru&s=tampil');
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
} else {
    echo "Jangan Akses langsung ke file simpan.php";
}
