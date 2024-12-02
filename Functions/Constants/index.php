<?php

define('APP_NAME', 'My App');
define('APP_VERSION', '1.0.0');

// echo APP_NAME, '<br>';
// echo APP_VERSION, '<br>';

const DB_NAME = 'my_db';
const DB_HOST = 'localhost';

// echo DB_NAME, '<br>', DB_HOST;

function run()
{
    echo APP_NAME, '<br>';
    echo DB_NAME, '<br>', DB_HOST;
}

run();

// define('APP_NAME', 'My App 2'); // you cant define a constant twice.
// const DB_NAME = 'test'; // you cant define a constant twice
