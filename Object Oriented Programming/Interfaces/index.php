<?php

// Interfaces are similar to abstract classes, but they are not classes.
// They are a way to define a contract for a class without having to define the implementation.  
// An interface is collection of abstract methods and constants.
// A class that implements an interface must implement all the methods and constants in that interface.
// An interface cannot be instanciated

interface ContentInterface
{
    public function display();
    public function edit();
}

class Article implements ContentInterface
{
    private $title;
    private $content;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function display()
    {
        echo "<h2>{$this->title}</h2>";
        echo "<p>{$this->content}</p>";
    }

    public function edit()
    {
        echo "Editing the article '{$this->title}'";
    }
}

class Video implements ContentInterface
{
    private $title;
    private $url;

    public function __construct($title, $url)
    {
        $this->title = $title;
        $this->url = $url;
    }

    public function display()
    {
        echo "<h2>{$this->title}</h2>";
        echo "<iframe src='{$this->url}'></iframe>";
    }

    public function edit()
    {
        echo "Editing the video '{$this->title}'";
    }
}

$article = new Article('Introduction to PHP', 'PHP is a versitile scripting language');
$video = new Video('PHP For Beginners', 'https://www.youtube.com/watch?v=4U6-2BBMBQA')

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <?= $article->display() ?>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <?= $video->display() ?>
        </div>
    </div>
</body>

</html>