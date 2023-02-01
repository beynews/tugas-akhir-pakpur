<?php

$nama = $_FILES["foto"]["name"];
move_uploaded_file($_FILES["foto"]["tmp_name"], "gambar/$nama");
?>