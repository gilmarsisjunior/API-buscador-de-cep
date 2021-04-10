<?php 
//faz o request com a api
if (isset($_POST['cep'])) {
$cep = $_POST['cep'];
$url = "https://viacep.com.br/ws/{$cep}/json/";
$content = file_get_contents($url);
$json = json_decode($content, true);

$logradouro = $json['logradouro'];
$ddd = $json['ddd'];


//valida cep 
if (strlen($cep) != 8) {
    header ("location: index.php");
}
}

?>