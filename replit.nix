{ pkgs }: {
	deps = [
    (pkgs.php81.buildEnv {
      extensions = { all, ... }: with all; [ yaml swoole curl];
    	extraConfig = "
        error_reporting=Off
		opcache.enable=0
		allow_url_include=0
      ";
    })

    pkgs.php81.extensions.curl
    pkgs.php81.extensions.yaml
    pkgs.php81.extensions.swoole
    pkgs.php81.packages.composer
    
	];
}