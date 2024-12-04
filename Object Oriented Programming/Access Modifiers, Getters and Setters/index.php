<?php

// Public - The property or method can be accessed from anywhere.
// This is the default if you leave off the modifier.

// Protected - The property or method can be accessed from within the class OR any
// any class that inherits from it.

// Private - The property can only be accessed from within the class.

class User
{
    // Properties
    public $name;
    public $email;
    private $status = 'active';
    // protected $employed = 'Yes';

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

    // Getter
    public function getStatus()
    {
        return $this->status;
    }

    //Setter
    public function setStatus($status)
    {
        $this->status = $status;
    }
}

// Instantiate a new object
$user1 = new User('Joash', 'joash@gmail.com'); // Any moment, an instance of the class is created, the constructed will be called
// var_dump($user1);
// $user1->login();
// echo '<br>';
$user1->setStatus('inactive');
echo $user1->getStatus();
// $user1->employed;
echo '<br>';

$user2 = new User('Joel', 'joel@gmail.com');

// var_dump($user2);
// $user2->login();
// echo '<br>';
echo $user2->getStatus();
