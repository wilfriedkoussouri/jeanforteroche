<?php


class admin_model {

    /**
     * @param $url
     * @return string
     */
    static function getUrl($url){
        $url = str_secur($url);
        return 'views/admin/'.$url.'.php';
    }

    /**
     * @param $section
     * @param $action
     * @return string
     */
    static function getAction($section, $action){
        $section = str_secur($section);
        $action = str_secur($action);
        return 'views/admin/action/'.$section.'/'.$action.'.php';
    }

    /**
     * @param $section
     */
    public static function returnElt($section){
        $section = str_secur($section);
        header('Location:index.php?page=admin&section='.$section.'');
    }

    /**
     * @param $section
     * @param $id
     */
    public static function deleteElt($section, $id)
    {
        global $db;
        $section = str_secur($section);
        $id = str_secur($id);

        $req = $db->prepare('
        DELETE
        FROM '.$section.'
        WHERE id = ?
        ');
            $req->execute([$id]);
            header('Location:index.php?page=admin&section='.$section.'');
        }

    /**
     * @param $id
     */
    public static function updateEltChapter($id)
    {
        global $db;
        $id = str_secur($id);
        $postTitle = $_POST['title'];
        $postContent = $_POST['content'];

        $insert = $db->prepare('
                UPDATE chapiter
                SET title = ?, content = ?
                WHERE id = ?
                ');
        $insert->execute([$postTitle, $postContent,$id]);
        header('Location:index.php?page=admin&section=chapiter');
    }

    /**
     *
     */
    public static function postEltChapter()
    {
        global $db;

        $postTitle = $_POST['title'];
        $postChapiter = $_POST['chapiter'];
        $postContent = $_POST['content'];

        $insert = $db->prepare('
                INSERT INTO chapiter(title, chapiter, content, date)
                VALUES (?,?,?, NOW())
                ');
        $insert->execute(array($postTitle, $postChapiter, $postContent));
        header('Location:index.php?page=admin&section=chapiter');

    }

    /**
     * @param $id
     */
    public static function updateEltBook($id)
    {
        global $db;

        $id = str_secur($id);
        $postTitle = $_POST['title'];
        $postSynopsis = $_POST['synopsis'];

        $insert = $db->prepare('
                UPDATE book
                SET title = ?, synopsis = ?
                WHERE id = ?
                ');
        $insert->execute([$postTitle, $postSynopsis, $id]);
        header('Location:index.php?page=admin&section=book');
    }

    /**
     *
     */
    public static function postEltBook()
    {
        global $db;

        $postTitle = $_POST['title'];
        $postSynopsis = $_POST['synopsis'];

        $insert = $db->prepare('
                INSERT INTO book(synopsis, title, date) 
                 VALUES (?, ?, NOW())
                ');
        $insert->execute(array($postSynopsis, $postTitle));
        header('Location:index.php?page=admin&section=book');
    }

}
