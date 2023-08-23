<?php include('../session_start.php'); 

if (isset($_POST['categorie']) AND !empty($_POST['categorie'])){
    $query = $db->prepare('UPDATE categorie SET categorie = :categorie WHERE id_admin= :id');
    $query-> execute([
        'categorie' => $_POST['categorie'],
        'id'=>$_POST['postid'],
    ]);
}  
header('Location: ../voir_categorie.php?');