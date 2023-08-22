<?php 
include ('session_start.php');
include('../header.php'); 
?>
<main>
    <h1 class=""><?php echo 'Bonjour '. $_SESSION['prenom']?></h1>
    <div class="">
        <h2>Gestion des administrateurs</h2>

        <?php 
        $query = $db -> prepare('SELECT * FROM administrateur');
        $query->execute();
        $administrateur = $query ->fetchAll();
         ?>


        <table class="">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Modifier/ Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php  foreach ( $administrateur as $admin ){{ ?>
                        <td><?=$admin['nom']?></td>
                        <td><?=$admin['prenom']?></td>
                        <td class="">
                            <a class="" href="modif_admin.php?id=<?=$admin['id_admin']?>">Modifier</a>
                            <a class="" href="traitement/supprimer_admin.php?id=<?=$admin['id_admin']?>">Supprimer</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } ?>
</main>
<?php include('../footer.php'); ?>