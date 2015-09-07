<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ShoeBox Grid Test</title>
        <link rel="stylesheet" href="../css/grid.css">
        <link rel="stylesheet" href="../css/button.css">
    </head>
    <body>
<?php
            $colColors = array('red', 'green', 'blue', 'black', 'grey', 'yellow', 'orange', 'purple', 'red', 'green', 'blue', 'black');

            for ($colNum = 1; $colNum <= 12; $colNum++){
                echo "        <div class='row'>\n";
                    $i = $colNum;
                    while ($i <= 12) {
                        echo "            <div class='col-$colNum'>" .
                                 "<button class='button {$colColors[$colNum - 1]} button-fit'>.col-$colNum</button>" .
                              "</div>\n";
                        if ($i == 12){
                            break;
                        }
                        if ($i + $colNum > 12){
                            $numLeft = 12 - $i;
                            echo "            <div class='col-$numLeft'>" .
                                     "<button class='button black button-fit'>.col-$numLeft</button>" .
                                  "</div>\n";
                            break;
                        }
                        $i += $colNum;
                    }
                echo "        </div>\n";
            }
        ?>
    </body>
</html>


