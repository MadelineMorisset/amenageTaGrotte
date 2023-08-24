<?php 
include ('session_start.php');
include('header_admin.php'); 
?>
<main>
    <div class="">
        <a class="nav-button" href="admin.php">Retour</a>
    </div>
    <?php 
    $query = $db -> prepare('SELECT DISTINCT categorie FROM categorie');
    $query->execute();
    $categorie= $query ->fetchAll(); 
    ?>
    <h1 class="">Ajout d'un article</h1>
    
    <form action="traitement/t_article.php" method="post">
        <section class="">
            <label for="categorie">Catégorie :</label>
            <select name="categorie">
            <?php foreach ($categorie as $cat){ ?>
            <option><?=$cat['categorie']?></option>
            <?php } ?>   
            </select>
            <label for="date" class="">Date :</label>
            <input type="date" name="date">
            <label for="titre" class="">Titre :</label>
            <input type="text" name="titre" >
            <label for="texte" class="">Texte :</label>
            <textarea name="texte"></textarea>
        </section>
        <button type="submit">Ajouter</button>
    </form>
</main>
<?php include('footer_admin.php'); ?>