<?php


class Article
{
    public $id;
    public $title;
    public $content;
    public $date;
    public $author;
    public $book;


    function __construct($id)
    {

        global $db;

        $id = str_secur($id);

        $reqArticle = $db->prepare('
        SELECT c.*, m.firstname, m.lastname
        FROM chapiter c 
        INNER JOIN members m ON m.id = c.author_id
        INNER JOIN book b ON b.id = c.book_id
        WHERE c.id = ?
        ');
        $reqArticle->execute([$id]);
        $data = $reqArticle->fetch();

        $this->id = $id;
        $this->title = $data['title'];
        $this->content = $data['content'];
        $this->date = $data['date'];
        $this->author = $data['firstname'] . ' ' . $data['lastname'];
        $this->book = $data['book'];
    }

    /**
     * Envoie tous les articles
     * @return array
     */
    static function getAllArticles()
    {

        global $db;

        $reqArticles = $db->prepare('
        SELECT c.*, m.firstname, m.lastname
        FROM chapiter c
        INNER JOIN members m ON m.id = c.author_id 
        
    
        ');
        $reqArticles->execute([]);
        return $reqArticles->fetchAll();
    }

    static function getLastArticle($book = null)
    {

        global $db;

        if ($book === null) {

            $reqArticle = $db->prepare('
             SELECT c.*, m.firstname, m.lastname, b.title AS book
            FROM chapiter c 
            INNER JOIN members m ON m.id = c.author_id
            INNER JOIN book b ON b.id = c.book_id
            ORDER BY id DESC 
            LIMIT 1
            ');
            $reqArticle->execute([]);
        } else {
            $reqArticle = $db->prepare('
            SELECT c.*, m.firstname, m.lastname, b.title AS book
            FROM chapiter c 
            INNER JOIN members m ON m.id = c.author_id
            INNER JOIN book b ON b.id = c.book_id
            WHERE c.id = ?
            ORDER BY id DESC 
            LIMIT 1
            ');
            $reqArticle->execute([str_secur($book)]);
        }
        return $reqArticle->fetch();
    }
}