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
    $query2 = $db->prepare('UPDATE article_blog SET date_article= :date, titre = :titre, texte = :texte, id_admin = :id_admin, id_categorie= :id_categorie WHERE id_article = :id_article');
    $query2-> execute([
      'date'=> $_POST['date'],
      'titre'=> $_POST['titre'],
      'texte'=>$_POST['texte'],  
      'id_admin'=> $_SESSION['id_admin'],
      'id_categorie'=> $id_categorie,
      'id_article' =>$_POST['postid'],
    ]);
}
header('Location: ../voir_article.php'); 
?>