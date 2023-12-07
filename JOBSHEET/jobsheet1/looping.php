<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>

<body>
    <?php
    //FOR
    echo "Perulangan FOR bilangan genap dari 1 hingga 10 <br>";
    for ($x = 2; $x <= 10; $x += 2)
        echo "$x <br>";
        

    // //WHILE
    // echo "<br> Perulangan WHILE bilangan ganjil dari 1 hingga 10 <br>";
    //     $y = 1;
    //     while ($y <= 10){
    //         echo "$y <br>";
    //         $y += 2;
    //     }
     
    //DO WHILE
    echo "<br> Perulangan DO WHILE bilangan prima < 20 <br>";
    function hitungPrima($prima) {
        if ($prima <= 1) {
            return false;
        }
        for ($i = 2; $i * $i <= $prima; $i++) {
            if ($prima % $i === 0) {
                return false;
            }
        }
        return true;
    }
    
    $z = 2; 
    // Mulai dari 2 karena 1 bukan bilangan prima
    do {
        if (hitungPrima($z)) {
            echo $z . "<br>";
        }
        $z++;
    } while ($z <= 20);
?>
</body>

</html>