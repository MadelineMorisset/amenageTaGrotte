<?php include('../session_start.php');

if (isset($_GET['id']) AND !empty($_GET['id'])){
    $del = $db -> prepare('DELETE FROM administrateur WHERE id_admin= :id');
    $del -> execute([
        'id' => $_GET['id'],
    ]);
}
else {
    die('Erreur');
}
header('Location:../voir_admin.php');
?>