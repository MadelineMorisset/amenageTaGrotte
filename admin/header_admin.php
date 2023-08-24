<?php include('head_admin.php'); ?>
<header>
    <a href="admin.php"><img class="header-logoBlog" src="../img/logo.png" alt="logo du site"></a>
    <nav class="nav">
        <?php if (isset($_SESSION['mail'])){ ?>
        <section class="nav-button logout">
            <a class="logoutLink" href="logout.php">Se déconnecter</a>
        </section>
        <?php } ?>
    </nav>
</header>