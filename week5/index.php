<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $connect = mysqli_connect('localhost', 'root', '', 'colors');

    if(!$connect){
        die("connection Failed: " . mysqli_connect_error());
    }

    $query = 'SELECT * FROM colors';

    $colors = mysqli_query($connect, $query);

    // echo print_r($colors);

    if($colors){
        echo '<div>',
         '<h1 style = "text-align: center">Name of the Colors</h1>',
         '</div>';

         foreach($colors as $color){
            echo '<div style="background:' . $color['Hex'] . '; padding:20px; color:white; margin-bottom:10px;">';
            echo $color['Name'];
            echo '</div>';
         }
    }

    ?>
</body>
</html>