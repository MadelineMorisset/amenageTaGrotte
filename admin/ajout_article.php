<?php 
include ('session_start.php');
include('header_admin.php'); 
?>
<main>
    <div class="">
        <a class="nav-button" href="admin.php">Retour</a>
    </div>
    <?php 
    $query = $db -> prepare('SELECT * FROM categorie');
    $query->execute();
    $categorie= $query ->fetchAll(); 
    ?>
    <div class="sectionForm">
        <h1>Ajout d'un article</h1>
    
        <form action="traitement/t_article.php" method="post">
            <section class="form-admin">
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
            <button class="button150px35px" type="submit">Ajouter</button>
        </form>
    </div>
</main>
<?php include('footer_admin.php'); ?>