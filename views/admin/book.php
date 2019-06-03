<section>
    <div class="container">
        <div class="row panel-view-section" id="admin-section">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Chapitre</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($datas AS $index=>$data): $data = new Book($data) ?>
                    <tr>
                        <td>
                            <span class="alert-primary"><?= $data->title; ?></span>
                            <div><?= $data->synopsis; ?></div>
                        <td style="width: 320px">
                            <a class="btn btn-secondary" href="index.php?page=admin&section=book&action=view&id=<?= $data->id ;?>"><i class="fas fa-eye"></i> Voir</a>
                            <a class="btn btn-primary" href="index.php?page=admin&section=book&action=edit&id=<?= $data->id ;?>"><i class="fas fa-pencil-alt"></i> écrire</a>
                            <a class="btn btn-danger" href="index.php?page=admin&section=book&action=delete&id=<?= $data->id ;?>"><i class="fas fa-times"></i> Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>