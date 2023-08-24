<?php 
include ('session_start.php');
include('header_admin.php'); 
?>
<main>
    <div class="">
        <a class="nav-button" href="admin.php">Retour</a>
    </div>
    <div class="sectionForm">
        <h1>Gestion des articles</h1>
        <?php 
        $query = $db -> prepare('SELECT * FROM article_blog');
        $query->execute();
        $article = $query ->fetchAll();
         ?>
        <table class="table-admin">
                <thead>
                    <tr>
                        <th>article</th>
                        <th>Modifier/ Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php  foreach ( $article as $art ){{ ?>
                        <td><?=$art['titre']?></td>
                        <td class="">
                            <a class="nav-button" href="modif_article.php?id=<?=$art['id_article']?>">Modifier</a>
                            <a class="nav-button" href="traitement/supprimer_article.php?id=<?=$art['id_article']?>">Supprimer</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
                <?php } ?>
            </table>
    </div> 
</main>
<?php include('footer_admin.php'); ?>