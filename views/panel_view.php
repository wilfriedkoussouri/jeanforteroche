<?php
require 'database.php';

if(!empty($_GET['id'])){
    $id = checkInput($_GET['id']);
}

$db = Database::connect();
$statement = $db->prepare("SELECT * FROM chapiter WHERE chapiter.id = ?");
$statement->execute(array($id));
$item = $statement->fetch();
Database::disconnect();

// nettoyage de la variable récuperée
function checkInput($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}
?>

<!DOCTYPE html>
<html>

<?php include("head.php"); ?>

<body>
<header>
    <nav class="navbar navbar-black">
        <a class="text-logo" href="#">Jean Forteroche</a>
        <ul class="nav nav-pills">
            <li class="nav-item active"><a class="nav-link" href="#">Se Connecter / S'identifier</a></li>
            <li class="nav-item"><a  class="nav-link" href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-twitter-square"></i></a></li>
        </ul>
    </nav>
</header>

<section class="chapiter">
    <div class="container">
        <div class="row view">
            <div class="col-sm-6">
                <h1>Voir un chapitre</h1>
                <form>
                    <div class="form-group">
                        <label>Titre : </label><?php echo ' '. $item['title']; ?>
                    </div>
                    <div class="form-group">
                        <label>Chapitre : </label><?php echo ' '. $item['id']; ?>
                    </div>
                    <div class="form-group">
                        <label>Extrait : </label><?php echo ' '. $item['description']; ?>
                    </div>
                    <div class="form-group">
                        <label>Image : </label><?php echo ' '. $item['image']; ?>
                    </div>
                    <a class="btn btn-primary" href="admin.php" role="button"><i class="fas fa-arrow-left"></i> Retour</a>
                </form>
            </div>
            <div class="col-sm-6 ">
                <div class="block">
                    <div class="post-block">
                        <img src="../img/cover-book.png">
                    </div>
                    <div class="corps-block">
                        <p><?php echo ' '. $item['id_author']; ?>  - <?php echo ' '. $item['date_uppload']; ?> </p>
                        <h2 class="title"><span>Chapitre <?php echo ' '. $item['id']; ?></span><?php echo ' '. $item['title']; ?></h2>
                        <p><?php echo ' '. $item['description']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("../footer.php"); ?>
</body>
</html>
