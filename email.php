<?php

if (isset($_POST['email']) && !empty ($_POST['email'])) {

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);
$numero = addslashes($_POST['number']);
$instagram = addslashes($_POST['instagram']);
$tamanho = addslashes($_POST['size']);
$local = addslashes($_POST['localbody']);
$tempo = addslashes($_POST['time']);
$arquivo = addslashes($_POST['myfile']);


$to = "mauricio@devmau.com.br";
$subject = "QUOTE REQUESTED - BROKESTAR TATTOO";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Instagram: ".$instagram. "\r\n".
        "Numero de telefone: ".$numero. "\r\n".
        "Mensagem: ".$mensagem. "\r\n".
        "Tamanho da tattoo: ".$tamanho. "\r\n".
        "Local do corpo: ".$local. "\r\n".
        "Quando pretente fazer?: ".$tempo. "\r\n".
        "Referências: ".$arquivo ."\r\n";

$header = "From: bot@brokestar.com.br"."\r\n".
            "Reply-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    
    print("QUOTE SENT SUCCESSFULLY. WE WILL CONTACT YOU SOON.");}
    

    else{
        echo("QUOTE CANNOT BE SENT, PLEASE CONTACT US.");
    }
}

