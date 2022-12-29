<?php
session_start();
if(isset($_POST["insert"]))
{
    if(($_POST["user"]!="")&&($_POST["password"]!=""))
    {
        $_SESSION["session_status"]=["loggin"];
        $_SESSION["session_user"]=$_POST["user"];
        $_SESSION["session_password"]=$_POST["password"];
        header("Location: proses_loggin.php");
        exit;


    }
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>
    <h2>penggunaan session</h2>
    <pre>
        <form action="loggin.php" method="post">
            User Name    :<input type="text" name="user" size="15">
            User Pasword :<input type="password" name="password" size="15">
                          <input type="hidden" name="insert">
                          <input type="submit" name="loggin" value="Loggin">
</form>
</pre>
</body>
</html>