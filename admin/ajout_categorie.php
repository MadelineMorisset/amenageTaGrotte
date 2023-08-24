<?php 
include ('session_start.php');
include('header_admin.php'); 
?>
<main>
    <div class="">
        <a class="nav-button" href="admin.php">Retour</a>
    </div>

    <div class="sectionForm">
        <h1>Ajout d'une categorie</h1>
        <form action="traitement/t_categorie.php" method="post" enctype="multipart/form-data" >
            <section class="form-admin">
                <label for="cat" class="">Catégorie : </label>
                <input type="text" name="cat" class="">
                <label for="media" class="">Média :</label>
                <input type="file" name="media">
            </section>
                <button class="button150px35px" type="submit">Ajouter</button>
        </form>
    </div>
</main>
<?php include('footer_admin.php'); ?>