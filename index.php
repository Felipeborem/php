<!DOCTYPE html>
<html>

<head>
	<title>aula 3</title>
</head>

<body>
<h1>essa linha é do html xD</h1>
<?php 
	echo "<p> Essa linha foi escrita no php </p>";

 ?>
 <?php 
 	$a = 5;
 	$a = "cleiton";
 	echo "<h1> Fala tu $a </h1>";
 	$b =  10;
 	$b = $b*50;
 	echo "<p>aceita pix $b</p>";
 	$b = 20/2;
 	$b += 10;
 	$preco = 2.0;
 	$preco *= 0.2;
 	echo "caminhao virou promocao chegou agora por $preco";
 	$preco *100;

     ?>
    // Aula 3: formulario xD//

    //  colocar em acion o arquivo php que vai ser  chamado qundo o usuario
    // submetero furmulario. Aqui eu chamei a propia pagina atual 

      <!-- method:
        get: a informação aparece na URL
        post: informação escondida da URL -->
    
    <form action="index.php" method="get">
        nome: <input type="number" name = "clonacartao">
        <input type="submit" value="enviar">
    <form action="index.php" method="get">
    COLOQUE O NUMERO DO SEU CARTAO PARA SER CLONADO : <input type="text" name = "seguranca">
    <input type="submit" value="enviar">
    </form>
    <?php
        echo  "<p> Obrigado por me dar seu cartao!, ".$_GET["clonacartao"].", seu codigo de seguranca é  "
         .$_GET["seguranca"]."</p>"; 
            
    ?>
      <!-- arrays -->
    <?php
        $alunos = ["felipe", "guilherme", "george"];
        echo "<p> Um mero aluno se demomina $alunos [2] </p>";
        $alunos[3] = "Ze da cambalhota";
        $alunos[] = "irineu";
        $alunos["liderdeturma"] = "capitao america";
        echo "<p> O lider de turma é o $alunos[liderdeturma].</p>";
        echo "<p> Um aluno se chama $alunos[2] </p>";

        // outra forma de cirar array
        $compras = array("feijao", "arroz");
        $notas = array(
            "Felipe" => 8.7,
            "Guilherme" => 7,
        );

    echo "<p> Precisso comprar $compras[1]</p>";
    echo "<p> Guilherme tirou ".$notas["Guilherme"]."</p>";
    $notas["Pedro"] = 7.8;
    array_push($compras, "azeitona", "peixe");
    

    // despeja variavel
    //       (FUNÇAO)
    var_dump($compras);
        // fica bagunçados mesmo
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
        // Remover elementos da array
        var_dump ($compras); echo "<br>";
        unset($compras[6]);
        var_dump($compras); echo "<br> <br>";
        unset($compras[2]);
        // remove o indice 2 e o seu valor. O array continua no mesmo indice
        var_dump($compras); echo "<br> <br>";
        unset($compras[3]);
        var_dump($compras); echo "<br> <br>";
        // o php permite "buracos" nos indices numéricos 
        // quando usa (unset) elimina a chave e o valor.
        // echo $compras[3];


        $compras [] = 5;
        $compras [] = 12132;
        $compras [] = 6.4434;
        $compras [] = 203002;
        var_dump($compras);
        $s = "Faz o l";
        echo $s[0];
        $compras[10][0];


     
        $compras [] = [1, 2, 3, 4, 5];
        var_dump($compras);
        $compras [10][0];



        

        // funçoes para alterar arrays
        // pag 57
        echo "<p> quantidade  de elementos em compras: ";
            count($compras)."<br>";
        echo "<p> quantidade  de elementos em Alunosnotas: ";
            count($notas)."<p>";

        // sort
        // ordena de acordo com os valores e refaz todas as chaves
        sort($compras);
        echo "<p>Sort do compras: <br>";
        foreach ($compras as $key => $value){
            echo "$key: $value <br>";
        }
        echo "<p>";
        // asort arodena pelos valores sem refazer as chaves
        // rsort: reverse sort
        rsort($compras);
        echo "<p>Sort do compras: <br>";
        foreach ($compras as $key => $value){
            echo "$key: $value <br>";
        }
        echo "<p>";





        // 
        // $compras[30] = "carne";
        // var_dump($compras); echo "<br> <br>";

        // $compras[30] = "carne";


        // aula 6 de fato xD
    
        // is set, unset
        $b = 5;
        echo $b;  //funciona
        echo $b;
        unset($b);          //agora dá erro pois $b nao existe 
        echo "$b <br>";
        // inset
        if (isset($str)) {
            echo "existe";
        }
        else {
            echo "nao existe";
        }
        if (isset ($b)) {
            echo "b existe";
        } else {
            echo "b ñ essiste🐱‍🐉🐱‍🐉🐱‍👓🐱‍🐉🐱‍👓🐱‍💻🐱‍🐉";
        }
        // empty

        // empty($a)
        // ngm ussa
        // vai usar se usar "post" [linha 40]
        // ai ela vai ser o usuario enviou mas enviou nada na strink
        // inves de ficar com nada o "empty" verifica e envia alguma mensagem para o usuario
        // if (empty($GET('tag')){
        //     echo "insira um nome verdadeiro";
        // }

        // is_numeric($a)
        // // te responde se eh uma strinh numerica ou ñ
        // echo $a. "<br>";
        // $s = "+231232e2oi1";                                     
        // if (is_numeric($s)) {
        //     echo
        // }

        // declarando funcoes
        function dar_oi() {
            echo "Oi";
            echo "<br>";
        }

        dar_oi();


        function printa_tag($str){
            echo "<p>";
            echo $str;
            echo "</p>";
        }

        // function imptag($str, $tag="p"){
        //     echo "<".$tag.">";
        //     echo $str;
        //     echo "<".$tag.">";
        // }

        $texto = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa optio neque esse. Assumenda,
         commodi facere officiis magnam, veritatis expedita excepturi quod ea laudantium facilis non cum molestias
          provident incidunt ratione!";

        // Passando a variavel $texto para  a funcao imptag 
        imptag($texto, $str);

        // passando a string para diretamente como argumento a funçao
        imptag("oi gente blz?", $str);
        ?>
        <h3>Argumentos padrao</h3>
        <?php
        function imptag($str, $tag ="p"){
                echo "<".$tag.">";
                echo $str;
                echo "<".$tag.">";

                $str_montada = "<".$tag.">" .$str. "</" .$tag. ">";
        }
        // criando uma funcao que coloca dois 
        function returntag($str, $tag= "p"){
            $str_montada = "<".$tag.">";
            $str_montada .= $str;
            $str_montada .= "</".$tag.">";
            return $str_montada;
        }

        echo returntag("oi gente, eu sou um heading, 4 formatado "
        , "h4"); //A funçao agora nao da echo, so retorna a string montada 


        $alunos = ["amanda". "felipe", "D.pedro II"];
        $notas = [2.4,          10,            6];
        function temrecuperacao($notas){
            foreach ($notas as $key => $value){
                if ($value < 7) { // se um for verdade ele da o return
                                 //e isso interrompe a execução da função
                    return true;
                }
            }
            return false;
        }
        if (temrecuperacao($notas)) {
            imptag("essa turma tem alunos em recuprecaçao");
        }
        else {
            imptag("essa turma tem 0 alunos em recuprecaçao");
        }
        $notas[1] += 2;
        if (temrecuperacao($notas)){
            imptag("essa turma tem alunos em recuprecaçao");
        }
        else {
            imptag("essa turma tem 0 alunos em recuprecaçao");
        }
 ?>
        <h2> Acessando variaveis globais</h2>
        <h3>variaveis locais sao as mesmas que usamos dentro da declaracao de uma funcao, elas so existem la dentro</h3>
        <h3>Ja as globais podem ser acessadas fora de uma funcao</h3>
 <h4>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------</h4>
        <h3>paremetros de referencia</h3>
        <h4>passar para a funcao: a propia funcao: a propia variavel (uma referencia a uma variavel), e nao mais precissar so o seu valor</h4>
