<?php include('connection.php') ?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $produtoId = $_POST['produto_id'];

        var_dump($produtoId);
            
        $query = 'UPDATE produtos SET Selecionado = 1 WHERE Id = :produto_id';
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':produto_id',$produtoId);
        $stmt->execute();
        //header('Location:instrumentos_detalhes.php');
    }
?>