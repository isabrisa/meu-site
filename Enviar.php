<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);
$data = addslashes ($_POST['data']);
$cpf = addslashes ($_POST['cpf']);

$para = "isatocolima94@gmail.com";
$assunto = "Coleta de Dados - Zacimba";

$corpo = "Nome: ". $nome. "\n". "Email: ". $email. "\n". $telefone;

$cabeca = "From: isabelaconta80@gmail.com"."\n"."Reply-to: ".$email."\n"."X-Mailer:PHP/".phpversion();

if(mail($para, $assunto, $corpo, $cabeca)){
    echo("E-mail enviado com sucesso");
}else{
    echo("Houve um erro ao enviar o e-mail!");
}

?>