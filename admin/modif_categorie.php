<?php 
include ('session_start.php');
include('header_admin.php'); 
?>
<main>
    <h1 class=""><?php echo 'Bonjour '. $_SESSION['prenom']?></h1>
    <div class="">
        <h2>Modifier une catégorie</h2>

        <?php 
        $query = $db -> prepare('SELECT * FROM categorie WHERE id_categorie = :id');
        $query->execute([
            'id'=> $_GET['id'],
        ]);
        $categorie = $query ->fetchAll();
            foreach ( $categorie as $cat ){ ?>
        <form action="traitement/t_modifCategorie.php" method="post">
            <div class=""> 
                <label for="categorie" class="">Catégorie : </label>
                <input type="text" name="categorie" value="<?=$cat['categorie']?>">
                <button type="submit" class="">Modifier</button>
                <input type="hidden" name="postid" value="<?=$cat['id_admin']?>"/>
            </div>  
        </form>
        <?php } ?>
</main>
<?php include('footer_admin.php'); ?>