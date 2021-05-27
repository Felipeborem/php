<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<hr>
<?php 
include("funcoes.php"); imp("funcionou xD", );
?>
<h1> readfile(file.txt)</h1>
<!-- ela abre e imprime um arquivo  -->

<?php 
	echo "<p>";
	readfile("file.txt");
	echo "<p>";
		
?>
<?php  
	echo "<p>";
	$rf = readfile("file.txt");
	echo "<p>";
	imp($rf);
	// vai mostrar o n° de Caracteres 
 ?>
	<hr>
	<p>A funaco readfile() ja imprime o arquivo todo e retorna so o n° de bytes (Caracteres) lidos.</p>
	<h1>fopen() e seus colegas xD</h1>
	<p>Com o fopen eu consigo pegar o conteudo do arquivo em uma string</p>


<?php 
	$arq = fopen("file.txt", "r");
	$conteudo_doarq = fread($arq, 34);
	imp($conteudo_doarq); 
	fclose($arq);
	 ?>
	<hr>
	<p>A funçãp fgets() lê uma linha do arquivo</p>	
	 <?php 

	 	$arq = fopen("file.txt", "r");
	 	imp(fgets($arq));
	 	// imp(fread($arq, 4)); 
	 	// imp(fread($arq, 4)); 
	 	// imp(fread($arq, 4)); 
		imp(fgets($arq));
		imp(fgets($arq));


	 	fclose($arq);

  ?>
<h2>Um jeito supimpa de imprimir um arquivo de texto</h2>
<?php 
	$arq = fopen("file.txt", "r");
	while(!feof($arq) ){ //repete ate o final do arquivo
		imp(fgets($arq));
	}
	fclose($arq);

 ?>
<h2>exemplo usando o fopen() no modo "a"</h2>
<hr>
<?php 
	$arq = fopen("file.txt", "a");
	fwrite($arq, "Faz o S de sextou 😵");
	echo "<p>";
	fclose($arq);


 ?>



</body>
</html>