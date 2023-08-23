<?php 
include ('session_start.php');
include('header_admin.php'); 
?>
<main>
    <h1 class=""><?php echo 'Bonjour '. $_SESSION['prenom']?></h1>
    <div class="">
        <h2>Gestion des articles</h2>
        <?php 
        $query = $db -> prepare('SELECT * FROM article_blog');
        $query->execute();
        $article = $query ->fetchAll();
         ?>
        <table class="">
                <thead>
                    <tr>
                        <th>article</th>
                        <th>Modifier/ Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php  foreach ( $article as $art ){{ ?>
                        <td><?=$art['article']?></td>
                        <td class="">
                            <a class="" href="modif_article.php?id=<?=$art['id_article']?>">Modifier</a>
                            <a class="" href="traitement/supprimer_article.php?id=<?=$art['id_article']?>">Supprimer</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } ?>
</main>
<?php include('footer_admin.php'); ?>