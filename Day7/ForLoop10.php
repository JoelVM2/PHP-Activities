<!DOCTYPE html>
<html>
<body>
<table align="left" border="1px"  >
<?php
for ($i=1; $i <= 10; $i++) { 
    echo "<tr width='270px' height='30px'>";
    for ($j=1; $j <=10 ; $j++) { 
        echo "<td>". $i*$j ."</td>";
    }
    echo "</tr>";
}
?>
</table>
</body>
</html>