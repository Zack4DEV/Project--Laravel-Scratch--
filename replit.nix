{ pkgs }: {
	deps = [
   pkgs.sqlite.bin
		pkgs.nodejs-18_x
   	pkgs.php80Packages.composer
		pkgs.php82
	];
}