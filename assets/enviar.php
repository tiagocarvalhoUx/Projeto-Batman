<?php

$nome = addcslashes($_POST['nome']);
$email = addcslashes($_POST['email']);
$message = addcslashes($_POST['message']);

$para = "eliteprimestoreselite@gmail.com";
$assunto = "coleta de dados";

$corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Message: ".$message;

$cabeca = "From eliteprimestoreselite@gmail.com"."\n"."Reply-to:".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!");
}else{
    echo("Houve um erro ao enviar o email!");
}
?>