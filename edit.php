<div class="card">
<div class="card-body row">
    <div class="card-title h3 col-8">Edit Data guru</div>
    <div class="col-4 mb-3">
        <a href="?m=guru&s=view" class="btn btn-md btn-primary float-end">Back</a>
    </div>

    <?php
    include_once "setting.php";
    $nip = $_GET['nip'];
    $sql = "SELECT * FROM guru WHERE nip='$nip'";
    $query = mysqli_query($koneksi, $sql);
    $r = mysqli_fetch_array($query);
    ?>
    <form action="?m=guru&s=update" method="post">
        <div class="mb-2">
            <input type="text" class="form-control" name="nip" value="<?= $r['nip']; ?>" placeholder="Nomor Induk guru" autofocus required>
        </div>
        <div class="mb-2">
            <input type="text" class="form-control" name="nama" value="<?= $r['nama']; ?>" placeholder="nama" required>
        </div>
        <div class="mb-2">
            <label for="jk">Jenis Kelamin</label>&nbsp;
            <input type="radio" name="jk" value="Laki-laki" 
            <?php
            if ($r['jk'] == "Laki-laki") {
                echo 'checked';
            }
            ?>
            >Laki-laki
            <input type="radio" name="jk" <?= $r['jk'] == 'Perempuan' ? 'checked' : ''?> value="Perempuan">Perempuan
        </div>
        <div class="mb-2">
            <input type="text" class="form-control" name="tempat_lahir" value="<?= $r['tempat_lahir']; ?>" placeholder="Tempat lahir">
        </div>
        <div class="mb-2">
            <input type="date" class="form-control" name="tanggal_lahir" value="<?= $r['tanggal_lahir']; ?>" placeholder="Tanggal lahir">
        </div>
        <di class="mb-2">
            <textarea type="alamat" class="form-control" name="alamat" value="<?= $r['alamat']; ?>" placeholder="Alamat" rows="4"></textarea>
        </div>
        <div class="mb-2">
            <input type="text" class="form-control" name="telepon" value="<?= $r['telepon']; ?>" placeholder="Nomor Telepon/HP" autofocus required>
        </div>
        <div class="mb-2">
            <input type="email" class="form-control" name="email" value="<?= $r['email']; ?>" placeholder="Email" autofocus required>
        </div>
        <div class=""mb-2>
            <select name="matadiklat_id" class="form-control" required>
                <option value="">-- Pilihan matadiklat --</option>
                <?php
                include_once "setting.php";
                $matadiklat = mysqli_query($koneksi, "SELECT * FROM matadiklat");
                while ($j = mysqli_fetch_array($matadiklat) ) {
                    echo "<option value='$j[id]' " . ($j['id'] == $r['matadiklat_id'] ? 'selected' : '') . ">$j[matadiklat]</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-2">
            <input type="hidden" name="nip" value="<?= $r['nip']; ?>">
            <input type="reset" class="btn btn-sm btn-danger">
            <input type="submit" class="btn btn-sm btn-primary" name="update" value="Update">
        </div>
</div>
</div>