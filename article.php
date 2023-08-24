<?php 
include('appelBdd.php');
include('header.php'); 
?>
<main>
<?php
    $query = $db -> prepare('SELECT * FROM categorie WHERE id_categorie = :id');
    $query -> execute([
        'id'=> $_GET['id'],
    ]);
    $categorie = $query ->fetchAll();
        foreach($categorie as $cat){
    ?>

    <div class="title1">
        <h1><?=$cat['categorie']?></h1>
    </div>
    <div class="">
        <a class="button150px35px" href="categorie.php?id=<?=$art['id_categorie']?>">Retour</a>
    </div>
    <?php }
    $query2 = $db -> prepare('SELECT * FROM categorie INNER JOIN article_blog ON categorie.id_categorie = article_blog.id_categorie 
                            WHERE article_blog.id_article = :id');
    $query2 -> execute([
        'id'=> $_GET['id'],
    ]);
    $article = $query2 ->fetchAll();
        foreach($article as $art){
    ?>
     
    
    <section class=""> 
        <h2><?=$art['titre']?></h2>
        <div><?=$art['texte']?></div>
        <?php 
        $query3 = $db -> prepare('SELECT * FROM article_blog INNER JOIN media ON article_blog.id_article = media.id_article 
                                WHERE article_blog.id_article = :id LIMIT 1');
        $query3 -> execute([
            'id'=> $art['id_article'],
        ]);
        $media = $query3 ->fetchAll();
            foreach($media as $med){
        ?>
            <img src="upload/<?=$med['media']?>" alt="illustration de l'article"/>
        <?php } ?>
    </section>
    <?php } ?>
</main>
<?php include('footer.php'); ?>