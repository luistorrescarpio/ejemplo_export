<?php 
include("heasy_mysql.php");
include("lt_export/exportTo.php");

$obj = $_REQUEST;
switch ($obj['action']) {
	case 'exportPDF':
		$r = query("SELECT CONCAT(nombres,' ', apellidos) AS 'fullname', celular, dni FROM personal");

		exportTo("pdf",[
			"data"=>$r
			,"thead"=>["Nombres Completos","Celular","DNI"]
			,"fileName"=>"ejemplo1"
			,"config"=>[
				"sequence"=>true
			]
		]);

		break;
	case 'exportExcel':
		$r = query("SELECT CONCAT(nombres,' ', apellidos) AS 'fullname', celular, dni FROM personal");
		
		exportTo("excel",[
			"data"=>$r
			,"thead"=>["Nombres Completos","Celular","DNI"]
			,"fileName"=>"ejemplo1"
			,"config"=>[
				"sequence"=>true
			]
		]);
		break;
	case 'exportWord':
		$r = query("SELECT CONCAT(nombres,' ', apellidos) AS 'fullname', celular, dni FROM personal");

		exportTo("word",[
			"data"=>$r
			,"thead"=>["Nombres Completos","Celular","DNI"]
			,"fileName"=>"ejemplo1"
			,"config"=>[
				"sequence"=>true
			]
		]);
		break;
}
 ?>