{ pkgs }: {
	deps = [
   pkgs.nodejs-16_x
		pkgs.php
    pkgs.phpPackages.composer
	];
}