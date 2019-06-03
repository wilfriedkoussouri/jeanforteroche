<!doctype html>
<html lang="en">
<head>
    <?php include_once 'views/includes/head.php'; ?>
</head>
<body>
<header>
    <?php include_once 'views/includes/header.php'; ?>
</header>
<section id="admin">
    <div class="container-fluid">
        <div class="row">
            <?php include_once 'views/admin/includes/sidebar.php' ?>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <?php include_once $header; ?>
                <?php include_once $content; ?>
            </main>
        </div>
    </div>
</section>
<footer>
    <?php include_once 'views/includes/footer.php' ?>
</footer>
</body>


</html>

