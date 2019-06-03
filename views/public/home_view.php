<!doctype html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php'; ?>
</head>
<body>
<header>
    <?php include_once 'views/includes/header.php'; ?>
</header>

<section id="cover">
    <div class="container-fluid cover">
        <div class="cover-title">
            <h3>Un billet simple pour l'alaska </h3>
            <div>
                <span>un roman de Jean Fortreroche</span>
                <a class="btn btn-outline-primary" href="index.php?page=single&id=1">Commencer la lecture</a>
            </div>
        </div>
    </div>
</section>

<section id="chapiter">
    <div class="container-fluid chapiter">
        <div class="row d-flex justify-content-around ">
            <?php foreach ($datas as $index => $data): $lastChapter = new Chapiter($data); ?>
                <div class="col-lg-4">
                    <div class="block">
                        <div class="post-block">
                            <a href="#"><img alt="image premier de chapitre" src="assets/images/<?= $lastChapter->image ?>.jpg"></a>
                        </div>
                        <div class="corps-block">
                            <p><?= $lastChapter->author; ?> - <?= $lastChapter->date; ?> </p>
                            <h2 class="title"><span>Chapitre <?= $lastChapter->chapiter; ?> :</span><?= $lastChapter->title ?></h2>
                            <p><?= $lastChapter->extract; ?>...</p>
                        </div>
                        <div class="pied-block">
                            <p><i class="fas fa-user"></i> <?= $lastChapter->nbComment;?> commentaires | <a href="index.php?page=single&id=<?= $lastChapter->chapiter; ?>">Lire la suite </a></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<section>
    <div class="container-fluid newsletter">
        <div class="row d-flex justify-content-around align-items-center join">
            <div class="col-lg-6 d-flex justify-content-end">
                <p class="join-text">Abonnez vous à ma lettre d'information</p>
            </div>
            <div class="row col-lg-6 abonner">
            <div class="col-lg-9">
                <label style="display: none" for="email"></label>
                <input id="email" class="email" type="email" name="email" placeholder="votre@email.fr">
            </div>
                <div class="col-lg-3">
                    <input class="btn btn-primary" type="submit" name="newsletter" value="S'abonner">
                </div>

            </div>
        </div>
    </div>
</section>

<section id="apropos">
    <div class="container-fluid">
        <h2>Le livre de ma vie</h2>
        <div class="row">
            <div class="col-lg-4">
                <img alt="ma photo de profile" src="assets/images/moi.jpg">
            </div>
            <div class="col-lg-7 block">
                <h4>Rencontre avec les mots</h4>
                <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim id est laborum.lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod.</p>

                <h4>Regard sur la vie</h4>
                <p>et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.lorem ipsum dolor sit amet, consectetur
                    adipisicing elit, sed do eiusmod</p>

                <h4>Tempor incididunt</h4>
                <p>ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>
            </div>
        </div>
    </div>
</section>

<footer>
    <?php include_once 'views/includes/footer.php' ?>
</footer>
</body>
</html>

