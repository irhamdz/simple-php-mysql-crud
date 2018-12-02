<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Pendaftaran Siswa Baru | SMA Coding</title>
</head>
<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <nav>
        <a href="list-siswa.php">- List Pendaftar</a>
    </nav>
    <br>

    <form action="proses-pendaftaran.php" method="post">
        <fieldset>
        <p>
            Nama: <br>
            <input type="text" name="nama" placeholder="Nama lengkap">
        </p>
        <p>
            Alamat: <br>
            <textarea name="alamat" cols="50" rows="4" placeholder="alamat"></textarea>
        </p>
        <p>
            Jenis Kelamin: <br>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki - laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</label>
        </p>
        <p>
            Agama: <br>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            Sekolah Asal: <br>
            <input type="text" name="sekolah_asal" placeholder="Sekolah asal">
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar"/>
        </p>
        </fieldset>
    </form>    
</body>
</html>