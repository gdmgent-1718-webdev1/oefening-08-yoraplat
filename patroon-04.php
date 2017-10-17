<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="screen.css">
</head>

<body>
   

    <?php
    
    $k=1;
    for($i=9;$i>=0;$i--){
        for($j=0;$j<=$i;$j++){
            echo '<div class="dotFilled"></div>'.'&nbsp;';
            $k++;
        }
        echo "<br>";
    }

    
    ?>
</body>

</html>
