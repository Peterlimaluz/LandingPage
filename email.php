<?php
# alterar a variavel abaixo colocando o seu email

$destinatario = "healthyoudirecionar@outlook.com";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$result = $_REQUEST['result'];
$rb1 = $_REQUEST['rb1'];
$rb2 = $_REQUEST['rb2'];
$rb3 = $_REQUEST['rb3'];
$rb4 = $_REQUEST['rb4'];
$rb5 = $_REQUEST['rb5'];
$rb6 = $_REQUEST['rb6'];
$outro = $_REQUEST['outro'];
$tb1 = $_REQUEST['tb1'];
$tb2 = $_REQUEST['tb2'];
$tb3 = $_REQUEST['tb3'];
$tb4 = $_REQUEST['tb4'];
$tb5 = $_REQUEST['tb5'];

 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "FALE CONOSCO - Email Landing Page" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Telefone: " . $telefone . "\n\n";
$body = $body . "Valor: " . $result . "\n\n";
$body = $body . "Bradesco: " . $rb1 . "\n\n";
$body = $body . "Sulamerica: " . $rb2 . "\n\n";
$body = $body . "Amil: " . $rb3 . "\n\n";
$body = $body . "Intermedica: " . $rb4 . "\n\n";
$body = $body . "Santa Casa SJC: " . $rb5 . "\n\n";
$body = $body . "Outros: " . $rb6 . " Planos: " . $outro . "\n\n";
$body = $body . "De 01 a 20 Vidas: " . $tb1 . "\n\n";
$body = $body . "De 21 a 40: " . $tb2 . "\n\n";
$body = $body . "De 41 a 60: " . $tb3 . "\n\n";
$body = $body . "De 61 a 100: " . $tb4 . "\n\n";
$body = $body . "Acima de 100 Vidas: " . $tb5 . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $nome , $body, "From: $email\r\n");
// Mensagem de Aviso ao Cliente e redirecionamento para a página.
echo "<script>alert('Email enviado com sucesso, em breve será respondido!');location.href=\"http://www.healthyou.com.br\";</script>";


?>