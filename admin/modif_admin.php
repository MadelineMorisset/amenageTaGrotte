<?php 
include ('session_start.php');
include('header_admin.php'); 
?>
<main>
    <h1 class=""><?php echo 'Bonjour '. $_SESSION['prenom']?></h1>
    <div class="">
        <h2>Ajout d'un article</h2>

        <?php 
        $query = $db -> prepare('SELECT * FROM administrateur WHERE id_admin = :id');
        $query->execute([
            'id'=> $_GET['id'],
        ]);
        $administrateur = $query ->fetchAll();
            foreach ( $administrateur as $admin ){ ?>
        <form action="traitement/t_modifAdmin.php" method="post">
            <div class=""> 
                <label for="nom" class="">Nom : </label>
                <input type="text" name="nom" value="<?=$admin['nom']?>">
                <label for="prenom" class="">Prenom : </label>
                <input type="text" name="prenom" value="<?=$admin['prenom']?>">
                <label for="mail" class="">Mail : </label>
                <input type="email" name="mail" value="<?=$admin['mail']?>">
                <label for="mdp" class="">Mot de passe : </label>
                <input type="text" name="mdp" value="<?=$admin['mdp']?>">
                <label for="mdp2" class="">Confirmez le mot de passe : </label>
                <input type="text" name="mdp2" value="<?=$admin['mdp']?>">
                <button type="submit" class="">Modifier</button>
                <input type="hidden" name="postid" value="<?=$admin['id_admin']?>"/>
            </div>  
        </form>
        <?php } ?>
</main>
<?php include('footer_admin.php'); ?>