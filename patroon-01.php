<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="screen.css">
</head>

<body>
   

    <?php
    
    $rows = [0,1,2,3,4,5,6,7,8];
    $cols = [0,1,2,3,4,5,6,7,8];
    $rowsLength = count($rows);
    $colsLength = count($cols);
    echo "<div class='container'>";
    // One row
    for($i = 0; $i<=$rows[0];$i++){

        echo "<div class='dotFilled'></div>";
        
        for($j = 1; $j<=8;++$j){
        echo "<div class='dotFilled'></div>";
        }
    }

    echo "</div>";
    
    
    ?>
</body>

</html>
