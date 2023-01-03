<?php
/* Printing the pattern. */
echo "<pre>";
for ($row = 0; $row < 7; $row++) {
    for ($col = 0; $col <= 5; $col++) {
        if (($col == 1 and $row != 0 and $row != 6) OR (($row == 0 OR $row == 6) and $col > 1 and $col < 5) OR ($row == 3 and $col > 2 and $col < 6) OR ($col == 5 and $row != 0 and $row != 2 and $row != 3 and $row != 2 and $row != 6)) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br/>";
}
echo "</pre>";
?>