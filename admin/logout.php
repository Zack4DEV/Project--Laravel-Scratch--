<?php
    
    session_start();
    session_write_close();

    header("Location ../index.php");
?>