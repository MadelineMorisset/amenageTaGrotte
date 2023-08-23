<?php include('../session_start.php');

if (isset($_GET['id']) AND !empty($_GET['id'])){
    $del = $db -> prepare('DELETE FROM categorie WHERE id_categorie= :id');
    $del -> execute([
        'id' => $_GET['id'],
    ]);
}
else {
    die('Erreur');
}
header('Location:../voir_categorie.php');
?>