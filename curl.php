<?php 
ob_start("ob_gzhandler");
if (str_starts_with($_GET["req"], "/url")) {
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, substr($_GET["req"], 7));
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$rs = curl_exec($curl);
	curl_close($curl);
	echo $rs;
} else {
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $_GET["req"]);
	$rs = curl_exec($curl);
	curl_close($curl);
	echo $rs;
}
ob_end_flush();
?>