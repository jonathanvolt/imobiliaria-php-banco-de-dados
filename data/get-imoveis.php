<?php

/* 
Integrantes:
Bruno Tai da Cruz Wong
Gabriel de Melo Faustino Santos
Geraldo Vicente do Nascimento Neto
Igor de Almeida Fernandes Barreira 
Jonathan Bruno Tavares de Oliveira 
Matheus Lui Zago 	
*/

//Credenciais do Banco de Dados
$db = "fatecgrupo4";
$host = "fatecgrupo4.mysql.dbaas.com.br";
$user = "fatecgrupo4";
$senha = "grupo4124";

$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $senha);
$stmt = $pdo->prepare("SELECT * FROM imovel");
$stmt->execute();
$imoveis = $stmt->fetchAll();

echo json_encode($imoveis);