<?php include("config.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Siswa Baru | SMA Coding</title>
</head>
<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>
    <nav>
        <a href="index.php"><< Kembali ke Home</a>
        <br>
        <a href="form-daftar.php">[+] Tambah Siswa Baru</a>
    </nav>
    <br>
    <?php if( isset($_GET['status']) ) {
        echo "<p>";
        if($_GET['status'] == 'sukses') {
            echo "Pendaftaran siswa baru berhasil";
        } else {
            echo "Pendaftaran gagal!";
        }
        echo "</p>";
    }

    if( isset($_GET['hapus']) ) {
        echo "<p>";
        if($_GET['hapus'] == 'sukses') {
            echo "Hapus data siswa berhasil";
        } else {
            echo "Hapus data gagal!";
        }
        echo "</p>";
    }

    if( isset($_GET['update']) ) {
        echo "<p>";
        if($_GET['update'] == 'sukses') {
            echo "Update data siswa berhasil";
        } else {
            echo "Update data gagal!";
        }
        echo "</p>";
    }
    ?>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $sql = "SELECT * FROM calon_siswa";
            $query = mysqli_query($db, $sql);
            $no = 0;

            while( $siswa = mysqli_fetch_array($query) ) {
                $no++;
                echo "<tr>";
                echo "<td>".$no."</td>";
                echo "<td>".$siswa['id']."</td>";
                echo "<td>".$siswa['nama']."</td>";
                echo "<td>".$siswa['alamat']."</td>";
                echo "<td>".$siswa['jenis_kelamin']."</td>";
                echo "<td>".$siswa['agama']."</td>";
                echo "<td>".$siswa['sekolah_asal']."</td>";
                echo "<td>";
                echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
                echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Total Siswa: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>