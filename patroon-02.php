<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="screen.css">
</head>

<body>
   

    <?php
    
    $rows = [1,2,3,4,5,6,7,8,9];
    $cols = [1,2,3,4,5,6,7,8,9];
    $rowsLength = count($rows);
    $colsLength = count($cols);

    echo "<div class='container'>";

    // All rows & cols
    for($i = 1; $i<=$rowsLength;++$i){


        echo "<div class='dotFilled'></div>";
        
        for($j = 1; $j<=$colsLength;++$j){
        echo "<div class='dotFilled'></div>";
        }
    }

    echo "</div>";

    
    
    ?>
</body>

</html>
