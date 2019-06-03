<?php


class Comment

{
    public $pseudo;
    public $comment;
    public $date;
    public $chapiter;
    public $id;
    public $report;

    /**
     * Comment constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->pseudo = $data['pseudo'];
        $this->comment = $data['comment'];
        $this->date = date_format(date_create($data['date']), "d/m/Y");
        $this->id = $data['id'];
        $this->report = $this->getReport($data['report']);
        $this->valid = $this->getDisplay($this->report);
        $this->chapiter = $data['chapiter_id'];
    }

    /**
     * @param $var
     * @return string
     */
    private function getReport($var){
        if($var === '1'){
            return ('Ce commentaire à été signalé');
        }else {
            return '';
        }
    }

    /**
     * @param $var
     * @return string
     */
    private function getDisplay($var){
        if($var){
            return '';
        }else{
            return 'none';
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public static function getOne($id){
        global $db;

        $req = $db->prepare('
        SELECT *
        FROM comment
        WHERE id = ?
        ');

        $req->execute([$id]);
        return $req->fetch();
    }

    /**
     * @param $id
     * @return array
     */
    public static function getAllByChapter($id){
        global $db;

        $id = str_secur($id);

        $req = $db->prepare('
        SELECT *
        FROM comment
        WHERE chapiter_id = ?
        ORDER BY date DESC
        ');

        $req->execute([$id]);
        return $req->fetchAll();
    }

    /**
     * @return array
     */
    public static function getAll(){
        global $db;

        $req = $db->prepare('
        SELECT *
        FROM comment
        ORDER BY report DESC, date
        
        ');

        $req->execute([]);
        return $req->fetchAll();
    }

    /**
     * @param $id
     * @param $value
     */
    public static function postReport($id, $value)
    {
        global $db;

        $id = str_secur($id);
        $value = str_secur($value);
        $insert = $db->prepare('
                UPDATE comment
                SET report = ?
                WHERE id = ?
                ');
        $insert->execute([$value, $id]);
        header('Location:index.php?page=admin&section=comment');
    }

    /**
     * @param $id
     */
    public static function postComment($id)
    {
        global $db;

        $id = str_secur($id);
        $postPseudo = str_secur($_POST['pseudo']);
        $postComment = str_secur($_POST['comment']);

        $insert = $db->prepare('
                INSERT INTO comment(pseudo, comment, chapiter_id, date) 
                 VALUES (?, ?, ?, NOW())
                ');
        $insert->execute(array($postPseudo, $postComment, $id));
        header('Location:index.php?page=single&id=' . $id);
    }

}