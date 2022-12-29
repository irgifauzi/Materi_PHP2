<?php
session_start();
session_destroy();
echo("Logout selesai!<br>");
echo("Kembali ke halaman loggin klik <a href=\"loggin.php\">Loggin</a>!");
?>  