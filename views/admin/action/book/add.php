<div class="container">
    <h4>Ajouter un livre !</h4>
    <form method="POST" action="">
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Titre : </label>
            <div class="col-sm-10">
                <input type="text" class="form-control mytextarea" name="title" id="title" placeholder="Titre du livre *" value="" required >
            </div>
        </div>
        <div class="form-group row">
            <label for="synopsis" class="col-sm-2 col-form-label">Synopsis : </label>
            <div class="col-sm-10">
                <textarea style="height: 500px" class="form-control mytextarea" name="synopsis" id="synopsis" placeholder="Résumé du livre " required></textarea>
            </div>

        </div>
        <div class="form-group row">
            <input type="submit" class="btn btn-primary" name="postEltBook" value="Ajouter">
        </div>
    </form>
</div>