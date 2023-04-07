<?php
class Book
{
    private $title;
    private $author;
    private $subject;

    public function __construct($title, $author, $subject)
    {
        $this->title = $title;
        $this->author = $author;
        $this->subject = $subject;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }
}
?>