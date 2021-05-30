<?php
session_start();
require $_SESSION['qualification']."/".$_SESSION['year'].".php";
$reviewNumber = isset($_GET['reviewNumber']) ? $_GET['reviewNumber'] : NULL;
$question = $questionList[$reviewNumber];

require "views/review.tpl.php";