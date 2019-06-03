<?php


class Chapiter
{
    public $id;
    public $title;
    public $chapiter;
    public $nbComment;
    public $content;
    public $extract;
    public $date;
    public $author;
    public $image;

    /**
     * Chapiter constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->title = $data['title'];
        $this->chapiter = $data['chapiter'];
        $this->nbComment = $this->getNbComment($this->chapiter);
        $this->date = date_format(date_create($data['date']), "d/m/Y");
        $this->content = $data['content'];
        $this->extract = $this->getExtract($this->content);
        $this->author = $data['author_id'];
        $this->image = $data['image'];

    }

    /**
     * @param $var
     * @return bool|string
     */
    private function getExtract($var){
        return substr($var, 0, 230);
    }

    /**
     * @param $id
     * @return mixed
     */
    private function getNbComment($id) {
        global $db;

        $id = str_secur($id);
        $req = $db->prepare("
        SELECT COUNT(*) 
        FROM comment
        WHERE chapiter_id = ?
        ");
        $req->execute([$id]);
        return $req->fetch()[0];
    }

    /**
     * @param $chapiter
     * @return mixed
     */
    public static function getOne($chapiter){
        global $db;

        $chapiter = str_secur($chapiter);
        $req = $db->prepare('
        SELECT *
        FROM chapiter
        WHERE chapiter = ?
        ');

        $req->execute([$chapiter]);
        return $req->fetch();
    }

    /**
     * @return array
     */
    public static function getAll(){
        global $db;

        $req = $db->prepare('
        SELECT *
        FROM chapiter
        ORDER BY chapiter DESC
        ');

        $req->execute([]);
        return $req->fetchAll();
    }

    /**
     * @return array
     */
    public static function getLast(){
        global $db;

        $req = $db->prepare('
        SELECT *
        FROM chapiter
        ');

        $req->execute([]);
        return $req->fetchAll();
    }
}