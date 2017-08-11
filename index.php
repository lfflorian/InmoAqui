<?php 
include("connection.php");

$sql = "SELECT operacion, tipoinmueble, titulo, descripcion, departamento, municipio, zona, colonia, nohabitaciones, nobanios, parqueos, dimenciones FROM inmueble";
$result = $connection->query($sql);


// Codigo utilizado para la carga de los inmuebles en un listado
$inmuebles = array();
if ($result->num_rows > 0)
{
	while ($row = $result->fetch_assoc())
	{
		// echo $row["operacion"] ." ". $row["tipoinmueble"] ." ". $row["zona"];
		$inmuebles = $row;
	}
} else
{
	echo "ni un resultado";
}
print json_encode($inmuebles);
// --- finaliza codigo 

// Codigo 
 ?>