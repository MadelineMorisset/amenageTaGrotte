<?php include('../session_start.php');

    $query = $db->prepare('INSERT INTO article_blog (date_article, titre, texte, id_admin) 
                    VALUES(:date_article, :titre, :texte, :id_admin)');
$query->execute([
    'categorie' => $_POST['categorie'],
    'date_article' => $_POST['date'],
    'titre' => $_POST['titre'],
    'texte' => $_POST['texte'],
    'id_admin' => $_SESSION['id_admin'], 
    ]);

header('Location: ../voir_article.php');