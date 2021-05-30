<?php
session_start();
require $_SESSION['qualification']."/".$_SESSION['year'].".php";


$selectNumber = isset($_POST['selectNumber']) ? $_POST['selectNumber'] : NULL;

$question = $questionList[$_SESSION['questionListKeys'][$_SESSION['count']-1]];

$answer = $question["answer"];


if (!isset($_SESSION['correct'])) {
	$_SESSION['correct'] = 0;
}

if (!isset($_SESSION['incorrectKeys'])) {
	$_SESSION['incorrectKeys'] = [];
}

if($selectNumber == $answer){
    $_SESSION['correct'] = (int) $_SESSION['correct'] + 1;
    $result = "正解";
    $resultMark = "circle";
}else{
    $result = "不正解";
    $resultMark = "cross";
    $_SESSION['incorrectKeys'][] = $_SESSION['questionListKeys'][$_SESSION['count']-1];
    
} 





require "views/answer.tpl.php";