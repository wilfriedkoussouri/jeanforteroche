<!doctype html>
<html lang="fr">

<head>
    <?php include_once 'views/includes/head.php'; ?>
</head>
<body>
<header>
    <?php include_once 'views/includes/header.php'; ?>
</header>

<section id="single">

    <div class="container single">

        <div class="info-chapiter">
            <h2><span>Chapitre <?= $data->chapiter; ?> : </span> <?= $data->title; ?></h2>
        </div>
        <p><?= $data->content ?></p>
    </div>

    <div class="container nextprev">
        <div class="row">
            <div class="prev-chapiter col-lg-4">
                <div style="<?= $displayPrev ?>">Chapitre <?= $data->chapiter; ?> : <?= $prev['title']; ?></div>
            </div>
            <div class="row col-lg-4">
                <div class="col-lg-6">
                    <a  style="<?= $displayPrev ?>" href="index.php?page=single&id=<?= $data->chapiter - 1; ?>">Précédent</a>
                </div>
                <div class="col-lg-6">
                    <a   style="<?= $displayNext ?>" href="index.php?page=single&id=<?= $data->chapiter + 1; ?>">Suivant </a>
                </div>
            </div>
            <div class="next-chapiter col-lg-4">
                <div style="<?= $displayNext ?>"> Chapitre  <?= $next['chapiter']; ?> : <?= $next['title']; ?></div>
            </div>
        </div>
    </div>

</section>


<section id="comment">

    <div class="container">
        <h4>Commentaires</h4>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Pseudo</th>
                <th>Commentaire</th>
                <th>Signaler</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($comments as $index => $comment): $comment = new Comment($comment); ?>
                <tr>
                    <td class="col-lg-2"><?= $comment->pseudo; ?></td>
                    <td class="col-lg-9"><div><?= $comment->comment; ?></div></td>
                    <td>
                        <form method="POST" action="index.php?page=single&id=<?= $comment->chapiter?>&comment=<?= $comment->id ?>">
                            <input class="alert-warning"  type="submit" name="report" value="Signaler">
                        </form>
                    </td>
                    <td class="col-lg-1"><?= $comment->date; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="container">
        <h4>Laissez un commentaire</h4>
        <form method="POST" action="">
            <div class="form-group row">
                <label for="pseudo" class="col-sm-2 col-form-label">Pseudo : </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Votre pseudo" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="comment" class="col-sm-2 col-form-label">Commentaire : </label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" name="comment" id="comment" required></textarea>

                </div>
                <div><?= $info; ?></div>
            </div>
            <div class="form-group row">
                <input type="submit" class="btn btn-primary" name="postComment" value="Poster">
            </div>
        </form>
    </div>
</section>

<footer>
    <?php include_once 'views/includes/footer.php' ?>
</footer>
</body>


</html>