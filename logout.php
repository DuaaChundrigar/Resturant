<?php

session_start();

if(session_destroy())
{
header("Location: register_login.php");
}


?>