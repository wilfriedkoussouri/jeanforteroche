<!doctype html>
<html lang="fr">

<head>
    <?php include_once 'views/includes/head.php'; ?>
</head>
<body>
<header>
    <?php include_once 'views/includes/header.php'; ?>
</header>
<section id="connect">
    <div class="container">
        <form class="form-signin" method="post" action="">
            <h1 class="h3 mb-3 font-weight-normal">Identifiez vous</h1>
            <div>
                <div>
                    <input  class="form-control" type="email" name="login" placeholder="Adresse Email *"  required autofocus>
                </div>
            </div>
            <div>
                <div>
                    <input class="form-control" type="password" name="password" placeholder="Mot de passe *"required>
                </div>
            </div>
            <div>
                <div>
                    <input class="btn btn-lg btn-primary btn-block" type="submit" name="btnconnect" value="Me connecter!">
                </div>
            </div>
        </form>
    </div>

</section>
<footer>
    <?php include_once 'views/includes/footer.php' ?>
</footer>
</body>
</html>
