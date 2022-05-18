<?php
include('config.php');
if(!$_SESSION['username']){
    header('location:/Quiz-Mania/index.php');
}