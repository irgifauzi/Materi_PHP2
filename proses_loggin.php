<?php
session_start();
if(isset($_SESSION["session_status"]))
{
    echo("<pre>");
    echo("User Name : <b>".$_SESSION["session_user"]. "</b><br>");
    echo("Password   : <b>".$_SESSION["session_password"]."</b><br>");
    echo("Click <a href=\"logout.php\">Loggout</a> untuk Keluar !");
    echo("</pre>");
}else
{
    header("Location: loggin.php");
    exit;

}
?>