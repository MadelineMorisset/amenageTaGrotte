<?php 
include('header_admin.php'); 
?>
<main>
    <section class="titles">
        <div class="title1">
            <h1>Aménage ta grotte</h1>
        </div>
        <div class="title2">
            <h2>Connectez-vous pour accéder à l'espace administrateur</h2>
        </div>
    </section>
    <form method="post" action="login.php" class="formConnection">
        <section class="identification">
            <section class="pseudoEmail">
                <label for="mail" class="label">Mail :</label>
                <input type="text" name="mail" class="inputLoginAccount"/>
            </section>
            <section class="password">
                <label for="password" class="label">Mot de passe :</label>
                <input type="password" name="password" class="inputLoginAccount"/>
            </section>
        </section>
        <section class="connection">
            <button type="submit" class="button150px35px">Se connecter</button>
        </section>
    </form>
</main>
<?php include('footer_admin.php'); ?>