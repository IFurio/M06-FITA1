<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercici 1.1</title>
        <link rel="stylesheet" href="styles.css">
        <style>
            table, td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 3px;
                text-align: center;
                height: 15px;
                width: 150px;
            }
        </style>
    </head>
    <body>
        <?php
            echo "  <h2>Exercici 1</h2>";
            echo "  <table>";
            echo "      <tr>";
            $colums = 10;
            $limit = "N";
            for ($i = 0; $i <= $colums; $i++) {
                echo "\t\t<td>$i</td>\n";
                if ($i == $colums) {
                    echo "\t\t<td>$limit</td>\n";
                }
            }
            echo "      </tr>";
            echo "  </table>";

            echo "  <h2>Exercici 2</h2>";
            echo "  <table>";
            $colums = 10;
            $rows = 2;
            $asciiValue = 65;
            $limit = "?";
            for ($row = 1; $row <= $rows; $row++) { // for each row
                echo "\t\t<tr>\n";
                for ($colum = 0; $colum <= $colums - 1; $colum++) { // for each colum
                    if ($row == 1) {
                        if ($colum == $colums - 1) {
                            echo "\t\t<td>$limit</td>\n";
                        } else {
                            $letter = chr($asciiValue);
                            echo "\t\t<td>$letter</td>\n";
                            $asciiValue++;
                        }
                    } else { // the current row is not the first row
                        if ($colum == $colums - 1) {
                            $limit = "N";
                            echo "\t\t<td>$limit</td>\n";
                        } else {
                            echo "\t\t<td>$colum</td>\n";
                        }
                    }
                }
                echo "\t\t</tr>\n";
            }
            echo "      </tr>";
            echo "  </table>";

            echo "  <h2>Exercici 3</h2>";
            echo "  <table>";
            $colums = 5;
            $rows = 5;
            $limit = "N";
            for ($row = 0; $row <= $rows - 1; $row++) { // for each row
                echo "\t\t<tr>\n";
                for ($colum = 0; $colum <= $colums - 1; $colum++) { // for each colum
                    if ($row == $rows - 2) { // this is the penultimate row
                        echo "\t\t<td></td>\n";
                    }
                    elseif ($row == $rows - 1) { // this is the final row
                        if ($colum == 0) {
                            $limit = "M";
                            echo "\t\t<td>$limit</td>\n";
                        }
                        elseif ($colum == $colums - 1) {
                            $limit = "M+N";
                            echo "\t\t<td>$limit</td>\n";
                        }
                        else {
                            echo "\t\t<td>M+$colum</td>\n";
                        }
                    }
                    elseif ($row == 0) { // this is the first row
                        if ($colum == $colums - 1) {
                            echo "\t\t<td>$limit</td>\n";
                        } else {
                            echo "\t\t<td>$colum</td>\n";
                        }   
                    } else { // this is a normal row
                        if ($colum == $colums - 1) {
                            echo "\t\t<td>$limit+$row</td>\n";
                        } else {
                            $num = $colum + $row;
                            echo "\t\t<td>$num</td>\n";
                        }
                    }
                }
                echo "\t\t</tr>\n";
            }
            echo "  </table>";

            echo "  <h2>Exercici 4</h2>";
            echo "  <table>";
            $colums = 6;
            $rows = 5;
            $limit = "N";
            $asciiValue = 65;
            for ($row = 1; $row <= $rows; $row++) { // for each row
                echo "\t\t<tr>\n";
                for ($colum = 0; $colum <= $colums - 1; $colum++) { // for each colum
                    if ($row == 1 && $colum == 0) {
                        echo "\t\t<td></td>\n";
                    }
                    elseif ($row == 1) { // if this is the first row
                        if ($colum == $colums - 1) {
                            echo "\t\t<td>$limit</td>\n";
                        } else {
                            echo "\t\t<td>$colum</td>\n";
                        }
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
            echo "\t\t<tr>\n";
            echo "\t\t</tr>\n";
            echo "  </table>";
        ?>
    </body>
</html>
