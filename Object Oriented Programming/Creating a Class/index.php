<?php

class User
{
    // Properties
    public $name;
    public $email;

    // Constructor
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    // Methods
    public function login()
    {
        echo $this->name . ' has logged in';
    }
}

// Instantiate a new object
$user1 = new User('Joash', 'joash@gmail.com'); // Any moment, an instance of the class is created, the constructed will be called
var_dump($user1);
$user1->login();
echo '<br>';

$user2 = new User('Joel', 'joel@gmail.com');

var_dump($user2);
$user2->login();
