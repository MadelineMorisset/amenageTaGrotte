<?php include('../head.php'); ?>
<header>
<section class="menu">
    <nav>
        <div class="">
            <a href="connect.php"><img class="logo" src="../images/logo.jpg" alt="logo du site"> </a>
        </div>
        <?php if (isset($_SESSION['mail'])){ ?>
        <div class="">
            <a class="" href="logout.php"><p>Se déconnecter</p></a>
        </div>
        <?php } ?>
    </nav>
</section>
</header>