<?php
session_start();
unset($_SESSION['questionListKeys']);
unset($_SESSION['questionNum']);
unset($_SESSION['year']);
unset($_SESSION['count']);
unset($_SESSION['correct']);
unset($_SESSION['qualification']);
unset($_SESSION['incorrectKeys']);

require "views/index.tpl.php";