
<?php
if(!empty($_GET['nome'])) $nome = $_GET['nome'];
else $nome = null;
echo $nome;

if(!empty($_GET['apelido'])) $apelido = $_GET['apelido'];
else $apelido = null;
echo $apelido;

if(!empty($_GET['contacto'])) $contacto = $_GET['contacto'];
else $contacto = null;
echo $contacto;

if(!empty($_GET['email'])) $email = $_GET['email'];
else $email = null;
echo $email;

if(!empty($_GET['morada'])) $morada = $_GET['morada'];
else $morada = null;
echo $morada;

if(!empty($_GET['codigopostal'])) $codigopostal = $_GET['codigoPostal'];
else $codigopostal = null;
echo $codigopostal;

if(!empty($_GET['localidade'])) $localidade = $_GET['localidade'];
else $localidade = null;
echo $localidade;

if(!empty($_GET['nif'])) $nif = $_GET['nif'];
else $nif = null;
echo $nif;

if(!empty($_GET['compraId'])) $compraId = $_GET['compraId'];
else $compraId = null;
echo $compraId;



include('connection.php');


$query = "INSERT INTO compras(compra_id, nome)  VALUES(:C, :N)";
$stmt = $dbh->prepare($query);
$stmt->bindValue(':C', $compraId);
$stmt->bindValue(':N', $nome);
$stmt->execute();
