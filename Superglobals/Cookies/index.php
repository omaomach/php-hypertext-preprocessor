<?php

/*

Cookies allow developers to store data on the user's client/browser, making it available through multiple pages
similar to sessions.

The $_COOKIE super global holds the values of cookies sent by the client's browser to the server.

These cookies are sent with HTTP requests, allowing the server to remember information about the user.

Cookies unlike sessions are stored on the client browser and you can easily find them.

/// WHERE SESSIONS AND COOKIES DIFFER

1. Storage location - Cookies are stored on the client while sessions are stored on the server.

2. Data persistence - Cookies can be set with an expiration time, allowing data to persist
on the client beyond the current session.
- Sessions only exist on the duration of the users visit to the website.

3. Security - Cookies can be less secure as they are stored on the client and can be tamnpered with.
- Sessions are more secure as they are stored on the server and are not accessible or modifiable by the client.

4. Storage capacity - Cookies have a limited storage capacity making them suitable
for small amounts of data like user preferences or tokens.
- Sessions can store large amounts of data on the server.
- Storing excessive data in sessions can impact server resources.

5. Ease of Use - Cookies are easy to work with and dont require server side scripting
- Sessions require server side scripting to create manage and destroy.

6. Cross-Tab Communication - Cookies can be accessed from different tabs or windows, allowing data sharing within
the same domain
- Sessions are generally isolated to a single tab or window.Communication btwn different tabs or windows within the same session can be a little bit challenging at times

7. Use cases - Cookies are often used for authentication tokens, remembering user preferences, tracking user
behaviour e.t.c
- Sessions are commonly used for server side authentication , storing temporary data during a user's visit

*/

setcookie('username', 'Joash', time() + 3600, '/');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Cookies</title>
</head>

<body>
    <p>Cookie set. <a href="page.php">Go to page.php</a></p>
</body>

</html>