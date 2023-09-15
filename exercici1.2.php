<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercici 1.2</title>
        <!-- <link rel="stylesheet" href="styles.css"> -->
        <style>
            table, td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 3px;
                text-align: center;
                height: 50px;
            }
            td {
                width: 50px;
            }
        </style>
    </head>
    <body>
        <?php
            echo "  <h1>Batalla Naval</h1>";

            $boats = [1, 2 ,3 ,4]; // fragata, submarino, destructor, portaviones

            $matrix = [[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                       [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                       [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                       [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                       [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                       [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                       [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                       [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                       [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                       [0, 0, 0, 0, 0, 0, 0, 0, 0, 0]];

            // 4 fragates, 3 submarins, 2 destructors i 1 portaavions.
            echo rand(0,1);
            $totalBoats = 10;
            for ($i = 1; $i <= $totalBoats;) {
                $rowPosition = rand(0, 9);
                $columPosition = rand(0, 9);
                $orientation = rand(0, 1);
                if ($i <= 4) { // set frigate position
                    if ($matrix[$rowPosition][$columPosition] == 0) {
                        $matrix[$rowPosition][$columPosition] = 1;
                        $i++;
                    }
                }
                elseif ($i <= 7) { // set submarine position
                    $i++;
                }
                elseif ($i <= 9) { // set destructor position
                    $i++;
                } else { // set aircraft carrier position
                    $i++;
                }
            }

            echo "  <table>";
            $colums = 11;
            $rows = 11;
            $limit = "N";
            $asciiValue = 65;
            for ($row = 1; $row <= $rows; $row++) { // for each row
                echo "\t\t<tr>\n";
                for ($colum = 0; $colum <= $colums - 1; $colum++) { // for each colum
                    if ($row == 1 && $colum == 0) {
                        echo "\t\t<td></td>\n";
                    }
                    elseif ($row == 1) { // if this is the first row
                        echo "\t\t<td>$colum</td>\n";
                    }
                    elseif ($colum == 0) {
                        $letter = chr($asciiValue);
                        echo "\t\t<td>$letter</td>\n";
                        $asciiValue++;
                    } else {
                        echo "\t\t<td></td>\n";
                    }
                }
                echo "\t\t</tr>\n";
            }
            echo "  </table>";
        ?>
    </body>
</html>