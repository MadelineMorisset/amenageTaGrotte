<?php 
include ('session_start.php');
include('../header.php'); 
?>
<main>
    <h1 class=""><?php echo 'Bonjour '. $_SESSION['prenom']?></h1>
    <div class="">
        <h2>Administrateur</h2>
        <a class="" href="ajout_admin.php">Ajouter</a>
        <a class="" href="voir_admin.php">Modifier</a>
    </div>
    <div class="">
        <h2>Categorie</h2>
        <a class="" href="ajout_categorie.php">Ajouter</a>
        <a class="" href="voir_categorie.php">Modifier</a>
    </div>
    <div class="">
        <h2>Article</h2>
        <a class="" href="ajout_article.php">Ajouter</a>
        <a class="" href="voir_article.php">Modifier</a>
    </div>
    <div class="">
        <h2>Média</h2>
        <a class="" href="ajout_media.php">Ajouter</a>
        <a class="" href="voir_media.php">Modifier</a>
    </div>
</main>
<?php include('../footer.php'); ?>