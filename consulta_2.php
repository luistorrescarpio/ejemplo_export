<?php 
include("heasy_mysql.php");
include("lt_export/exportTo.php");

$obj = $_REQUEST;
switch ($obj['action']) {
	case 'exportPDF':
		$r = query("SELECT CONCAT(nombres,' ', apellidos) AS 'fullname', celular, dni FROM personal");

		exportTo("pdf",[
			"data"=>"
				<table border='1' width='100%'>
					<tr>
						<td align='center'>
							<h1>Titulo del Documento</h1>
							<img src='img/Penguins.jpg' width='140'>
						</td>
					</tr>
					<tr>
						<td align='left'>
							<p>Contenido del Documento</p>
						</td>
					</tr>
					<tr>
						<td align='left'>
							<p>TITULAR DE LA LINEA: <b>".$r[0]['fullname']."</b> su celular es ".$r[0]['celular']."</p>
						</td>
					</tr>
					<tr>
						<td align='left'>
							<p>TITULAR DE LA LINEA: <b>".$r[0]['fullname']."</b> su celular es ".$r[0]['celular']."</p>
						</td>
					</tr>
					<tr>
						<td align='left'>
							<p>TITULAR DE LA LINEA: <b>".$r[0]['fullname']."</b> su celular es ".$r[0]['celular']."</p>
						</td>
					</tr>
					<tr>
						<td align='left'>
							<p>TITULAR DE LA LINEA: <b>".$r[0]['fullname']."</b> su celular es ".$r[0]['celular']."</p>
						</td>
					</tr>
				</table>
				
			"
			,"fileName"=>"Reporte de Estudiantes"
			,"config"=>[
				"sequence"=>true
			]
		]);

		break;
	case 'exportExcel':
	
		break;
	case 'exportWord':
	
		break;
}
 ?>