<?php
include "../koneksi.php";

    function store($data, $files){
        // $id          = $data['id'];
        $judul       = $data['judul'];
        $tahun       = $data['tahun'];
        $ringkasan   = $data['ringkasan'];
        $genre_id    = $data['genre_id'];

        // $poster      = $files['poster']['name'];
        $split = explode('.', $files['poster']['name']);
        $extension = $split[count($split)-1];
        $poster = rand(1000,9999). '.'. $extension;

        $dir = "../Img/";
        $tmpFile = $files['poster']['tmp_name'];
        move_uploaded_file($tmpFile, $dir.$poster);

        $query = "INSERT INTO films VALUES(null, '$judul', '$tahun', '$ringkasan', '$poster', '$genre_id')";
        $sql = mysqli_query($GLOBALS['koneksi'], $query);
    }

    function update($data, $files){
        $id          = $data['id'];
        $judul       = $data['judul'];
        $tahun       = $data['tahun'];
        $ringkasan   = $data['ringkasan'];
        $poster      = $_FILES['poster']['name'];
        $genre_id    = $data['genre_id'];

        if ($poster == null) {
            $query = "UPDATE films SET judul='$judul', tahun='$tahun', ringkasan='$ringkasan',
                    genre_id='$genre_id' WHERE id='$id'";
            $sql = mysqli_query($GLOBALS['koneksi'], $query);
        } else {
            $query_select = "SELECT * FROM films WHERE id='$id'";
            $sql_select = mysqli_query($GLOBALS['koneksi'], $query_select);
            $result = mysqli_fetch_assoc($sql_select);
            unlink("../Img/" .$result['poster']);
            
            $poster = $result['poster'];
            $dir = "../Img/";
            $tmpFile = $files['poster']['tmp_name'];
            move_uploaded_file($tmpFile, $dir.$poster);

            $query = "UPDATE films SET judul='$judul', tahun='$tahun', ringkasan='$ringkasan',
                    poster='$poster', genre_id='$genre_id' WHERE id='$id'";
            $sql = mysqli_query($GLOBALS['koneksi'], $query);
            // return true;
        }
    }

    function destroy($get){
        $id = $get['id'];
        // $id = isset($_GET['id'])   ?   $_GET['id'] : '';
        $query_select = "SELECT * FROM films WHERE id='$id'";
        $sql_select = mysqli_query($GLOBALS['koneksi'], $query_select);
        $result = mysqli_fetch_assoc($sql_select);
        unlink("../Img/" .$result['poster']);

        $query = "DELETE FROM films WHERE id='$id'";
        $sql = mysqli_query($GLOBALS['koneksi'],$query);
    }

?>