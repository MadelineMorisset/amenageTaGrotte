<?php 
include ('session_start.php');
include('header_admin.php'); 
?>
<main>
    <div class="">
        <a class="nav-button" href="admin.php">Retour</a>
    </div>
    <h1 class=""><?php echo 'Bonjour '. $_SESSION['prenom']?></h1>
    <div class="">
        <h2>Ajout d'un administrateur</h2>
        <form action="traitement/t_admin.php" method="post">
            <div class=""> 
                <label for="nom" class="">Nom : </label>
                <input type="text" name="nom" class="">
                <label for="prenom" class="">Prenom : </label>
                <input type="text" name="prenom" class="">
                <label for="mail" class="">Mail : </label>
                <input type="email" name="mail" class="">
                <label for="mdp" class="">Mot de passe : </label>
                <input type="text" name="mdp" class="">
                <button class="button150px35px" type="submit">Ajouter</button>
            </div>  
        </form>
</main>
<?php include('footer_admin.php'); ?>