<?php
session_start();
require $_SESSION['qualification']."/".$_SESSION['year'].".php";
$question = $questionList[$reviewNumber];

require "views/result.tpl.php";