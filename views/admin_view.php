<!DOCTYPE html>
<html>
<?php include_once 'includes/head.php'; ?>
<?php include_once 'includes/header.php'; ?>

<body>
<section id="panel">
    <div class="container">
        <div class="row panel-view-section" id="chapiters">
            <h2>Mes Chapitres </h2><a href="insert.php?id=1" class="btn btn-success btn-lg"><i class="fas fa-plus"></i> Ajouter</a>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Chapitre</th>
                    <th>Titre</th>
                    <th>Extrait</th>
                    <th class="panel-view-action">Action</th>
                </tr>
                </thead>
                <?php foreach ($allArticles as $index => $article): ?>
                    <tbody>
                    <tr>
                        <td>Chapitre <?= $article['chapiter']; ?></td>
                        <td><?= $article['title'] ?></td>
                        <td><?= substr($article['content'], 0, 200) ?>...</td>
                        <td class="panel-admin-action">
                            <a class="btn btn-secondary" href="views/panel_view.php?id=1"><i class="fas fa-eye"></i> Voir</a>
                            <a class="btn btn-primary" href="writing.php?id=1"><i class="fas fa-pencil-alt"></i> écrire</a>
                            <a class="btn btn-danger" href="delete.php?id=1"><i class="fas fa-times"></i> Supprimer</a>
                        </td>
                    </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</section>
</body>

<?php include_once 'includes/footer.php'; ?>

</html>
