<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
</head>
<body>
    <h2>Penggunaan upload</h2>
    <?php
    $nama_file=$_FILES["file1"]["name"];
    $tmp_dir=$_FILES["file1"]["tmp_name"];
    copy($tmp_dir,"D:/upload_dir/$nama_file");
    echo("Nama file : <b>$nama_file</b>");
    ?>
    
</body>
</html>