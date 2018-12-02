<?php 

include("config.php");

if( isset($_GET['id']) ) {
    $id = $_GET['id'];

    $sql = "DELETE FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);
    
    if( $query ) {
        header('Location: list-siswa.php?hapus=sukses');
    } else {
        header('Location: list-siswa.php?hapus=gagal');
    }
} else {
    die("akses dilarang");
}
?>