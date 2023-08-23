<?php include('../session_start.php');

if(isset($_POST['categorie']) && !empty($_POST['categorie'])) {
    $query = $db->prepare('SELECT * FROM categorie WHERE categorie = :categorie');
    $query->execute([
        'categorie' => $_POST['categorie']
    ]);
    $id = $query->fetchAll();
        foreach($id as $id_cat){
            $id_categorie = $id_cat['id_categorie'];
        }
    $query2 = $db->prepare('INSERT INTO article_blog (date_article, titre, texte, id_admin, id_categorie) 
                    VALUES(:date_article, :titre, :texte, :id_admin, :id_categorie)');
$query2->execute([
    'id_categorie' => $id_categorie,
    'date_article' => $_POST['date'],
    'titre' => $_POST['titre'],
    'texte' => $_POST['texte'],
    'id_admin' => $_SESSION['id_admin'], 
    ]);
}
header('Location: ../voir_article.php');