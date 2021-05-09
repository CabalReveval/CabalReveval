<?php
	session_start();
	$valor_um				=	rand(2, 20);
	$valor_dois				=	rand(2, 99);
	$valor_tres				=	rand(2, 99);
	$fundo_rand				=	rand(0, 20);
	$fonts_rand				=	rand(1, 25);
	$position_rand			=	rand(1, 7);
	$calc					=	$valor_um * $valor_dois + $valor_tres;
	$_SESSION["imgCpch"]	=	$calc;

	$imagemCaptcha			=	imagecreatefrompng("img/" . $fundo_rand . ".png");
	$fonteCaptcha			=	imageloadfont("fontes/" . $fonts_rand . ".gdf");
	$corCaptcha				=	imagecolorallocate($imagemCaptcha,11,19,20);
	imagestring($imagemCaptcha,$fonteCaptcha,$valor_um,$position_rand,$valor_um . "*" . $valor_dois . "+" . $valor_tres,$corCaptcha);	

	header("Content-type: image/png");
	imagepng($imagemCaptcha);
	imagedestroy($imagemCaptcha);
?>