<?php 
include ("../sal_modelo/controlador.php");
$controlador = new controlador();
$controlador->directorio($dni, $nom, $pat, $mat, $tel, $establecimiento);

echo "<table>";  
echo "<tr>";  
echo "<th>DNI</th>";  
echo "<th>Nombre</th>";  
echo "<th>Paterno</th>";
echo "<th>Materno</th>";
echo "<th>Teléfono</th>";
echo "<th>Estabecimiento</th>";
echo "</tr>";
while ($row = mysql_fetch_row($result)){   
    echo "<tr>";  
    echo "<td>$row[5]></td>";  
    echo "<td>$row[7]</td>";  
    echo "<td>$row[4]</td>";  
    echo "</tr>";  
}  
echo "</table>";  

?>