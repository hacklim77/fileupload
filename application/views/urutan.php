<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $urut = sort($angka);
        $len = count($angka);
        for ($i=0; $i < $len ; $i++) { 
        echo $angka[$i];
        echo "<br>";
        }
    ?>
</body>
</html>