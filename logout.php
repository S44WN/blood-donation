<?php

// Start a new session or resume an existing one
session_start();

// Destroy the current session and release the session ID
session_destroy();

// Redirect the user to the "index.php" page
header("location: index.php");

?>