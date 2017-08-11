<?php 
include("connection.php");

$sql = "SELECT operacion, tipoinmueble, titulo, descripcion, departamento, municipio, zona, colonia, nohabitaciones, nobanios, parqueos, dimenciones FROM inmueble";
$result = $connection->query($sql);

if ($result->num_rows > 0)
{
	while ($row = $result->fetch_assoc())
	{
		echo $row["operacion"] ." ". $row["tipoinmueble"] ." ". $row["zona"];
	}
} else
{
	echo "ni un resultado";
}


 ?>