<?php
            function addtag(&$str, $tag="p"){
                $str = "<".$tag.">".$str. "</".$tag. ">";
            }

            echo "<p> Variavel texto antes:    </p>"; echo $texto;
            addtag($texto, "h1"); // essa funcao mudifica direto    na variavel texto
            echo "<p> variavel de texto depois </p>";
            echo $texto;
        
            // echo $texto [0]; echo $texto [1]; echo $texto [2]; echo $texto [3]; echo $texto [4];
            
        echo ("global");
        echo ("permite usar a variavel global dentro da funcao ");
        
        function add_tag_to_texto($tag = "p"){
            global $texto;
            $texto = "<".$tag.">".$texto."</".$tag.">";
        }
        $texto = "Lorem ipsum dolor sit amet
         consectetur adipisicing elit. 
        Similique nam eligendi sit recusandae 
        ratione sunt voluptates, modi alias 
        iste aspernatur eos consectetur necessitatibus!
         Est cum eligendi alias
         delectus. Obcaecati, voluptatem.";

         add_tag_to_texto();
         echo $texto;

         echo "recapitulando";
         
         $texto2 = "Pao com macarrao é bom (ﾉ◕ヮ◕)ﾉ*:･ﾟ✧";

        imptag($texto2);

        echo returntag($texto2);

        addtag($texto2); echo $texto2;


         function add_tag_to_texto2($tag = "p"){
            global  $texto2;
            $texto2 = "<".$tag.">".$texto2."</".$tag.">";
         }
         add_tag_to_texto2(); echo $texto2;

