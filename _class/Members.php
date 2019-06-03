<?php


class Members
{

    /**
     * @param $login
     * @param $password
     * @return string
     */
    public static function verify($login, $password)
    {
        global $db;

        $login = str_secur($login);
        $password = str_secur($password);

        $req = $db->prepare("
        SELECT firstname
        FROM members
        WHERE email = ? AND password = ?
        ");

        $req->execute([$login, $password]);
        $userExist = $req->rowCount();
        $data = $req->fetch();

        if ($userExist == 1) {
            setcookie('firstname', $data['firstname'], time() + 365*24*3600, null, null, false, true);
            header('Location:index.php?page=admin&section=chapiter');
        } else {
            return $help = 'Nous n\'avons trouvé aucun compte';
        }
    }


}

