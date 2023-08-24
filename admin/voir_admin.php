<?php 
include ('session_start.php');
include('header_admin.php'); 
?>
<main>
    <div class="">
        <a class="nav-button" href="admin.php">Retour</a>
    </div>
    <div class="sectionForm">
        <h1>Gestion des administrateurs</h1>

        <?php 
        $query = $db -> prepare('SELECT * FROM administrateur');
        $query->execute();
        $administrateur = $query ->fetchAll();
         ?>


        <table class="table-admin">
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
                            <a class="button150px35px" href="modif_admin.php?id=<?=$admin['id_admin']?>">Modifier</a>
                            <a class="button150px35px supprimer" href="traitement/supprimer_admin.php?id=<?=$admin['id_admin']?>">Supprimer</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
                <?php } ?>
            </table>
    </div>
       
</main>
<?php include('footer_admin.php'); ?>