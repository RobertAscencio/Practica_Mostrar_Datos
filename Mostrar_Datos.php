<html>
<head>
<TITLE>Muestra los resultados de una consulta MySQL.</TITLE>
</head>

<body>
<div align='center'>
  <table border='1' cellpadding='0' cellspacing='0' width='600' bgcolor='#F6F6F6' bordercolor='#FFFFFF'>
    <tr>
      <td width='150' style='font-weight: bold'>ID</td>
      <td width='150' style='font-weight: bold'>Autor</td>
      <td width='150' style='font-weight: bold'>Titulo</td>
      <td width='150' style='font-weight: bold'>Editorial</td>
      <td width='150' style='font-weight: bold'>Fecha edicion</td>
      <td width='150' style='font-weight: bold'></td>
    </tr>
<?php
include('Conexion.php');

    $query = "select * from insertar";
    $result = mysql_query($query);

    while ($registro = mysql_fetch_array($result)){
echo "
    <tr>
      <td width='150'>".$registro['id']."</td>
      <td width='150'>".$registro['Autor']."</td>
      <td width='150'>".$registro['Titulo']."</td>
      <td width='150'>".$registro['Editorial']."</td>
      <td width='150'>".$registro['Fecha_edicion']."</td>
      <td width='150'></td>

    </tr>
";
}
//include('cierra_conexion.php');
?>
   </table>
</div>
</body>

</html>
