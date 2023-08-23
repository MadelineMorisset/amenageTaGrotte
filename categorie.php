<?php 
include('appelBdd.php');
include('header.php'); 
?>
<main>
    <div class="">
        <a class="button-prev" href="index.php">Retour</a>
    </div>
    <?php
    $query = $db -> prepare('SELECT * FROM categorie INNER JOIN article_blog ON categorie.id_categorie = article_blog.id_categorie 
                            WHERE categorie.id_categorie = :id');
    $query -> execute([
        'id'=> $_GET['id'],
    ]);
    $articles = $query ->fetchAll();
        foreach($articles as $artBlog){       
    ?>
    <div class="title1">
        <h1><?=$artBlog['categorie']?></h1>
    </div>
    <section class="">
        <a class="" href="article.php?id=<?=$artBlog['id_article']?>">
        <?php 
        $query2 = $db -> prepare('SELECT * FROM article_blog INNER JOIN media ON article_blog.id_article = media.id_article 
                                WHERE article_blog.id_categorie = :id LIMIT 1');
        $query2 -> execute([
            'id'=> $artBlog['id_article'],
        ]);
        $medias = $query2 ->fetchAll();
            foreach($medias as $media){
        ?>
            <img src="upload/<?=$media['media']?>" alt="illustration de l'article"/>
        <?php } ?>
            <h2><?=$artBlog['titre']?></h2>
        </a>
    </section>

    <?php } ?>
</main>
<?php include('footer.php'); ?>