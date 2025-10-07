<!DOCTYPE html>
<html>
<body>
<table align="left" border="1" cellpadding="3" cellspacing="0">
<?php
for ($i=1; $i <= 6; $i++) { 
    echo "<tr>";
    for ($j=1; $j < 5; $j++) { 
        $result = $i * $j;
        echo "<td>$i x $j = $result </td>";
    }
    echo "</tr>";
}
?>
</table>
</body>
</html>