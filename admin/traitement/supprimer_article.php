<?php include('../session_start.php');

if (isset($_GET['id']) AND !empty($_GET['id'])){
    $del = $db -> prepare('DELETE FROM article_blog WHERE id_article= :id');
    $del -> execute([
        'id' => $_GET['id'],
    ]);
}
else {
    die('Erreur');
}
header('Location:../voir_article.php');
?>