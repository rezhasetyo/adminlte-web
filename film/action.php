<?php
include "../koneksi.php";

if(isset($_POST['simpan'])){
    // var_dump($_POST);   var_dump($_FILES);
    $id          = $_POST['id'];
    $judul       = $_POST['judul'];
    $tahun       = $_POST['tahun'];
    $ringkasan   = $_POST['ringkasan'];
    $poster      = $_FILES['poster']['name'];
    $genre_id    = $_POST['genre_id'];


    if($_POST['simpan'] == "store"){   
        $dir = "../Img/";
        $tmpFile = $_FILES['poster']['tmp_name'];
        move_uploaded_file($tmpFile, $dir.$poster);

        $query = "INSERT INTO films VALUES(null, '$judul', '$tahun', '$ringkasan', '$poster', '$genre_id')";
        $sql = mysqli_query($koneksi,$query);
    }elseif ($_POST['simpan'] == "update"){
        $query = "UPDATE films SET judul='$judul', ringkasan='$ringkasan',
                    genre_id='$genre_id' WHERE id='$id'";
        $sql = mysqli_query($koneksi,$query);
    }else {
        echo "Error store/update data";
    }

}elseif (isset($_GET['hapusFilm'])) {
    $id = isset($_GET['id'])   ?   $_GET['id'] : '';
    $query_select = "SELECT * FROM films WHERE id='$id'";
    $sql_select = mysqli_query($koneksi, $query_select);
    $result = mysqli_fetch_assoc($sql_select);
    // var_dump($result);
    unlink("../Img/" .$result['poster']);
    // die();

    $query = "DELETE FROM films WHERE id='$id'";
    $sql = mysqli_query($koneksi,$query);

} else {
    echo "Error Action PHP";
}
?>

<script type="text/javascript">
    window.location.href = "http://localhost/NATIVE/adminlte/index.php?film=index";
</script>