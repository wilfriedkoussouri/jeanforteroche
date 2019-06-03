<div>
    <div class="container">
        <p>Êtes vous sur de vouloir supprimer le livre : <?= $data->title; ?> ?</p>
        <form method="POST" action="">
            <input class="btn btn-danger" name="deleteElt" id="deleteElt" type="submit" value="Oui">
            <input class="btn btn-primary" name="returnElt" id="deleteElt" type="submit" value="Non">
        </form>
    </div>

</div>