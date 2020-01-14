<?php
	if (!empty($_GET["attendance_file_name"])) {
		$fileName = basename($_GET["attendance_file_name"]);
		$filePath = "phpSpreadsheet/samples/Reader/sampleData/".$fileName;
		
		if (!empty($fileName) && file_exists($filePath)) {
			header("Cache-Control: public");
			header("Content-Description: File Transfer");
			header("Content-Disposition: attachment; filename=$fileName");
			header("Content-Type: application/zip");
			header("Content-Transfer-Encoding: binary");
			
			readfile($filePath);
			exit;
		}
	}
	
?>
