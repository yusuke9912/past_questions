<!DOCTYPE html>

<html>

<?php include("header.inc.php"); ?>

<body>
    <div class="container">
        <h2><?= $question["question"] ?></h2>
        <p class="when">
        <?php 
            if($_SESSION['qualification'] == "fe-siken"){
                echo "<span>基本情報技術者試験&nbsp;</span>";
            }else{
                echo "<span>ITパスポート&nbsp;</span>";   
            }
            echo "<span>".$question["when"]."</span>" ;
            ?>
            </p>

        <ul>
            <li>1.　<?= $question["choice1"] ?></li>
            <li>2.　<?= $question["choice2"] ?></li>
            <li>3.　<?= $question["choice3"] ?></li>
            <li>4.　<?= $question["choice4"] ?></li>
        </ul>
        <p>正解: <?= $question["answer"] ?></p>
<a class="btn" href="result.php">戻る</a>
    </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>