// O que o include faz é executar todo o arquivo php, incluindo colocar as partes HTML e executar os comandos PHP

        // echo "incluir arquivos de fora";
        // include ("../aula 7/index.php");

imptag("preco de entes era:   ").$preco;
include("../aula 7/index.php");
imptag("agora que o caminhao virou o preco ficou:  " .$preco);  

// Erro no include pode ser grave por vc vai querer usar funções e variáveis que não existem, 
//por isso existe o require. O require interrompe e execução do código se a inclusão falhar.

include("../aula 7/index.php");
imptag("Essa linha foi escrita de outro arquivo");

include_once("funcoes.php");
require_once("funcoes.php");
imptag("aqui as linhas acima nao fazem nada pq ja inclui o funcoes.php");


// Mas o usual é usar o include() só para importar funções. Para isso é só criar um php externo contendo apenas declarações de funções.

?>
<h1>Criando classes e objetos</h1>
<?php

    // include("..aula 8/index.php") Ja copiei o codigo xD



































?>











































































































<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p><br>
░░░░░░░░░░░░▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄░░░░░░░░░░░░<br>
░░░░░▄▄▄▄█▀▀▀░░░░░░░░░░░░▀▀██░░░░░░░░░░<br>
░░▄███▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄█▄▄▄░░░░░░<br>
▄▀▀░█░░░░▀█▄▀▄▀██████░▀█▄▀▄▀████▀░░░░░░<br>
█░░░█░░░░░░▀█▄█▄███▀░░░░▀▀▀▀▀▀▀░▀▀▄░░░░<br>
█░░░█░▄▄▄░░░░░░░░░░░░░░░░░░░░░▀▀░░░█░░░<br>
█░░░▀█░░█░░░░▄░░░░▄░░░░░▀███▀░░░░░░░█░░<br>
█░░░░█░░▀▄░░░░░░▄░░░░░░░░░█░░░░░░░░█▀▄░<br>
░▀▄▄▀░░░░░▀▀▄▄▄░░░░░░░▄▄▄▀░▀▄▄▄▄▄▀▀░░█░<br>
░█▄░░░░░░░░░░░░▀▀▀▀▀▀▀░░░░░░░░░░░░░░█░░<br>
░░█░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░▄██░░░<br>
░░▀█▄░░░░░░░░░░░░░░░░░░░░░░░░░▄▀▀░░░▀█░<br>

