<?php
include ('session_start.php');
include('header_admin.php'); 
?>
<main>
    <div class="">
        <a class="nav-button" href="admin.php">Retour</a>
    </div>
    <div class="sectionForm">
        <h1>Gestion des médias</h1>
        <?php 
        $query = $db -> prepare('SELECT * FROM media');
        $query->execute();
        $media = $query ->fetchAll();
         ?>
        <table class="table-admin">
                <thead>
                    <tr>
                        <th>media</th>
                        <th>Modifier/ Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php  foreach ( $media as $med ){{ ?>
                        <td><?=$med['media']?></td>
                        <td class="">
                            <a class="button150px35px" href="traitement/supprimer_media.php?id=<?=$med['id_media']?>">Supprimer</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
                <?php } ?>
            </table>
    </div>
</main>
<?php include('footer_admin.php'); ?>