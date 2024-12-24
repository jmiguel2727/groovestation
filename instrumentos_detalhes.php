<?php 
if(empty($_GET['Id'])){
    header('Location:guitarras.php');
    header('Location:teclados.php');
    header('Location:baterias.php');
    header('Location:sopros.php');
    header('Location:tradicionais.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrumento Detalhes</title>

    <?php include('includes/linkscss.php') ?>
</head>
<body>   
    
    <?php include('includes/header.php') ?>
    <?php include('includes/connection.php') ?>

    <?php 
        $id = $_GET['Id'];
        $sql = 'SELECT * FROM produtos WHERE Id = :Id';
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':Id', $id);
        $stmt->execute();
    ?>

    <?php 
        if($stmt && $stmt->rowCount() == 1){
            $produto = $stmt->fetchObject();
            $imagem = filter_var($produto->Imagem, FILTER_VALIDATE_URL) !== false ? $produto->Imagem : 'imagens/instrumentos/'.$produto->Imagem;
        }
    ?>

    <!-- Instrumento Detalhes -->
    <div class="container text-center mt-5">
        <h1 style="font-size: 2.2rem;"><?= $produto->Nome ?></h1>
    </div>

    <main class="container mt-1">
        <div class="p-3 rounded">

            <div class="row">
                <div class="col-md-8 col-lg-8 mb-4">
                    <div class="card ">
                        <img alt="<?= $produto->Nome ?>" class="card-img-top" src="<?= $imagem ?>">  
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 mb-4">
                    <div class="card ">
                        <div class="card-body text-center">
                            <p class="card-text" style="font-size: 1.2rem;"><?= $produto->Descricao ?></p>
                            <p class="card-text detalhes-preco text-center"><?= $produto->Preco ?> € </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include('includes/footer.php') ?>     

</body>
</html>

