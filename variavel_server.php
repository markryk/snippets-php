<?php
	echo "Conteudo da variável \$_SERVER: ";
	$arquivo = 'Variavel Server de '.$_SERVER['REMOTE_ADDR'].' e '.$_SERVER['SERVER_ADDR'].'.php';
	echo "<pre>";
	print_r($_SERVER);
	echo "</pre>";
	$json = "";
	foreach ($_SERVER as $param => $value)  {
		$json .= "$param: ". $value."\n\n";
		$file = fopen(__DIR__.'/'.$arquivo, 'w');
		//print_r($_SERVER);
		fwrite($file, $json);
	}
	echo "Arquivo criado, verifique na pasta.";
	fclose($file);
?>