<?php 
include ('session_start.php');
include('header_admin.php'); 
?>
<main>
    <div class="">
        <a class="nav-button" href="admin.php">Retour</a>
    </div>
    <div class="sectionForm">
        <h1>Gestion des catégories</h1>
        <?php 
        $query = $db -> prepare('SELECT * FROM categorie');
        $query->execute();
        $categorie = $query ->fetchAll();
         ?>
        <table class="table-admin">
                <thead>
                    <tr>
                        <th>categorie</th>
                        <th>Modifier/ Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php  foreach ( $categorie as $cat ){{ ?>
                        <td><?=$cat['categorie']?></td>
                        <td class="">
                            <a class="button150px35px" href="modif_categorie.php?id=<?=$cat['id_categorie']?>">Modifier</a>
                            <a class="button150px35px supprimer" href="traitement/supprimer_categorie.php?id=<?=$cat['id_categorie']?>">Supprimer</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
                <?php } ?>
            </table>
    </div>
</main>
<?php include('footer_admin.php'); ?>