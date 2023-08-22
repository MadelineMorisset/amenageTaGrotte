<?php 
include('header_admin.php'); 
?>
<main>
    <h1>Aménage ta grotte</h1>
    <h2>Connectez-vous pour accéder à l'espace administrateur</h2>
    <form method="post" action="login.php">
        <label for="mail">Mail :</label>
        <input type="text" name="mail"/>
        <label for="password">Mot de passe :</label>
        <input type="password" name="password"/>
        <button type="submit">Se connecter</button>
    </form>
</main>
<?php include('../footer.php'); ?>