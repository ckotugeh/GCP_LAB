<?php
// set session time in php 


if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 00)) {
    // start the session
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

if (!isset($_SESSION['CREATED'])) {
    $_SESSION['CREATED'] = time();
} else if (time() - $_SESSION['CREATED'] > 10) {
    // session started now
    session_regenerate_id(false);    // not allowed to change session or session ID
    $_SESSION['CREATED'] = time();  // update creation time
}
?>
