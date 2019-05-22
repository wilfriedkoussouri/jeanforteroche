<?php include_once 'controllers/header_controller.php'; ?>

<header>
    <nav class="navbar navbar-black">
        <a class="text-logo" href="index.php">Jean Forteroche</a>
        <ul class="nav nav-pills">
            <li class="nav-item active"><a class="nav-link" href="index.php?page=connect"><?= $user; ?></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-twitter-square"></i></a></li>
        </ul>
    </nav>
</header>