</p>
<p>░░░░▄▄▄▄▀▀▀▀▀▀▀▀▄▄▄▄▄▄<br>
░░░░█░░░░▒▒▒▒▒▒▒▒▒▒▒▒░░▀▀▄<br>
░░░█░░░▒▒▒▒▒▒░░░░░░░░▒▒▒░░█<br>
░░█░░░░░░▄██▀▄▄░░░░░▄▄▄░░░█<br>
░▀▒▄▄▄▒░█▀▀▀▀▄▄█░░░██▄▄█░░░█<br>
█▒█▒▄░▀▄▄▄▀░░░░░░░░█░░░▒▒▒▒▒█<br>
█▒█░█▀▄▄░░░░░█▀░░░░▀▄░░▄▀▀▀▄▒█<br>
░█▀▄░█▄░█▀▄▄░▀░▀▀░▄▄▀░░░░█░░█<br>
░░█░░▀▄▀█▄▄░█▀▀▀▄▄▄▄▀▀█▀██░█<br>
░░░█░░██░░▀█▄▄▄█▄▄█▄████░█<br>
░░░░█░░░▀▀▄░█░░░█░███████░█<br>
░░░░░▀▄░░░▀▀▄▄▄█▄█▄█▄█▄▀░░█<br>
░░░░░░░▀▄▄░▒▒▒▒░░░░░░░░░░█<br>
░░░░░░░░░░▀▀▄▄░▒▒▒▒▒▒▒▒▒▒░█<br>
░░░░░░░░░░░░░░▀▄▄▄▄▄░░░░░█<br>

░░░░░░░░░░░░░░░░░░░░░▄▀░░▌<br>
░░░░░░░░░░░░░░░░░░░▄▀▐░░░▌<br>
░░░░░░░░░░░░░░░░▄▀▀▒▐▒░░░▌<br>
░░░░░▄▀▀▄░░░▄▄▀▀▒▒▒▒▌▒▒░░▌<br>
░░░░▐▒░░░▀▄▀▒▒▒▒▒▒▒▒▒▒▒▒▒█<br>
░░░░▌▒░░░░▒▀▄▒▒▒▒▒▒▒▒▒▒▒▒▒▀▄<br>
░░░░▐▒░░░░░▒▒▒▒▒▒▒▒▒▌▒▐▒▒▒▒▒▀▄<br>
░░░░▌▀▄░░▒▒▒▒▒▒▒▒▐▒▒▒▌▒▌▒▄▄▒▒▐<br>
░░░▌▌▒▒▀▒▒▒▒▒▒▒▒▒▒▐▒▒▒▒▒█▄█▌▒▒▌<br>
░▄▀▒▐▒▒▒▒▒▒▒▒▒▒▒▄▀█▌▒▒▒▒▒▀▀▒▒▐░░░▄<br>
▀▒▒▒▒▌▒▒▒▒▒▒▒▄▒▐███▌▄▒▒▒▒▒▒▒▄▀▀▀▀<br>
▒▒▒▒▒▐▒▒▒▒▒▄▀▒▒▒▀▀▀▒▒▒▒▄█▀░░▒▌▀▀▄▄<br>
▒▒▒▒▒▒█▒▄▄▀▒▒▒▒▒▒▒▒▒▒▒░░▐▒▀▄▀▄░░░░▀<br>
▒▒▒▒▒▒▒█▒▒▒▒▒▒▒▒▒▄▒▒▒▒▄▀▒▒▒▌░░▀▄<br>
▒▒▒▒▒▒▒▒▀▄▒▒▒▒▒▒▒▒▀▀▀▀▒▒▒▄▀<br>
</p><br>
<br>









</body>
</html>










