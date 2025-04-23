 <div class="card">
        <div class="card-body row bg-warning">
    <div class="card-title h3 col-8">Data Instruktur</div>
    <div class="col-4 mb-2">
        <a href="?m=guru&s=tambah" class="btn btn-md btn-primary float-end">Tambah</a>
    </div>
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama Guru</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Mata Diklat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include_once "setting.php";
                $sql    = "SELECT * FROM guru";
                $result = mysqli_query($koneksi, $sql);
                if ($r = mysqli_num_rows($result) > 0){
                    $no = 1;
                    while ($r = mysqli_fetch_assoc($result)) {
                        echo '<tr>
                        <td>' . $no . '</td>
                        <td>' . $r['nip'] . '</td>
                        <td>' . $r['nama'] . '</td>
                        <td>' . $r['jk'] . '</td>
                        <td>' . $r['tempat_lahir'] . '</td>
                        <td>' . date('d F Y', strtotime($r['tanggal_lahir'])) . '</td>
                        <td>' . $r['alamat'] . '</td>
                        <td>' . $r['telepon'] . '</td>
                        <td>' . $r['email'] . '</td>
                        <td>' . $r['matadiklat'] . '</td>
                        <td>
                        <a href="?m=guru&s=edit&nip=' . $r ['nip'] . '" class="btn btn-sm btn-warning">Edit</a>
                        <a href="?m=guru&s=hapus&nip=' . $r ['nip'] . '" class="btn btn-sm btn-danger" onclick="return confirm(\'Apakah anda yakin?\')">Hapus</a>
                            </td>
                            </tr>';
                            $no++;
                        }
                } else {
                    echo '<tr>
                        <td colspan=10" align="center">Data Kosong</td>
                    </tr>';
                }
                ?>
        </tbody>
    </table>
</div>
</div>
