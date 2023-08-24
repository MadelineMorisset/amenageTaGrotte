<?php 
include('appelBdd.php');
include('header.php'); 
?>
<main>
    <?php 
    $query = $db -> prepare('SELECT * FROM categorie INNER JOIN article_blog ON categorie.id_categorie = article_blog.id_categorie 
                            WHERE article_blog.id_article = :id');
    $query -> execute([
        'id'=> $_GET['id'],
    ]);
    $article = $query ->fetchAll();
        foreach($article as $art){
    ?>
     <div class="">
        <a class="button150px35px" href="categorie.php?id=<?=$art['id_categorie']?>">Retour</a>
    </div>
    
    <section class=""> 
        <h2><?=$art['titre']?></h2>
        <div><?=$art['texte']?></div>
        <?php 
        $query2 = $db -> prepare('SELECT * FROM article_blog INNER JOIN media ON article_blog.id_article = media.id_article 
                                WHERE article_blog.id_article = :id');
        $query2 -> execute([
            'id'=> $_GET['id'],
        ]);
        $media = $query2 ->fetchAll();
            foreach($media as $med){
        ?>
            <img src="upload/<?=$med['media']?>" alt="illustration de l'article"/>
        <?php } ?>
    </section>

    <section>
        <div>
            <p>Commentaires</p>
        </div>
        <?php 
        $query3 = $db -> prepare('SELECT * FROM commentaire WHERE id_article = :id');
        $query3 -> execute([
            'id'=> $_GET['id'],
        ]);
        $commentaire = $query3 ->fetchAll();
            foreach($commentaire as $com){
        ?>
        <div>
            <p><?= $com['date_commentaire']?></p>
            <p><?=$com['nom']?> :</p>
            <p><?=$com['commentaire']?></p>    
        </div>
        <?php } ?>
    </section> 
 
    <section>
        <h3>Laisser un commentaire</h3>
        <p>Votre adresse e-mail ne sera pas publiée. Tous les champs sont obligatoires.</p>

        <form method="post" action="admin/traitement/t_commentaire.php">
            <input type="hidden" name="date_com" value="<?php echo date('Y-m-d')?>" />
            <label for="com" class="">Commentaire : </label>
            <textarea name="com" class=""></textarea>
            <label for="nom" class="">Nom:</label>
            <input type="text" name="nom">
            <label for="mail" class="">E-mail : </label>
            <input type="email" name="mail">
            <input type="hidden" name="postid" value="<?=$_GET['id']?> "/>
            <button type="submit">Laisser un commentaire</button>   
    </section>
    <?php } ?>
</main>
<?php include('footer.php'); ?>