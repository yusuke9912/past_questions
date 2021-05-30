<?php
session_start();
$questionNum = isset($_POST['questionNum']) ? $_POST['questionNum'] : NULL;
$year = isset($_POST['year']) ? $_POST['year'] : NULL;
$qualification = isset($_POST['qualification']) ? $_POST['qualification'] : NULL;

if (!isset($_SESSION['count'])) {
	$_SESSION['count'] = 0;
}

if (!isset($_SESSION['questionNum'])) {
	$_SESSION['questionNum'] = $questionNum;
}

if (!isset($_SESSION['year'])) {
	$_SESSION['year'] = $year;
}

if (!isset($_SESSION['qualification'])) {
	$_SESSION['qualification'] = $qualification;
}

require $_SESSION['qualification']."/".$_SESSION['year'].".php";

if (!isset($_SESSION['questionListKeys'])) {
	$_SESSION['questionListKeys'] = array_rand($questionList, $questionNum);
}

$_SESSION['count'] = (int) $_SESSION['count'] + 1;
$question = $questionList[$_SESSION['questionListKeys'][$_SESSION['count'] - 1]];



if ($_SESSION['count'] <= $_SESSION['questionNum']) {
	require "views/question.tpl.php";
} else {
	require "views/result.tpl.php";
}
