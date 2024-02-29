<?php
ob_start("ob_gzhandler");
require "mdl.php";
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>';
echo "<script defer>". file_get_contents("index8m.js"). "</script>";
if (isset($_GET["q"]) && str_starts_with($_SERVER["REQUEST_URI"], "/search")) {
	$headers = array(
    	'Origin: www.google.com',
	);
	$useragent = "Opera/9.80 (J2ME/MIDP; Opera Mini/4.2.14912/870; U; id) Presto/2.4.15";
	$c = curl_init();
	curl_setopt($c, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($c, CURLOPT_USERAGENT, $useragent);
	//curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($c, CURLOPT_FOLLOWLOCATION, TRUE);
	$q = preg_replace("#[^0-9a-z]#i","",$_GET["q"]); 
	curl_setopt($c, CURLOPT_URL, "https://www.google.com/search?hl=en&tbo=d&site=&source=hp&q={$q}");
	curl_exec($c);
	echo "<style>". file_get_contents("index9c.css"). "</style>";
	echo "<script defer>". file_get_contents("index8m.js"). "</script>";
	die();
} else if (isset($_GET["q"]) && str_starts_with($_SERVER["REQUEST_URI"], "/url")) {
	echo "<script>location.href='{$_GET["q"]}'</script>";
}
echo "<style> body {display: flex;justify-content: center;align-items: center;}</style>";
$c = curl_init("https://www.google.com/");
curl_setopt($c, CURLOPT_URL, "https://msue.vercel.app/");
curl_exec($c);
echo "<style>". file_get_contents("index9c.css"). "</style>";
echo "<script defer>". file_get_contents("index8m.js"). "</script>";
?>