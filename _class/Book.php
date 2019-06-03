<?php


class Book
{
    public $id;
    public $title;
    public $synopsis;

    /**
     * Book constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->title = $data['title'];
        $this->synopsis = $data['synopsis'];
    }

    /**
     * @param $id
     * @return mixed
     */
    public static function getOne($id){
        global $db;

        $id = str_secur($id);
        $req = $db->prepare('
        SELECT *
        FROM book
        WHERE id = ?
        ');

        $req->execute([$id]);
        return $req->fetch();
    }

    /**
     * @return array
     */
    public static function getAll(){
        global $db;

        $req = $db->prepare('
        SELECT *
        FROM book
        ');

        $req->execute([]);
        return $req->fetchAll();
    }
}