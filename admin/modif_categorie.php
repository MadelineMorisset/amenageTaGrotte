<?php 
include ('session_start.php');
include('header_admin.php'); 
?>
<main>
    <div class="">
        <a class="" href="voir_categorie.php">Retour</a>
    </div>
    
    <div class="sectionForm">
        <h1>Modifier une catégorie</h1>

        <?php 
        $query = $db -> prepare('SELECT * FROM categorie WHERE id_categorie = :id');
        $query->execute([
            'id'=> $_GET['id'],
        ]);
        $categorie = $query ->fetchAll();
            foreach ( $categorie as $cat ){ ?>
        <form action="traitement/t_modifCategorie.php" method="post" enctype="multipart/form-data">
            <div class="form-admin"> 
                <label for="categorie" class="">Catégorie : </label>
                <input type="text" name="categorie" value="<?=$cat['categorie']?>">
                <label for="media" class="">Média :</label>
                <img class="" src="../upload/<?=$cat['media']?>" alt="média"/>
                <input type="file" name="media" value="<?=$cat['media']?>">
                <input type="hidden" name="oldimage" value="<?=$cat['media']?>"/>
                <label for="media-delete" class="">Supprimer</label>
                <input type="checkbox" name="media-delete" value="../upload/<?=$cat['media']?>">
                <button type="submit" class="">Modifier</button>
                <input type="hidden" name="postid" value="<?=$cat['id_admin']?>"/>
            </div>  
        </form>
        <?php } ?>
    </div>
</main>
<?php include('footer_admin.php'); ?>