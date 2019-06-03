<div class="container">
    <h4>Ajouter un chapitre</h4>
    <form method="POST" action="">

        <div class="form-group row">
            <label for="chapiter" class="col-sm-2 col-form-label">Chapitre : </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="chapiter" id="chapiter" placeholder="Numéro du chapitre *" value="" required >
            </div>
        </div>
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Titre : </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="title" id="title" placeholder="Titre du chapitre*" value="" required >
            </div>
        </div>
        <div class="form-group row">
            <label for="content" class="col-sm-2 col-form-label">Contenu : </label>
            <div class="col-sm-10">
                <textarea style="height: 500px" class="form-control" name="content" id="content" placeholder="Contenu du chapitre *" value="" required ></textarea>
            </div>
        </div>
        <div class="form-group row">
            <input type="submit" class="btn btn-primary" name="postEltChapter" value="Ajouter">
        </div>
    </form>
</div>