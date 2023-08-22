<?php 
include ('session_start.php');
include('../header.php'); 
?>
<main>
    <h1 class=""><?php echo 'Bonjour '. $_SESSION['prenom']?></h1>
    <div class="">
        <h2>Ajout d'une categorie</h2>
        <form action="traitement/t_categorie.php" method="post">
            <div class=""> 
                <label for="cat" class="">Catégorie : </label>
                <input type="text" name="cat" class="">
                <label for="media" class="">Média :</label>
                <input type="file" name="media">
            </div>
                <button type="submit">Ajouter</button>
            </div>  
        </form>
</main>
<?php include('../footer.php'); ?>