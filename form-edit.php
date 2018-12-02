<?php 
include("config.php");

if( !isset($_GET['id']) ) {
    header('Location: list-siswa.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ) {
    die("data tidak ditemukan..");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Edit Siswa | SMA Coding</title>
</head>
<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>
    <form action="proses-edit.php" method="post">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>">
            <p>
                Nama: <br>
                <input type="text" name="nama" placeholder="Nama lengkap" value="<?php echo $siswa['nama']?>" > 
            </p>
            <p>
                Alamat: <br>
                <textarea name="alamat" id="" cols="50" rows="4"><?php echo $siswa['alamat']?></textarea>
            </p>
            <p>
                Jenis Kelamin: <br>
                <?php $jk = $siswa['jenis_kelamin']?>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>>Laki - laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>>Perempuan</label>
            </p>
            <p>
                Agama: <br>
                <?php $agama = $siswa['agama']?>
                <select name="agama">
                    <option <?php echo ($agama == 'Islam')? "selected":""?>>Islam</option>
                    <option <?php echo ($agama == 'Kristen')? "selected":""?>>Kristen</option>
                    <option <?php echo ($agama == 'Hindu')? "selected":""?>>Hindu</option>
                    <option <?php echo ($agama == 'Budha')? "selected":""?>>Budha</option>
                    <option <?php echo ($agama == 'Atheis')? "selected":""?>>Atheis</option>
                </select>
            </p>
            <p>
                Sekolah Asal: <br>
                <input type="text" name="sekolah_asal" placeholder="Sekolah asal" value="<?php echo $siswa['sekolah_asal']?>"> 
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan">
            </p>
        </fieldset>
    </form>
</body>
</html>