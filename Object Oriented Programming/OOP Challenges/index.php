<?php

class Article
{

    public $title;
    public $content;
    private $published = false;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function publish()
    {
        $this->published = true;
    }

    public function isPublished()
    {
        return $this->published;
    }
}

// $article1 = new Article('Nation', 'Nation Content');
// $article2 = new Article('Standard', 'Standard Content');

// $article1->publish();

// echo var_dump($article1->isPublished(), true) . '<br>';
// echo var_dump($article2->isPublished(), true) . '<br>';

class StringUtility
{

    public static function shout($string)
    {
        return strtoupper($string . '!' . '<br>');
    }

    public static function whisper($string)
    {
        return strtolower($string . '.' . '<br>');
    }

    public static function repeat($string, $times = 2)
    {
        return str_repeat($string . '<br>', $times);
    }
}

echo StringUtility::shout('Joash');
echo StringUtility::whisper('Joash');
echo StringUtility::repeat('Joash ', 10);
