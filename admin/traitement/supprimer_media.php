<?php include('../session_start.php');

if (isset($_GET['id']) AND !empty($_GET['id'])){
    $del = $db -> prepare('DELETE FROM media WHERE id_media= :id');
    $del -> execute([
        'id' => $_GET['id'],
    ]);
}
else {
    die('Erreur');
}
header('Location:../voir_media.php');
?>