<?php

// Superglobals refer to a group of global variables that are accessible from anywhere in a PHP
// script, including functions and classes.

// They are associative arrays that store information about things such as the current request,
// the server, sessions, cookies and more.

// They make PHP very practical, however, if you are not careful, they can be a source of security
// vulnerabilities.

//// THEY ARE ////
// $_GLOBALS: References variables in the global scope.
// $_SERVER: Contains info about the server such as hostname, file paths, e.t.c
// $_GET: Variables passed to the script via query params and GET forms
// $_POST: Variables passed to the script via POST forms
// $_FILES: Items uploaded to the current script
// $_COOKIE: Variables passed to script via HTTP cookies
// $_SESSION: Session variables available to the script.
// $_REQUEST: Contains the contents of $_GET, $_POST, $_COOKIE
// $_ENV: Variables passed to the current script via environment method
