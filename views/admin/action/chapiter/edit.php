<div class="container">
    <h4>Modifier le chapitre <?= $data->chapiter;?> : <?= $data->title; ?></h4>
    <form method="POST" action="index.php?page=admin&section=chapiter&action=edit&id=<?= $data->id;?>">
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Titre : </label>
            <div class="col-sm-10">
                <input type="text" class="mytextarea form-control" name="title" id="title" placeholder="<?= $data->title;?>" value="<?= $data->title ;?>" >
            </div>
        </div>
        <div class="form-group row">
            <label for="content" class="col-sm-2 col-form-label">Contenu : </label>
            <div class="col-sm-10">
                <textarea type="text" style="height: 500px" class="mytextarea form-control" name="content" id="content" placeholder="<?= $data->content;?>" ><?= $data->content; ?></textarea>
            </div>
        </div>
        <div class="form-group row">
            <input type="submit" class="btn btn-primary" name="updateEltChapiter" value="Mettre à jour">
        </div>
    </form>
</div>