<?php include('head_admin.php'); ?>
<header>
<section class="menu">
    <nav>
        <div class="">
            <a href="connect.php"><img class="logo" src="../img/logo.png" alt="logo du site"> </a>
        </div>
        <?php if (isset($_SESSION['mail'])){ ?>
        <div class="">
            <a class="" href="logout.php"><p>Se déconnecter</p></a>
        </div>
        <?php } ?>
    </nav>
</section>
</header>