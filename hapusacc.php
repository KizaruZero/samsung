<?php

require 'fungsi.php';

$id = $_GET["id"];

if (hapusacc($id) == true) {
    echo "
    <script> 
    alert('Data berhasil dihapus!');
    document.location.href = 'admin.php';
    </script>
    ";
} else {
    echo "
    <script> 
    alert('Data gagal dihapus!');
    document.location.href = 'admin.php';
    </script>
    ";
}

?>