<section>
    <div class="container">
        <div class="row panel-view-section" id="admin-section">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Commentaire</th>
                    <th class="col-lg-2">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($datas AS $index=>$data): $data = new Comment($data) ?>
                    <tr>
                        <td>
                            <span class="alert-primary">Le chapitre <?= $data->chapiter; ?> à été commenté le <?= $data->date; ?> par <?= $data->pseudo; ?></span>
                            <span class="alert-danger "><?= $data->report; ?></span>
                            <div><?= $data->comment; ?></div>
                        </td>
                        <td>
                            <form method="post" action="index.php?page=admin&section=comment&action=valid&id=<?= $data->id;?>">
                                <input class="btn btn-outline-primary btn-sm" type="submit" name="valid" style="display:<?= $data->valid?>" value="Valider">
                            </form>
                            <a class="btn btn-danger" href="index.php?page=admin&section=comment&action=delete&id=<?= $data->id;?>"><i class="fas fa-times"></i> Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>