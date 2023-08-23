<?php 
include ('session_start.php');
include('header_admin.php'); 
?>
<main>
    <h1 class=""><?php echo 'Bonjour '. $_SESSION['prenom']?></h1>
    <div class="">
        <h2>Modifier un article</h2>

        <?php 
        $query = $db -> prepare('SELECT * FROM article_blog INNER JOIN categorie ON article_blog.id_categorie = categorie.id_categorie WHERE id_article = :id');
        $query->execute([
            'id'=> $_GET['id'],
        ]);
        $article = $query ->fetchAll();
            foreach ( $article as $art){ ?>
        <form action="traitement/t_modifArticle.php" method="post">
            <div class=""> 
                <label for="categorie" class="">Catégorie : </label>
                <input type="text" name="categorie" value="<?=$art['categorie']?>">
                <label for="date" class="">Date :</label>
                <input type="date" name="date" value="<?=$art['date_article']?>">
                <label for="titre" class="">Titre :</label>
                <input type="text" name="titre" value="<?=$art['titre']?>">
                <label for="texte" class="">Texte :</label>
                <textarea name="texte"><?=$art['texte']?></textarea>
                <button type="submit" class="">Modifier</button>
                <input type="hidden" name="postid" value="<?=$art['id_article']?>"/>
            </div>  
        </form>
        <?php } ?>
</main>
<?php include('footer_admin.php'); ?>