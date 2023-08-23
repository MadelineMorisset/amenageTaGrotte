<?php include('appelBdd.php'); 
      include('header.php'); ?>

<main>
    <section class="titles">
        <div class="title1">
            <h1>Aménage ta grotte</h1>
        </div>
        <div class="title2">
            <h2>ou comment devenir un ermite respectable</h2>
        </div>
    </section>
    <section class="cards">
        <?php
        $query = $db -> prepare('SELECT * FROM categorie');
        $query -> execute();
        $categorie = $query ->fetchAll();
            foreach($categorie as $cat){
        ?>
            <a class="card" href="categorie.php?id=<?=$cat['id_categorie']?>">
                <img src="upload/<?=$cat['media']?>" alt="image représentant la catégorie">
                <p class="title-card"><?=$cat['categorie']?></p>
            </a>   
        <?php } ?>
    </section>
</main>

<?php include('footer.php'); ?>