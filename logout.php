<?php
    session_start();
    //logout
    session_destroy();
    //arahkan ke halaman index_php
    header("location:index_php");
?>