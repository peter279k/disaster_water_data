<?php
	ini_set("allow_url_include", 1);
	date_default_timezone_set("Asia/Taipei");
	header("Content-type:application/json; charset=utf-8");
	ob_start("ob_gzhandler");
	require "lib/xml_to_json.php";
	
	$file_contents = file_get_contents("http://data.taipei/opendata/datalist/datasetMeta/download?id=961ca397-4a59-45e8-b312-697f26b059dc&rid=190796c8-7c56-42e0-8068-39242b8ec927");
	$xml = simplexml_load_string($file_contents);
	echo Xml2Json($file_contents);
?>