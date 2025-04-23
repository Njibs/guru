<?php
$nip = $_GET['nip'];
include_once("setting.php");

$sql = "DELETE FROM ujianawal WHERE nip='$nip'";
$result = mysqli_query($koneksi, $sql);
if($result) {
    header('location: ?m=guru&s=tampil');
} else {
    echo "Error" . $sql . "<br>" . $koneksi->error;
}