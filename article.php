<?php 
include('appelBdd.php');
include('header.php'); 
?>
<main>
    <div class="">
        <a class="button-prev" href="categorie.php">Retour</a>
    </div>
    <?php
    $query = $db -> prepare('SELECT * FROM categorie INNER JOIN article_blog ON categorie.id_categorie = article_blog.id_categorie 
                            WHERE article_blog.id_article = :id');
    $query -> execute([
        'id'=> $_GET['id'],
    ]);
    $article = $query ->fetchAll();
        foreach($article as $art){
    ?>
    <div class="title1">
        <h1><?=$art['categorie']?></h1>
    </div>
    <section class=""> 
        <h2><?=$art['title']?></h2>
        <div><?=$art['texte']?></div>
        <?php 
        $query2 = $db -> prepare('SELECT * FROM article_blog INNER JOIN media ON article_blog.id_article = media.id_article 
                                WHERE article_Blog.id_categorie = :id');
        $query2 -> execute([
            'id'=> $art['id_article'],
        ]);
        $media = $query ->fetchAll();
            foreach($media as $med){
        ?>
            <img src="upload/<?=$med['media']?>" alt="illustration de l'article"/>
        <?php } ?>
    </section>
    <?php } ?>
</main>
<?php include('footer.php'); ?>