<?php 
include ('session_start.php');
include('header_admin.php'); 
?>
<main>
    <div class="">
        <a class="" href="admin.php">Retour</a>
    </div>
    <h1 class=""><?php echo 'Bonjour '. $_SESSION['prenom']?></h1>
    <div class="">
        <h2>Ajout d'une categorie</h2>
        <form action="traitement/t_categorie.php" method="post" enctype="multipart/form-data" >
                <label for="cat" class="">Catégorie : </label>
                <input type="text" name="cat" class="">
                <label for="media" class="">Média :</label>
                <input type="file" name="media">
                <button type="submit">Ajouter</button>
        </form>
</main>
<?php include('footer_admin.php'); ?>