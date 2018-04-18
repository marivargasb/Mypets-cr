<?php

$conexion = mysqli_connect("localhost","root","","mypetscr");

if(!$conexion){

    echo "error de conexion";
}else{



}



function parseToXML($htmlStr){
	$xmlStr=str_replace('<','&lt;',$htmlStr);
	$xmlStr=str_replace('>','&gt;',$xmlStr);
	$xmlStr=str_replace('"','&quot;',$xmlStr);
	$xmlStr=str_replace("'",'&#39;',$xmlStr);
	$xmlStr=str_replace("&",'&amp;',$xmlStr);
	return $xmlStr;
}




// Select all the rows in the markers table
$result_markers = "SELECT * FROM lugar ";
$resultado_markers = $conexion->query($result_markers);

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<markers>';

// Iterate through the rows, printing XML nodes for each
while ($row_markers = mysqli_fetch_assoc($resultado_markers)){
  // Add to XML document node
  echo '<marker ';
  echo 'nombre="' . parseToXML($row_markers['nombre']) . '" ';
  echo 'direccion="' . parseToXML($row_markers['direccion']) . '" ';
  echo 'latitud="' . $row_markers['latitud'] . '" ';
  echo 'longitud="' . $row_markers['longitud'] . '" ';
  echo 'categoria="' . $row_markers['categoria'] . '" ';
  echo '/>';
}

// End XML file
echo '</markers>';