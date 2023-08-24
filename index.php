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
        <section class="titleDesc">
            <p>Tu as toujours rêvé de vivre en ermite sans jamais oser le faire ? Sans savoir comment t'y prendre ?</p>
            <p>Aménage ta grotte est là pour t'aider à réaliser ton rêve !</p>
            <p>Nous allons tout t'expliquer : pourquoi et comment choisir une grotte, l'aménager selon tes goûts et tes envies, avoir le confort de la vie moderne (sans les inconvénients), faire pousser ton potager et bien plus encore !!</p>
        </section>
    </section>

    <section class="cards">
        <?php
        $query = $db -> prepare('SELECT * FROM categorie');
        $query -> execute();
        $categorie = $query ->fetchAll();
            foreach($categorie as $cat){
        ?>
            <a href="categorie.php?id=<?=$cat['id_categorie']?>">
                <section class="card">
                    <img src="upload/<?=$cat['media']?>" alt="image représentant la catégorie" class="image-card">
                    <section class="sectionTitleCard">
                        <p class="title-card"><?=$cat['categorie']?></p>
                    </section>
                </section>
            </a>   
        <?php } ?>
    </section>
</main>

<?php include('footer.php'); ?>