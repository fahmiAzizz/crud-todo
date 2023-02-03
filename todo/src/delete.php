<?php
require 'functions.php';
if (isset($_GET['id'])) {
    delete($_GET);
    header("Location:index.php");
}
