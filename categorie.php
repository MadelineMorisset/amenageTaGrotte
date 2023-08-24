<?php 
include('appelBdd.php');
include('header.php'); 
?>
<main>
    <div class="">
        <a class="button150px35px" href="index.php">Retour</a>
    </div>
    <?php 
    $query = $db -> prepare('SELECT * FROM categorie WHERE id_categorie = :id');
    $query -> execute([
        'id'=> $_GET['id'],
    ]);
    $categorie = $query -> fetchAll(); 
        foreach($categorie as $cat){?>

    <div class="title1">
        <h1><?=$cat['categorie']?></h1>
    </div>

    <?php } 
    $query2 = $db -> prepare('SELECT * FROM categorie INNER JOIN article_blog ON categorie.id_categorie = article_blog.id_categorie 
                            WHERE categorie.id_categorie = :id');
    $query2 -> execute([
        'id'=> $_GET['id'],
    ]);
    $articles = $query2 ->fetchAll();
        foreach($articles as $artBlog){       
    ?>
  
    <section class="section-category">
        <a class="" href="article.php?id=<?=$artBlog['id_article']?>">
        <?php 
        $query3 = $db -> prepare('SELECT * FROM article_blog INNER JOIN media ON article_blog.id_article = media.id_article 
                                WHERE article_blog.id_categorie = :id LIMIT 1');
        $query3 -> execute([
            'id'=> $artBlog['id_article'],
        ]);
        $medias = $query3 ->fetchAll();
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