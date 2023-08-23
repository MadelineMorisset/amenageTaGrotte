<?php
include ('session_start.php');
include('header_admin.php'); 
?>
<main>
    <h1 class=""><?php echo 'Bonjour '. $_SESSION['prenom']?></h1>
    <div class="">
        <h2>Gestion des médias</h2>
        <?php 
        $query = $db -> prepare('SELECT * FROM media');
        $query->execute();
        $media = $query ->fetchAll();
         ?>
        <table class="">
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
                            <a class="" href="traitement/supprimer_media.php?id=<?=$med['id_media']?>">Supprimer</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } ?>
</main>
<?php include('footer_admin.php'); ?>