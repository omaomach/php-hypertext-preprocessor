<?php

/*

Sessions allow developers to store and manage user-specific data on the server that persists through HTTP requests.
This is used for logins, etc.

A session in the context of web development represents a series of interactions or requests made by a single user during their visit to the website.

They are critical for tasks like authentication, shopping carts, user specific preferences.

Without web sessions, websites would have no way of identifying and remembering individual users.

The $_SESSION super global is used to store session data

In order to use sessions, the function session_start() must be called.

////// HOW SESSIONS WORK //////

1. Session Initialization: Session ID is created and stored in a cookie
2. Data Storage: Data such us the user ID can be stored in a session
3. Data Retrieval: The server can retrieve sessioon data associated with the user
4. Session Termination: Sessions can expire or be terminated explicitly

*/

session_start();

$_SESSION['name'] = 'Joash';

if (isset($_SESSION['name'])) {
    echo 'Name: ' . $_SESSION['name'];
} else {
    echo 'Name is not set';
}
