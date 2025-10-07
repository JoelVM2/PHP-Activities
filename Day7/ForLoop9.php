<!DOCTYPE html>
<html>
<body>
<table align="left" border="1px"  >
<?php
for ($i=0; $i < 8; $i++) { 

    echo "<tr width='270px' height='30px'>";
    for ($j=1; $j <=8 ; $j++) { 
        
        if(($i+$j)%2==0){
            echo "<td></td>";
        }else{
            echo "<td bgcolor='black'></td>";
        }
    }
    echo "</tr>";
}
?>
</table>
</body>
</html>