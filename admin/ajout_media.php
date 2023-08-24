<?php 
include ('session_start.php');
include('header_admin.php'); 
?>
<main>
    <div class="">
        <a class="nav-button" href="admin.php">Retour</a>
    </div>
    <?php 
    $query = $db -> prepare('SELECT titre FROM article_blog');
    $query->execute();
    $blog= $query ->fetchAll(); 
    ?>
    <div class="sectionForm">
        <h1>Ajout d'un média</h1>
        
        <form action="traitement/t_media.php" method="post" enctype="multipart/form-data">
            <section class="form-admin">
                <label for="article">Article :</label>
                <select name="article">
                <?php foreach ($blog as $article){ ?>
                <option><?=$article['titre']?></option>
                <?php } ?>   
                </select>
                <label for="media" class="">Média :</label>
                <input type="text" name="media" >
            </section>
            <button class="button150px35px" type="submit">Ajouter</button>
        </form>
    </div>
</main>
<?php include('footer_admin.php'); ?>