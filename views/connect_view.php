<!doctype html>
<html lang="fr">

<?php include_once 'includes/head.php'; ?>
<?php include_once 'includes/header.php'; ?>

<body>
<section id="connect">
    <form class="form-signin" method="POST" action="">
        <h1 class="h3 mb-3 font-weight-normal">Identifiez vous</h1>
        <label for="inputEmail" class="sr-only">Adresse Email</label>
        <input type="email" name="login" id="inputEmail" class="form-control" placeholder="Adresse Email" required autofocus>
        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Se souvenir de moi
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="btnconnect" type="submit">Se connecter</button>
        <?= $error; ?>

    </form>
</section>
</body>

<?php include_once 'includes/footer.php'; ?>

</html>