<?php 


//o contato vai para o e-mail
$para = "marthiweb@gmaiil.com";

//o assunto do e-mail será
$assunto = "CONTATO PELO SITE";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$mensagem = $_REQUEST['mensagem'];

//concatena as informações em apenas 1 variável
$corpo = "<h1>Contato pelo site</h1>";
$corpo .= "<strong>Mensagem de: </strong>". $nome ."<br><br>";
$corpo .= "<strong>Email: </strong>". $email ."<br>";
$corpo .= "<strong>Telefone: </strong>". $telefone ."<br><br>";
$corpo .= "<strong>Mensagem: </strong>". $mensagem;


$header = "From: $email Reply-to: $email";
$header .= "Content-Type: text/html; charset= utf-8";


mail($para, $assunto, $corpo, $header);

header("location:index.php?envio=enviado");

//echo $corpo;
/*
echo "<h1>Nome: " . $nome . "</h1>";
echo "<h2>E-mail: " . $email . "</h2>";
echo "<h2>Telefone: " . $telefone . "</h2>";
echo "<p>Mensagem: " . $mensagem . "</p>";
*/

 ?>