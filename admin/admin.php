<?php 
include ('session_start.php');
include('header_admin.php'); 
?>
<main>
    <section class="adminPage">
        <div class="title1">
            <h1><?php echo 'Bonjour '. $_SESSION['prenom']?></h1>
        </div>
        <div class="adminSection">
            <div class="title2">
                <h2>Administrateur</h2>
            </div>
            <div class="adminButtons">
                <a class="addButton" href="ajout_admin.php">Ajouter</a>
                <a class="deleteButton" href="voir_admin.php">Modifier</a>
            </div>
        </div>
        <div class="adminSection">
            <div class="title2">
                <h2>Categorie</h2>
            </div>
            <div class="adminButtons">
                <a class="addButton" href="ajout_categorie.php">Ajouter</a>
                <a class="deleteButton" href="voir_categorie.php">Modifier</a>
            </div>
        </div>
        <div class="adminSection">
            <div class="title2">
                <h2>Article</h2>
            </div>
            <div class="adminButtons">
                <a class="addButton" href="ajout_article.php">Ajouter</a>
                <a class="deleteButton" href="voir_article.php">Modifier</a>
            </div>
        </div>
        <div class="adminSection">
            <div class="title2">
                <h2>Média</h2>
            </div>
            <div class="adminButtons">
                <a class="addButton" href="ajout_media.php">Ajouter</a>
                <a class="deleteButton" href="voir_media.php">Modifier</a>
            </div>
        </div>
    </section>
</main>
<?php include('footer_admin.php'); ?>