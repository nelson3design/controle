<?php

include 'config.php';

$nome= filter_input(INPUT_POST, 'nome');
$nome2 = filter_input(INPUT_POST, 'nome2');

$marca = filter_input(INPUT_POST, 'marca');

$valor = filter_input(INPUT_POST, 'valor');

$sql=$pdo->prepare('INSERT INTO pro (nome, valor) VALUES (:nome, :valor)');

$sql->bindValue(':nome', $nome);
$sql->bindValue(':valor', $valor);
// $sql->execute();

if($sql->execute()){
    if($nome2 === $nome2){

        $sql = $pdo->prepare('INSERT INTO cate (nome,valor) VALUES (:nome,:valor)');
    
        $sql->bindValue(':nome', $nome2);
        $sql->bindValue(':valor', $valor);
        $sql->execute();

    }
    

    if ($marca === $marca) {
        $sql = $pdo->prepare('INSERT INTO marca (nome,valor) VALUES (:nome, :valor)');

        $sql->bindValue(':nome', $marca);
        $sql->bindValue(':valor', $valor);
        $sql->execute();
    }
    
   
}else{
    return false;
}
header("location: index.php");

  

?>


