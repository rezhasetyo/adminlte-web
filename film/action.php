<?php
include "function.php";

if(isset($_POST['simpan'])){
    // var_dump($_POST);   var_dump($_FILES);   die();
    if($_POST['simpan'] == "store"){   
        store($_POST, $_FILES);
    }elseif ($_POST['simpan'] == "update"){
        update($_POST, $_FILES);
    }else {
        echo "Error store/update data";
    }
}elseif (isset($_GET['hapusFilm'])) {
    destroy($_GET);
} else {
    echo "Error Action PHP";
}

?>

<script type="text/javascript">
    window.location.href = "http://localhost/NATIVE/adminlte/index.php?film=index";
</script>