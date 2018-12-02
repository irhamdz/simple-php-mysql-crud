<?php 
include("config.php");

// cek isi post
if( isset($_POST['daftar']) ) {

    // ambil data form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // query
    $sql = "INSERT INTO calon_siswa (nama,alamat,jenis_kelamin,agama,sekolah_asal) VALUES ('$nama', '$alamat','$jk','$agama','$sekolah')";
    $query = mysqli_query($db, $sql);


    // query berhasil?
    if( $query ) {
        header('Location: list-siswa.php?status=sukses');
    } else {
        header('Location: list-siswa.php?status=gagal');
    }
} else {
    die("Akses dilarang ... ");
}
?>