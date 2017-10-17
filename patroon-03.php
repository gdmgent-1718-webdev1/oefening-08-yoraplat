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
    $colCount = 0;

    echo "<div class='container'>";

    // Left triangle
    for($i = 1; $i<=$rowsLength;++$i){


        
        if ($colCount <= 8){
            

            for($j = 0; $j<=$colCount;++$j){
                $colCount++;
                echo "<div class='dotFilled'></div>";

                for ($j = $j+1; $j<=8; $j++){
                    echo "<div class='dotBlank'></div>";
                }
                }

        }
        else {
            
        }
        



    }

    echo "</div>";

    
    
    ?>
</body>

</html>
