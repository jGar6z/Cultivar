<?php

if(isset($_POST['name']) $$ !empty($_POST['email'])) {

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);


$to = "example@email.com";
$subject = "Contato pelo Formulário = Cultivar";
$body = "Nome: ".$nome. "\r\n"
        "Email: ".$email. "\r\n"
        "Mensagem: ".$message;
$header = "From:emailQueEstáNoDomínioDoSite"."\r\n".
            ."Reply-To:".$email."\e\n".
            ."x=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso!");

}else {
    echo("O email não pode ser enviado");
}

}
 
?>