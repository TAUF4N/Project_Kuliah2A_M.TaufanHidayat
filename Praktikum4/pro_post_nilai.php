<!DOCTYPE html>
<head>
    <title>Proses input</title>
</head>
<body>
    <?php 
    $bil1=$_POST["bil1"];
    $bil2=$_POST["bil2"];
    ?>
    <h1>Perbandingan bilangan</h1>
    <hr>
    Bil 1 :
    <?php echo $bil1 ?>
    <br>
    Bil 2 : 
    <?php echo $bil2 ?>
    <br>
    <?php 
    if ($bil1<$bil2){
        echo "$bil1 lebih kecil dari $bil2";
    }
    elseif($bil1>$bil2){
        echo "$bil1 lebih besar dari $bil2";
    }
    else{
        echo "$bil1 sama dengan $bil2";
    }
    ?>
</body>
</html>