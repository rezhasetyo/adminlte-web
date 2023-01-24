<?php
include "../koneksi.php";
    if(isset($_POST['save'])){
        if($_POST['save'] == "create"){
            echo "Tambah Data";
        }elseif ($_POST['save'] == "edit"){
            echo "Edit Data";
        }else {
            echo "Error";
        }
    }

?>

<!-- <script type="text/javascript">
    window.location.href = "http://localhost/NATIVE/adminlte/index.php?cast=index";
</script> -->