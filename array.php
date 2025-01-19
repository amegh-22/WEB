<?php
$cricekter=array("sachin","dhoni","virat");
?>
<html>
    <head>
        <title>cricekter</title>
    </head>
    <body>
        <table border="2">
            <th>
                names
            </th>
            <?php
            foreach ($cricekter as $player){
             echo "<tr><td>$player</td></tr>";
            }
            ?>
        </table>
    </body>
</html>