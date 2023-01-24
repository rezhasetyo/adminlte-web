<?php
include "../koneksi.php";

if(isset($_POST['action'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $bio = $_POST['bio'];

    if($_POST['simpan'] == "store"){
        // echo "Simpan Data";
        // var_dump($_POST);   die;
        $query = "INSERT INTO casts VALUES(null, '$nama', '$umur', '$bio')";
        $sql = mysqli_query($koneksi,$query);
    }elseif ($_POST['simpan'] == "update"){
        $query = "UPDATE casts SET nama='$nama', umur='$umur',
                    bio='$bio' WHERE id='$id'";
        $sql = mysqli_query($koneksi,$query);
    }else {
        echo "Error store/update data";
    }

}elseif (isset($_GET['hapusCast'])) {
    $id = isset($_GET['id'])   ?   $_GET['id'] : '';
    $query = "DELETE FROM casts WHERE id='$id'";
    $sql = mysqli_query($koneksi,$query);
    // if ($sql) {
    //     echo "Data berhasil dihapus";
    // } else {
    //     echo "Data gagal dihapus";
    // }

} else {
    echo "Error";
}
?>

<script type="text/javascript">
    window.location.href = "http://localhost/NATIVE/adminlte/index.php?cast=index";
</script>