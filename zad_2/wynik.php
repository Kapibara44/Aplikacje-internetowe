<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a=$_POST['pole_1'];
        $b=$_POST['pole_2'];

        echo "Pole: "; echo $a*$b;
        echo "</br>Obwod: "; echo $a * 2 + $b *2;
    ?>
</body>
</html>