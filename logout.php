<?php
session_start();

//did the user's browser send a cokkie for the session?
if(isset($_COOKIE[ session_name()])){
    //empty cookie
    setcookie(session_name(),'',time()-86400, '/');
}

//clear all session var
session_unset();
//destroy the session
session_destroy();

include('includes/header.php');
?>

<h1>Logged out</h1>

<p class="lead">You've been logged out. See you next time!</p>

<?php
include("includes/footer.php");
?>