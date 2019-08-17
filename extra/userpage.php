<?php
session_start();
if(isset($_SESSION["name"])){
} else{
    header('Location: /Doeda/index.php');
}
?>