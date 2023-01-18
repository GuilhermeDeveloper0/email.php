<?php

if(isset($_POST['email'])) && !empty($_POST(['email'])){

$nome = addcslashes($_POST(['name']))
$email = addcslashes($_POST(['email']))
$nome = addcslashes($_POST(['message']))

}

$to = "guilherme.edmilson44@gmail.com"
$subject = "contato - contrato programador"
$body = "Nome: ".$nome "\r\n".
        "Email: ".$email "\r\n".
        "Mensagem: ".$mensagem;
$header = "guilherme.edmilson44@gmail.com"."\r\n" 
        ."Replay-to:".$email "\e\n".
        ."X-Mailer:PHP/".phpversion();

if(mail($to,$subject,$Body,$header))



?>