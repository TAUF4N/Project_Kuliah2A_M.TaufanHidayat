<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="get.php" method="request">
        <input type="text" name="nama" placeholder="nama"><br><br>
        <input type="text" name="alamat" placeholder="alamat"><br><br>
        <input type="submit" value="KIRIM">
    </form>
</body>
</html>

<?php 
echo $_REQUEST["nama"]."<br>".$_REQUEST["alamat"];

?>